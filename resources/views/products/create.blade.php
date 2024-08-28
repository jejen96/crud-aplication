<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="price">Harga:</label>
        <input type="text" name="price" id="price" required>
        <br>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
