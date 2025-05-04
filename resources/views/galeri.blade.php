@extends('layout')

@section('content')
<h1>Galeri Produk</h1>

<div class="row">
    @foreach($produks as $produk)
    <div class="col-md-4 mb-3">
        <div class="card">
            @if($produk->gambar)
            <img src="{{ asset('storage/' . $produk->gambar) }}" class="card-img-top" alt="Gambar {{ $produk->nama }}">
            @else
            <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="No Image">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title">{{ $produk->nama }}</h5>
                <p class="card-text">{{ $produk->deskripsi }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    /* Membatasi gambar supaya memiliki ukuran yang sama */
    .card-img-top {
        width: 100%;
        /* Memastikan lebar gambar 100% */
        height: 200px;
        /* Set height yang tetap */
        object-fit: cover;
        /* Mengatur gambar agar ter-crop dan tidak terdistorsi */
    }
</style>
@endsection