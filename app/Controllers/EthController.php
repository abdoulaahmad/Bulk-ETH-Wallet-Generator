<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use kornrunner\Keccak;
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Crypto\Key\PrivateKey;

class EthController extends Controller {

    public function index() {
        return view('eth_addresses', ['addresses' => []]);
    }

    public function generate() {
        $numAddresses = (int) $this->request->getPost('num_addresses');
        $numAddresses = max($numAddresses, 1);
        $numAddresses = min($numAddresses, 100); // Limit to 100

        $addresses = [];

        for ($i = 0; $i < $numAddresses; $i++) {
            $privateKeyHex = bin2hex(random_bytes(32));

            // Generate public key using secp256k1 curve
            $secp256k1 = EccFactory::getSecgCurves()->generator256k1();
            $adapter = EccFactory::getAdapter();
            $privateKeyObject = new PrivateKey($adapter, $secp256k1, gmp_init($privateKeyHex, 16));
            $publicKeyPoint = $secp256k1->mul($privateKeyObject->getSecret());
            $publicKeyHex = $this->compressPublicKey($publicKeyPoint);

            // Generate Ethereum address
            $hash = Keccak::hash(hex2bin($publicKeyHex), 256);
            $ethAddress = '0x' . substr($hash, -40);

            $addresses[] = [
                'private_key' => $privateKeyHex,
                'public_key'  => $publicKeyHex,
                'address'     => $ethAddress
            ];
        }

        session()->set('generated_addresses', $addresses);

        return view('eth_addresses', ['addresses' => array_slice($addresses, 0, 10)]); // Show only 10
    }

    private function compressPublicKey($point) {
        $x = str_pad(gmp_strval($point->getX(), 16), 64, '0', STR_PAD_LEFT);
        $prefix = (gmp_intval(gmp_mod($point->getY(), gmp_init(2))) == 0) ? '02' : '03';
        return $prefix . $x;
    }

    public function downloadCSV() {
        $addresses = session()->get('generated_addresses');

        if (!$addresses || empty($addresses)) {
            return redirect()->to(base_url('/'))->with('error', 'No addresses found. Generate addresses first.');
        }

        $filename = "ethereum_addresses.csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        $output = fopen('php://output', 'w');
        fputcsv($output, ['Private Key', 'Public Key', 'Ethereum Address']);

        foreach ($addresses as $address) {
            fputcsv($output, [$address['private_key'], $address['public_key'], $address['address']]);
        }

        fclose($output);
        exit;
    }
}
