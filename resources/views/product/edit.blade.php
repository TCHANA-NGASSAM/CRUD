<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Modification des produit</title>
</head>
<body>
    

<div>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif 
</div>
<form action="{{ route('product.update',['product' => $product]) }}" method="post">
<h1>edit product</h1>
    @csrf <!-- Protection CSRF -->
    @method('put')
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" value="{{$product-> name}}" required>

    <label for="qty">Quantité :</label>
    <input type="number" name="qty" id="qty" value="{{$product-> qty}}" required>

    <label for="price">Prix :</label>
    <input type="text" name="price" id="price" value="{{$product-> price}}" required>

    <label for="description">Description :</label>
    <input type="text" name="description" id="description"  value="{{$product-> description}}"></input>

    <button type="submit">MODIFIER</button>
</form>


</body>
</html>