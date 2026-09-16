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
    <x-navbarcomponent></x-navbarcomponent>

    <h1 class="text-danger text-center">Register</h1>
    <form action="{{ route('auth.register') }}" method="POST" class="border border-3 w-75 m-auto mt-5 p-5">
        @csrf
        <label for="name" class="form-label"> User Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
        <label for="email" class="form-label"> User Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
        <label for="password" class="form-label"> User Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
        <button type="submit" class="btn btn-info mt-5 ">Register</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
