@extends('eas.template')

@section('tulisan1')
<div class="container mt-5">
    <h3 class="text-center mb-4">Daftar Karyawan</h3>

    <!-- Form Create Karyawan -->
    <div class="card mb-4">
        <div class="card-header">Tambah Karyawan Baru</div>
        <div class="card-body">
            <form action="{{ route('karyawan.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- NIP -->
                    <div class="col-md-3">
                        <label for="NIP" class="form-label">NIP</label>
                        <input type="text" name="NIP" class="form-control" placeholder="123456789" required>
                    </div>
                    <!-- Nama -->
                    <div class="col-md-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" name="Nama" class="form-control" placeholder="Nama Karyawan" required>
                    </div>
                    <!-- Pangkat -->
                    <div class="col-md-3">
                        <label for="Pangkat" class="form-label">Pangkat</label>
                        <input type="text" name="Pangkat" class="form-control" placeholder="STAFF" required>
                    </div>
                    <!-- Gaji -->
                    <div class="col-md-3">
                        <label for="Gaji" class="form-label">Gaji</label>
                        <input type="number" name="Gaji" class="form-control" placeholder="5000000" required>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-success">Tambah Karyawan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Karyawan -->
    <table class="table table-striped table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Pangkat</th>
                <th scope="col">Gaji</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->NIP }}</td>
                <td>{{ $karyawan->Nama }}</td>
                <td>{{ $karyawan->Pangkat }}</td>
                <td style="text-align: right;">Rp. {{ number_format($karyawan->Gaji, 0, ',', '.') }}</td>
                <td>
                    <!-- Tombol View -->
                    <a href="{{ route('karyawan.show', $karyawan->NIP) }}" class="btn btn-info btn-sm">View</a>

                    <!-- Tombol Edit -->
                    <a href="{{ route('karyawan.edit', $karyawan->NIP) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $karyawans->links() }}
    </div>
</div>
@endsection
