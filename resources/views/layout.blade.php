<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Toko Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Toko Sepatu</a>
            <div>
                <a class="btn btn-outline-light me-2" href="/">Beranda</a>
                <a class="btn btn-outline-light me-2" href="/profil">Profil</a>
                <a class="btn btn-outline-light me-2" href="/layanan">Layanan</a>
                <a class="btn btn-outline-light me-2" href="/galeri">Galeri</a>
                <a class="btn btn-outline-light me-2" href="/kontak">Kontak</a>
                <a class="btn btn-warning" href="{{ route('produk.index') }}">Produk</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>