<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    {{-- @dump($categories) --}}

    <h1 class="text-danger text-center"> All Products</h1>
    <a href="{{ route('products.create') }}" class="text-decoration-none"> <button class="btn btn-success mb-5">Create
            New Product</button></a>

    <table class="table table-stribe table-bordered w-75 m-auto mt-10">
        <thead>
            <th>Id</th>
            <th>name</th>
            <th>Description</th>
            <th>action</th>
        </thead>
        <tbody>

            @foreach ($products as $product)
            <tr>
                <td>
                    {{ $product['id'] }}
                </td>
                <td>
                    {{ $product['name'] }}
                </td>
                <td>
                    {{ $product['description'] }}
                </td>
                <td class="text-center d-flex justify-content-around">
                    <a href="{{ route('products.show',$product->id) }}" class="text-decoration-none"> <button
                            class="btn btn-warning">View</button></a>
                    <a href="{{ route('products.edit',$product->id) }}" class="text-decoration-none"> <button
                            class="btn btn-info">Edit</button></a>
                    {{-- <form action="{{ route('products.destory',$product->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>

                    </form> --}}

                </td>
            </tr>

            @endforeach
        </tbody>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
