<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <x-cssbootstrap></x-cssbootstrap>
  </head>

<body>
    <x-navbarcomponent></x-navbarcomponent>

    <h1 class="text-danger text-center">LOGIN</h1>
    <form action="{{ route('auth.login') }}" method="POST" class="border border-3 w-75 m-auto mt-5 p-5">
        @csrf
         @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="email" class="form-label"> User Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
        <label for="password" class="form-label"> User Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
        <button type="submit" class="btn btn-info mt-5 ">login</button>
    </form>
    <x-jsbootstrap></x-jsbootstrap>

</body>

</html>
