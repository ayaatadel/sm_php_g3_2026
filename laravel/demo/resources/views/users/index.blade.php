<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <x-navbarcomponent></x-navbarcomponent>

    <h1 class="text-danger text-center"> All Users</h1>


    {{-- @dump($users) --}}

    <a href="{{ route('dashboard') }}">
        <x-btncomponent class="info" name='back'></x-btncomponent>
    </a>
    <table class="table table-stribe table-bordered w-75 m-auto mt-10">
        <thead>
            <th>Id</th>
            <th>name</th>
            <th>age</th>
            <th>action</th>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr>
                <td>
                    {{ $user['id'] }}
                </td>
                <td>
                    {{ $user['name'] }}
                </td>
                <td>
                    {{ $user['age'] }}
                </td>
                <td class="text-center">
                    <button class="btn btn-warning">View</button>
                    {{-- <x-btncomponent class='btn-warning' name='View'> --}}
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
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
