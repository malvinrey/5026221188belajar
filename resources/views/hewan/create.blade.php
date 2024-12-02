@extends('layouts.app')

@section('content')
    <h1>Tambah Hewan</h1>
    <form action="{{ route('hewan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namahewan" class="form-label">Nama Hewan</label>
            <input type="text" class="form-control" name="namahewan" placeholder="Nama Hewan" required>
        </div>
        <div class="mb-3">
            <label for="jumlahhewan" class="form-label">Jumlah Hewan</label>
            <input type="number" class="form-control" name="jumlahhewan" placeholder="Jumlah Hewan" required>
        </div>
        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <select class="form-control" name="tersedia">
                <option value="Y">Ada</option>
                <option value="N">Tidak Ada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Hewan</button>
    </form>
@endsection
