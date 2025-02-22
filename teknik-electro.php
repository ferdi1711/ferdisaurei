<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknik Elektro - Institut Teknologi dan Bisnis Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
        }

        header {
            text-align: center;
            padding: 50px 20px;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
        }

        section {
            padding: 50px 20px;
        }

        .details {
            text-align: center;
            margin-bottom: 30px;
        }

        .details h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .details p {
            font-size: 1.2rem;
        }

        .cta {
            text-align: center;
            margin-top: 30px;
        }

        .cta a {
            text-decoration: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            color: #fff;
            background: #fdbb2d;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .cta a:hover {
            background: #ff9900;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
        }

        footer p {
            font-size: 0.9rem;
        }

        footer p a {
            color: #fdbb2d;
            text-decoration: none;
        }

        footer p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Teknik Elektro</h1>
        <p>Institut Teknologi dan Bisnis Indonesia</p>
    </header>
    <section>
        <div class="details">
            <h2>Visi</h2>
            <p>Mencetak insinyur elektro yang inovatif dan kompeten di bidang teknologi listrik dan elektronik.</p>
            <h2>Misi</h2>
            <p>Menyelenggarakan pendidikan, penelitian, dan pengabdian kepada masyarakat di bidang teknik elektro berbasis teknologi terkini.</p>
        </div>
        <div class="cta">
            <a href="#">Informasi Lebih Lanjut</a>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Institut Teknologi dan Bisnis Indonesia. All rights reserved. | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
