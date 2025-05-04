@extends('layout')
@section('content')
<h1>{{ $produk->nama }}</h1>

<p><strong>Harga:</strong> Rp{{ number_format($produk->harga) }}</p>
<p><strong>Deskripsi:</strong></p>
<p>{{ $produk->deskripsi }}</p>

<a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali ke daftar produk</a>
@endsection