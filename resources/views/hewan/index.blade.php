<!DOCTYPE html>
<html>
<head>
    <title>Daftar Hewan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file if needed -->
</head>
<body>
    <div class="container">
        <h1>Daftar Hewan</h1>

        <!-- Add New Hewan Form -->
        <form action="{{ route('hewan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kodehewan" class="form-label">Kode Hewan</label>
                <input type="text" name="kodehewan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="namahewan" class="form-label">Nama Hewan</label>
                <input type="text" name="namahewan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jumlahhewan" class="form-label">Jumlah Hewan</label>
                <input type="number" name="jumlahhewan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tersedia" class="form-label">Tersedia</label>
                <select name="tersedia" class="form-control" required>
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Hewan</button>
        </form>

        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>Kode Hewan</th>
                    <th>Nama Hewan</th>
                    <th>Jumlah Hewan</th>
                    <th>Tersedia</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hewans as $hewan)
                    <tr>
                        <td>{{ $hewan->kodehewan }}</td>
                        <td>{{ $hewan->namahewan }}</td>
                        <td>{{ $hewan->jumlahhewan }}</td>
                        <td>{{ $hewan->tersedia }}</td>
                        <td>
                            <a href="{{ route('hewan.edit', $hewan->kodehewan) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('hewan.destroy', $hewan->kodehewan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
