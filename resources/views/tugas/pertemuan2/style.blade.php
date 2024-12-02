<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: bisque;
            font-size: 40px;
        }
        a:link, a:visited {
            text-decoration: none;
            color: blue;
        }
        a:hover {
            font-size: larger;
            color: yellow;
            text-decoration: underline;
        }
        .headingmerah {
            color: red;
        }
        .parratakanan {
            text-align: right;
        }
        .partengah {
            text-align: center;
        }
        .home-button {
            margin-top: 20px;
            text-align: center;
        }
        .home-button a {
            display: inline-block;
            background-color: #0066cc;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .home-button a:hover {
            background-color: #004a99;
        }
    </style>
</head>
<body>
    <h1 style="color: rgb(226, 101, 43);">Hallo Selamat Datang</h1>
    <h1 class="headingmerah">Hallo Selamat Datang Juga</h1>
    <p style="font-size: small; color: aqua;">Jurusan Sistem Informasi ITS</p>
    <p class="parratakanan">Jurusan Sistem Informasi ITS 2</p>
    <p class="partengah">Jurusan Sistem Informasi ITS 3</p>
    <a href="https://www.google.com" target="_blank">Google</a>
    <a href="https://www.its.ac.id" target="_self">ITS</a>
    <a href="{{ url('/hello') }}">File Pertemuan 1</a>

    <!-- Home Button -->
    <div class="home-button">
        <a href="{{ url('/') }}">Home</a>
    </div>
</body>
</html>
