@extends('layouts.app')

@section('content')
    <h1>Edit Hewan</h1>
    <form action="{{ route('hewan.update', $hewan->kodehewan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="namahewan" class="form-label">Nama Hewan</label>
            <input type="text" class="form-control" name="namahewan" value="{{ $hewan->namahewan }}" required>
        </div>
        <div class="mb-3">
            <label for="jumlahhewan" class="form-label">Jumlah Hewan</label>
            <input type="number" class="form-control" name="jumlahhewan" value="{{ $hewan->jumlahhewan }}" required>
        </div>
        <div class="mb-3">
            <label for="tersedia" class="form-label">Tersedia</label>
            <select class="form-control" name="tersedia">
                <option value="Y" {{ $hewan->tersedia === 'Y' ? 'selected' : '' }}>Ada</option>
                <option value="N" {{ $hewan->tersedia === 'N' ? 'selected' : '' }}>Tidak Ada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Hewan</button>
    </form>
@endsection
