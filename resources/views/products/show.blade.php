<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>Harga: {{ $product->price }}</p>
    <p>Deskripsi: {{ $product->description }}</p>
    <a href="{{ route('products.index') }}">Kembali</a>
</body>
</html>
