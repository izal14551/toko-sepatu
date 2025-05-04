@extends('layout')

@section('content')
<h1>Edit Produk</h1>

<form method="POST" action="{{ route('produk.update', $produk->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama) }}">
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}">
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">

        <!-- Menampilkan gambar yang sudah ada sebelumnya -->
        @if($produk->gambar)
        <img src="{{ asset('storage/' . $produk->gambar) }}" class="img-fluid mt-2" style="max-width: 200px; height: 200px; object-fit: cover;" alt="Gambar {{ $produk->nama }}">
        @else
        <img src="https://via.placeholder.com/200x200?text=No+Image" class="img-fluid mt-2" alt="No Image">
        @endif

        @error('gambar')
        <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</form>

<style>
    /* CSS untuk ukuran gambar yang konsisten di halaman Edit */
    .img-fluid {
        width: 100%;
        height: 200px;
        /* Mengatur tinggi gambar agar konsisten */
        object-fit: cover;
        /* Menjamin gambar tetap ter-crop tanpa distorsi */
    }
</style>
@endsection