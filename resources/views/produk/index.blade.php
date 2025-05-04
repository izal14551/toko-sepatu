@extends('layout')
@section('content')
<h1 class="mb-4">Daftar Produk Sepatu</h1>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">+ Tambah Produk</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produks as $produk)
        <tr>
            <td>{{ $produk->nama }}</td>
            <td>Rp{{ number_format($produk->harga) }}</td>
            <td>
                @if($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar {{ $produk->nama }}" width="100">
                @else
                <span>Tidak ada gambar</span>
                @endif
            </td>
            <td>
                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin ingin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection