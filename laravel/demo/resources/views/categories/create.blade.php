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

    <h1 class="text-danger text-center"> Creste New Category</h1>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <form action="{{ route('categories.store') }}" method="POST" class="border border-3 w-75 m-auto mt-5 p-5">
        @csrf

        <label for="categoryName" class="form-label"> Category Name</label>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="name" id="categoryName" class="form-control">
        <label for="categoryDescription" class="form-label"> Category Description</label>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="description" id="categoryDescription" class="form-control">
        <button type="submit" class="btn btn-success mt-5">Create</button>
        <a href="{{ route('categories.index') }}" class="text-decoration-none  mt-5"> <button
                class="btn btn-info">Back</button></a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
