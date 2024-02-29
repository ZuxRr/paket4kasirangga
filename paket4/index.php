<?php
// Ini adalah file home.php

// Include file header.php jika diperlukan
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Name - Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f4f4f4; */
            background-color: f4f4f4; /* Ganti 'gambar-background.jpg' dengan nama file gambar yang Anda inginkan */
            background-size: cover;
            background-position: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .header {
            /* background-color: #333; */
            background-image: url('img/sate.jpg'); /* Ganti 'gambar-header.jpg' dengan nama file gambar header yang Anda inginkan */
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 20px;
        }
        h1 {
            margin-top: 0;
        }
        .main-content {
            padding: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="container">
        <h1>Welcome to angga restaurant</h1>
        <p>We provide quality services to meet your needs.</p>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <h2>About Angga Restaurant</h2>
        <p>Selama lebih dari dua dekade, Restoran Angga Restoran telah menjadi destinasi kuliner yang terkemuka di kota ini. Berawal dari sebuah warung kecil di sudut jalan yang sederhana, restoran ini tumbuh menjadi salah satu restoran paling dicari oleh para pecinta kuliner lokal maupun wisatawan.

Sejarah panjang Angga Restoran dimulai pada tahun 1998, ketika pendiri kami, Bapak Angga, memulai usaha kuliner dengan bermodalkan hanya beberapa resep keluarga dan impian besar. Dengan kegigihan dan dedikasi, Bapak Angga secara perlahan membangun reputasi restoran yang menonjol dengan menu khasnya yang lezat dan pelayanan yang ramah.

Pada tahun 2005, Restoran Angga Restoran mulai menempati lokasi permanen pertamanya, sebuah bangunan kecil di pusat kota. Di sini, restoran kami mulai menarik perhatian lebih banyak pelanggan dengan hidangan khas yang diolah dengan resep tradisional yang telah diwariskan dari generasi ke generasi.

Dalam beberapa tahun berikutnya, Restoran Angga Restoran terus berkembang dan meraih kesuksesan. Kami mengambil inspirasi dari berbagai masakan tradisional Indonesia dan memadukannya dengan sentuhan modern untuk menciptakan menu yang menyenangkan semua lidah.

Hari ini, Restoran Angga Restoran dikenal sebagai salah satu restoran terbaik di kota ini, tidak hanya karena hidangan berkualitas tinggi kami, tetapi juga karena atmosfer yang hangat dan pelayanan yang istimewa kepada setiap pelanggan. Kami bangga akan warisan kuliner kami dan berkomitmen untuk terus memberikan pengalaman makan yang tak terlupakan bagi semua tamu kami.

Kami mengundang Anda untuk bergabung dengan kami di Restoran Angga Restoran dan menikmati pengalaman kuliner yang menggoda, memikat, dan menginspirasi.</p>
        <a href="pilihmenu.php" class="button">Menu</a> <!-- Ubah link ke file about.php jika diperlukan -->
    </div>
</div>

<div class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Company Name. All rights reserved.</p>
    </div>
</div>

</body>
</html>
