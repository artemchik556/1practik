<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        .product-card {
            border: 1px solid #ddd;
            padding: 16px;
            margin: 8px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-card h2 {
            margin: 0 0 8px;
        }
    </style>
</head>
<body>
<h1>Products</h1>
@foreach ($products as $product)
    <x-product-card :name="$product['name']" :cost="$product['cost']" :amount="$product['amount']" />
@endforeach
</body>
</html>
