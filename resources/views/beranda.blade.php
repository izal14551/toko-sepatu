@extends('layout')
@section('content')
<div class="text-center">
    <h1>Selamat Datang di Toko Sepatu Kami!</h1>
    <p class="lead mt-3">Kami menyediakan berbagai pilihan sepatu berkualitas untuk kebutuhan Anda.</p>
    <a href="{{ route('produk.index') }}" class="btn btn-primary mt-3">Lihat Produk</a>
</div>
@endsection