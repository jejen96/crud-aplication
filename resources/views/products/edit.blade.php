<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        <br>
        <label for="price">Harga:</label>
        <input type="text" name="price" id="price" value="{{ $product->price }}" required>
        <br>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description">{{ $product->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
