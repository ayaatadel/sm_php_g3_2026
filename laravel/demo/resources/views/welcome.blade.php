<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
<x-cssbootstrap></x-cssbootstrap>

    </head>

  <body>
    {{-- // navbar  --}}
    <x-navbarcomponent></x-navbarcomponent>
    <h1 style="text-align: center;color:brown;margin:20px">Welcome to Laravel</h1>

<x-jsbootstrap></x-jsbootstrap>

</body>

</html>
