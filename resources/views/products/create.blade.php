<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset('css/products/create.css') }}">
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Price:</label>
        <input type="number" step="0.01" name="price" required><br><br>
        <label>Description:</label>
        <textarea name="description"></textarea><br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
