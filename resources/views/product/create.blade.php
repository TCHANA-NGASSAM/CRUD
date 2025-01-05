<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<h1>Create product</h1>
<div>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif 
</div>
<form action="{{ route('product.store') }}" method="POST">
    @csrf <!-- Protection CSRF -->
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" required>

    <label for="qty">Quantité :</label>
    <input type="number" name="qty" id="qty" required>

    <label for="price">Prix :</label>
    <input type="text" name="price" id="price" required>

    <label for="description">Description :</label>
    <input name="description" id="description"></input>

    <button type="submit">Enregistrer</button>
</form>


</body>
</html>