<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Layout Example</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="mt-4 p-5 bg-warning text-white rounded">
            <h1>My First Bootstrap Page</h1>
        </div>
        <div class="alert alert-success">
            <p>This part is inside a .container-fluid class.</p>
        </div>
        <p>The .container-fluid class provides a full width container, spanning the entire width of the viewport.</p>

        <div class="row">
            <div class="col-lg-1">
                <p>kiri</p>
            </div>
            <div class="col-lg-10 border border-1">
                <p>tengah</p>
                <div class="row">
                    <div class="col-lg-8 border border-1">
                        <p>ini isinya 8</p>
                    </div>
                    <div class="col-lg-4 border border-1">
                        <p>ini isinya 4</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <a href="https://www.its.ac.id"><button class="btn btn-danger">Bahaya !</button></a>
                        <button class="btn border border-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2l0 82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9l0-107.2c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                            </svg> Custom
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <p>kanan</p>
            </div>
        </div>

        <!-- Home Button -->
        <div class="home-button text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-primary" style="background-color: #0066cc; color: white;">Home</a>
        </div>
    </div>
</body>
</html>
