<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Form</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showalert() {
            alert("Selamat, Anda dapat undian 1 Milliyar");
        }

        function validateform() {
            var nrp = document.getElementById("nrpku");

            if (nrp.value.length != 10) {
                alert("NRP harus 10 Digit");
                nrp.focus();
                return false;
            }

            if (isNaN(nrp.value) == true) {
                alert("NRP Angka");
                nrp.focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <form action="https://www.google.co.id" method="get" onsubmit="return validateform();">
            <div class="input-group">
                <span class="input-group-text">NRP</span>
                <input type="text" class="form-control" placeholder="10 Digit NRP" name="NRP" id="nrpku">
            </div>

            <div class="input-group">
                <span class="input-group-text">Nama</span>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="Nama" id="nm">
            </div>

            <div class="input-group">
                <span class="input-group-text">Umur</span>
                <input type="text" class="form-control" placeholder="Umur Sekarang" name="umur" id="umr">
            </div>
            <input type="reset" class="btn btn-warning" value="Reset">
            <input type="submit" class="btn btn-success" value="Kirim">
            <input type="button" class="btn btn-default" value="Alert" onclick="showalert();">
        </form>

        <!-- Home Button -->
        <div class="home-button text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-primary" style="background-color: #0066cc; color: white;">Home</a>
        </div>
    </div>
</body>
</html>
