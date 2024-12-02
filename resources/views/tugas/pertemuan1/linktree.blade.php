<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree Style Page 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://static.vecteezy.com/system/resources/thumbnails/000/556/930/small_2x/RR-v-jan-2019-135.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .phone-frame {
            width: 360px;
            height: 700px;
            border-radius: 40px;
            background-color: #333;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .phone-notch {
            width: 120px;
            height: 25px;
            background-color: #333;
            border-radius: 20px;
            position: absolute;
            top: 5px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }

        .container {
            max-width: 360px;
            margin: 0 auto;
            padding: 20px;
            background-color: #333;
            color: white;
            border-radius: 20px;
            text-align: center;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
            margin: 15px 0;
        }

        p {
            font-size: 14px;
            color: #cccccc;
        }

        .social-icons {
            margin: 20px 0;
        }

        .social-icons a {
            text-decoration: none;
            margin: 0 10px;
            display: inline-block;
            color: white;
        }

        .social-icons a img {
            width: 25px;
        }

        .link-button {
            display: block;
            width: 100%;
            background-color: #666;
            border: none;
            padding: 15px;
            color: white;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 15px;
            transition: background-color 0.3s ease;
        }

        .link-button:hover {
            background-color: #444;
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

    <div class="phone-frame">
        <div class="phone-notch"></div>

        <div class="container text-center">
            <img src="https://i.pinimg.com/564x/7c/0d/32/7c0d3281630d697db2c50814f19d99ee.jpg" alt="Profile Picture" class="profile-pic">

            <h1>Windah Basudara</h1>
            <p>Gamer, Youtuber, Content Creator</p>

            <div class="social-icons">
                <a href="https://www.instagram.com/windahbasudara/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                </a>
                <a href="https://www.facebook.com/brandowindah/?locale=id_ID" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                </a>
                <a href="https://www.youtube.com/@WindahBasudara" target="_blank">
                    <img src="https://img.icons8.com/?size=100&id=19318&format=png&color=000000" alt="YouTube">
                </a>
            </div>

            <a href="https://www.youtube.com/@WindahBasudara" target="_blank" class="link-button">Kunjungi Video-Videoku</a>
            <a href="https://www.instagram.com/windahbasudara/" target="_blank" class="link-button">Cek Instagramku</a>
            <a href="https://www.instagram.com/windahtopupstore/" target="_blank" class="link-button">IG Top Up Game Murah disinii!</a>
            <a href="https://windahtopupstore.com/" target="_blank" class="link-button">Atau Top Up lewat Website Resmiku!</a>
        </div>
    </div>

    <!-- Home Button -->
    <div class="home-button">
        <a href="{{ url('/') }}">Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
