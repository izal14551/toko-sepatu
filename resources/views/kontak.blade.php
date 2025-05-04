@extends('layout')
@section('content')
<h1>Hubungi Kami</h1>
<form>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" class="form-control" placeholder="Nama Anda">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email Anda">
    </div>
    <div class="mb-3">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea id="pesan" class="form-control" rows="4" placeholder="Pesan Anda"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Kirim</button>
</form>
@endsection