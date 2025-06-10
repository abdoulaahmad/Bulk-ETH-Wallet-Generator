# ETH Address Generator

<div align="center">
  <img src="https://via.placeholder.com/800x400?text=ETH+Address+Generator" alt="ETH Address Generator Preview">
  
  [![PHP Version](https://img.shields.io/badge/PHP-8.0+-blue.svg)](https://php.net)
  [![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4.0+-orange.svg)](https://codeigniter.com)
  [![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
</div>

A modern, secure, and user-friendly Ethereum address generator with a sleek cyberpunk-inspired interface. Built with PHP and CodeIgniter 4, this tool allows you to generate multiple Ethereum addresses with their corresponding private and public keys.

## ✨ Features

- 🎨 **Modern UI**: Sleek cyberpunk-inspired interface with glassmorphic design
- 🔄 **Bulk Generation**: Generate up to 100 Ethereum addresses at once
- 🔒 **Secure**: Uses cryptographically secure random number generation
- 📥 **Export**: Download generated addresses in CSV format
- 📱 **Responsive**: Works seamlessly on all devices
- 🎯 **User-Friendly**: Simple and intuitive interface

## 🚀 Quick Start

### Prerequisites

- PHP 8.0 or higher
- Composer
- Web server (Apache/Nginx)

### Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/eth-gen.git
cd eth-gen
```

2. Install dependencies:
```bash
composer install
```

3. Configure your environment:
```bash
cp env .env
```

4. Start the development server:
```bash
php spark serve
```

## 🛠️ Technical Stack

- **Backend**:
  - PHP 8.0+
  - CodeIgniter 4 Framework
  - kornrunner/Keccak for hashing
  - Mdanter/Ecc for elliptic curve cryptography

- **Frontend**:
  - HTML5
  - CSS3 (with modern features)
  - Google Fonts (Orbitron, Share Tech Mono)

## 🔒 Security Features

- Secure random number generation using `random_bytes()`
- Input validation and sanitization
- XSS protection
- CSRF protection
- Rate limiting
- Secure key generation

## 🎨 UI/UX Features

- Glassmorphic design elements
- Smooth animations and transitions
- Responsive layout
- Dark theme with neon accents
- Interactive hover effects
- Grid background animation
- Gradient text effects

## 🔄 Usage

1. Enter the number of addresses you want to generate (1-100)
2. Click "Generate" to create new addresses
3. View the generated addresses in the table
4. Download the full list as CSV if needed

## 📦 Dependencies

```json
{
    "require": {
        "php": "^8.0",
        "kornrunner/keccak": "^1.1",
        "mdanter/ecc": "^0.5.0"
    }
}
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Abdullahi Abba Ahmad**

## 🙏 Acknowledgments

- CodeIgniter Framework
- kornrunner/Keccak
- Mdanter/Ecc
- All contributors and supporters

## 📞 Contact

For any queries or support, please reach out to [your-email@example.com]

## 🔮 Future Enhancements

- [ ] Address validation
- [ ] Balance checking
- [ ] Multiple export formats
- [ ] HD wallet support
- [ ] Multi-chain support
- [ ] API integration
- [ ] QR code generation
- [ ] Address labeling system
- [ ] Batch operations
- [ ] Analytics dashboard

## ⚠️ Disclaimer

This tool is for educational purposes only. Always ensure you understand the security implications of generating and storing private keys. Never share your private keys with anyone.
