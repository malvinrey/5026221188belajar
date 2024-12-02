<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Clients Love Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .outer-box {
            background-color: #e0e0e0;
            padding: 60px 0;
            position: relative;
        }

        .inner-box {
            background-color: white;
            padding: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }

        .overlay-box {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 200px;
            background-color: rgba(0, 0, 0, 0.1);
            z-index: 1;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        .testimonials {
            padding: 50px 0;
            position: relative;
            z-index: 2;
        }

        .testimonial-item {
            display: block;
            margin-bottom: 30px;
        }

        .testimonial-content {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .testimonial-content img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .testimonial-text p {
            text-align: left;
            margin-bottom: 5px;
        }

        .testimonial-name {
            text-align: left;
            margin-left: 80px;
        }

        .logos {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            position: relative;
            z-index: 3;
        }

        .logos img {
            width: 100px;
            opacity: 0.8;
        }

        .logos img:hover {
            opacity: 1;
        }

        .home-button {
            margin-top: 20px;
            text-align: center;
            margin-bottom: 30px; /* Add margin to avoid overlap with footer */
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
    <div class="outer-box">
        <div class="inner-box text-center">
            <h2 class="my-5">Our clients love us.</h2>

            <div class="testimonials row">
                <div class="col-md-6 testimonial-item">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Client">
                        <div class="testimonial-text">
                            <p>"This service revolutionized the way we handle our operations. Highly recommended!"</p>
                        </div>
                    </div>
                    <div class="testimonial-name">
                        <h5>Michael Anderson</h5>
                        <p>CEO of Anderson Corp</p>
                    </div>
                </div>

                <div class="col-md-6 testimonial-item">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="Client">
                        <div class="testimonial-text">
                            <p>"I couldn't be more satisfied with the results. Outstanding support and quality."</p>
                        </div>
                    </div>
                    <div class="testimonial-name">
                        <h5>David Parker</h5>
                        <p>CTO of Parker Innovations</p>
                    </div>
                </div>

                <div class="col-md-6 testimonial-item">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/women/10.jpg" alt="Client">
                        <div class="testimonial-text">
                            <p>"Our collaboration was seamless, and the outcomes exceeded our expectations."</p>
                        </div>
                    </div>
                    <div class="testimonial-name">
                        <h5>Sarah Johnson</h5>
                        <p>Founder of Johnson Solutions</p>
                    </div>
                </div>

                <div class="col-md-6 testimonial-item">
                    <div class="testimonial-content">
                        <img src="https://randomuser.me/api/portraits/women/24.jpg" alt="Client">
                        <div class="testimonial-text">
                            <p>"An essential partner in our business growth. Their expertise is unmatched."</p>
                        </div>
                    </div>
                    <div class="testimonial-name">
                        <h5>Emily Roberts</h5>
                        <p>Manager at Roberts Enterprise</p>
                    </div>
                </div>
            </div>

            <div class="overlay-box"></div>

            <div class="logos">
                <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft Logo">
                <img src="https://logo.clearbit.com/tesla.com" alt="Tesla Logo">
                <img src="https://logo.clearbit.com/shopify.com" alt="Shopify Logo">
                <img src="https://logo.clearbit.com/adobe.com" alt="Adobe Logo">
                <img src="https://logo.clearbit.com/oracle.com" alt="Oracle Logo">
            </div>
        </div>
    </div>

    <!-- Home Button -->
    <div class="home-button">
        <a href="{{ url('/') }}">Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
