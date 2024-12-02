<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Counter</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file if needed -->
</head>
<body>
    <div class="container">
        <h1>Jumlah Pengunjung</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{ $jumlah }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
