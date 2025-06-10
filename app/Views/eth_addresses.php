<!-- بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيم -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETH Address Generator | Web3</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
        :root {
            --neon-cyan: #8be9fd;
            --neon-lime: #50fa7b;
            --neon-lavender: #bd93f9;
            --dark-bg: #050505;
            --card-bg: rgba(8, 8, 8, 0.4);
            --text-primary: #f8f8f2;
            --text-secondary: #b3b3b3;
            --glass-border: rgba(139, 233, 253, 0.1);
            --glass-shadow: rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Share Tech Mono', monospace;
            background-color: var(--dark-bg);
            color: var(--text-primary);
            min-height: 100vh;
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(139, 233, 253, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 80%, rgba(189, 147, 249, 0.1) 0%, transparent 40%),
                linear-gradient(45deg, rgba(80, 250, 123, 0.05) 0%, transparent 100%);
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(90deg, var(--dark-bg) 1px, transparent 1px) 0 0 / 50px 50px,
                linear-gradient(0deg, var(--dark-bg) 1px, transparent 1px) 0 0 / 50px 50px;
            opacity: 0.1;
            pointer-events: none;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(50px);
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, transparent 0%, var(--dark-bg) 70%);
            z-index: -1;
            animation: pulse 10s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 0.5;
            }
            50% {
                opacity: 0.8;
            }
        }

        h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            background: linear-gradient(45deg, var(--neon-cyan), var(--neon-lavender));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-align: center;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(139, 233, 253, 0.5);
            animation: glow 2s ease-in-out infinite alternate;
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--neon-cyan), var(--neon-lavender), transparent);
            animation: borderGlow 2s ease-in-out infinite;
        }

        @keyframes borderGlow {
            0%, 100% {
                opacity: 0.5;
                width: 100px;
            }
            50% {
                opacity: 1;
                width: 200px;
            }
        }

        h4 {
            font-family: 'Orbitron', sans-serif;
            color: var(--neon-lime);
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.2rem;
            text-shadow: 0 0 10px rgba(80, 250, 123, 0.3);
        }

        .form-container {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px var(--glass-shadow);
            margin-bottom: 2rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(139, 233, 253, 0.1),
                rgba(189, 147, 249, 0.1),
                transparent
            );
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% {
                transform: translateX(-100%) rotate(45deg);
            }
            100% {
                transform: translateX(100%) rotate(45deg);
            }
        }

        .form-container:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 12px 40px var(--glass-shadow);
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 1;
        }

        label {
            font-size: 1.2rem;
            color: var(--text-primary);
            text-shadow: 0 0 10px rgba(248, 248, 242, 0.3);
        }

        input {
            background: rgba(248, 248, 242, 0.05);
            border: 1px solid var(--glass-border);
            color: var(--text-primary);
            padding: 0.8rem 1rem;
            border-radius: 12px;
            font-family: 'Share Tech Mono', monospace;
            width: 100px;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 20px rgba(139, 233, 253, 0.3);
            border-color: var(--neon-cyan);
        }

        button {
            background: linear-gradient(45deg, var(--neon-cyan), var(--neon-lavender));
            color: var(--text-primary);
            border: none;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 12px;
            cursor: pointer;
            font-family: 'Orbitron', sans-serif;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(248, 248, 242, 0.2),
                transparent
            );
            transition: 0.5s;
        }

        button:hover::before {
            left: 100%;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(139, 233, 253, 0.4);
        }

        .table-container {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 1.5rem;
            margin-top: 2rem;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px var(--glass-shadow);
            overflow-x: auto;
            transition: all 0.3s ease;
        }

        .table-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px var(--glass-shadow);
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 1rem 0;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--glass-border);
            font-family: 'Share Tech Mono', monospace;
        }

        th {
            background: rgba(139, 233, 253, 0.1);
            color: var(--neon-cyan);
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr {
            transition: all 0.3s ease;
        }

        tr:hover {
            background: rgba(139, 233, 253, 0.05);
            transform: scale(1.01);
        }

        .download-btn {
            display: inline-block;
            background: linear-gradient(45deg, var(--neon-cyan), var(--neon-lavender));
            color: var(--text-primary);
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 12px;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 2rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .download-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(248, 248, 242, 0.2),
                transparent
            );
            transition: 0.5s;
        }

        .download-btn:hover::before {
            left: 100%;
        }

        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(139, 233, 253, 0.4);
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px rgba(139, 233, 253, 0.5);
            }
            to {
                text-shadow: 0 0 20px rgba(139, 233, 253, 0.8),
                            0 0 30px rgba(189, 147, 249, 0.6);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            h1 {
                font-size: 2rem;
            }

            form {
                flex-direction: column;
            }

            .table-container {
                margin: 1rem -1rem;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ETH Address Generator</h1>
        <h4>By Abdullahi Abba Ahmad</h4>

        <div class="form-container">
            <form action="<?= base_url('generate') ?>" method="post">
                <label for="num_addresses">Number of Addresses:</label>
                <input type="number" name="num_addresses" id="num_addresses" min="1" max="100" required>
                <button type="submit">Generate</button>
            </form>
        </div>

        <?php if (!empty($addresses)): ?>
            <div class="table-container">
                <h2 style="color: var(--neon-cyan); margin-bottom: 1rem; font-family: 'Orbitron', sans-serif;">Generated Addresses</h2>
                <table>
                    <tr>
                        <th>Private Key</th>
                        <th>Public Key</th>
                        <th>Ethereum Address</th>
                    </tr>
                    <?php foreach ($addresses as $addr): ?>
                        <tr>
                            <td><?= esc($addr['private_key']) ?></td>
                            <td><?= esc($addr['public_key']) ?></td>
                            <td><?= esc($addr['address']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div style="text-align: center;">
                <a class="download-btn" href="<?= base_url('downloadCSV') ?>">Download CSV</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
