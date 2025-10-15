<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
    <link rel="stylesheet" href="{{ asset('css/products/index.css') }}">
</head>
<body>
    <h1>All Products</h1>
    <a href="{{ route('products.create') }}">Create New Product</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}">View</a> |
                <a href="{{ route('products.edit', $product->id) }}">Edit</a> |
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
