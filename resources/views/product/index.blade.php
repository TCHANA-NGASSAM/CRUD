<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
       <div class="alert-success">
        @if(session()->has('success'))
           <div>
            {{session('success')}}
           </div>
        @endif
    </div>    
    <div>
        <table border=1>
            <thead>
                <tr>     
                    <th>ID</th>
                    <th>name</th>
                    <th>Qty</th>
                    <th>price</th>
                    <th>description</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                         <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td >
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td> <a href="{{route('product.edit', ['product' => $product ])}}">edit</a></td>
                        <td>
                            <form action="{{route('product.destroy', ['product' => $product])}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">delete</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>