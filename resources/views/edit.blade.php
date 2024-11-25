<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>
    <h2>Edit Pegawai</h2>
    <form action="/pegawai/edit/{{ $pegawai->pegawai_id }}" method="POST">
        @csrf

        <div class="form-group row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama pegawai" value="{{ $pegawai->pegawai_nama }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" id="alamat" class="form-control" required placeholder="Masukkan alamat pegawai">{{ $pegawai->pegawai_alamat }}</textarea>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" name="umur" id="umur" class="form-control" required placeholder="Masukkan umur pegawai">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" name="jabatan" id="jabatan" class="form-control" required placeholder="Masukkan jabatan pegawai" value="{{ $pegawai->pegawai_jabatan }}">
            </div>
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
