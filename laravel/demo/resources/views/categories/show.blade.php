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
    {{-- @dd($category) --}}
    {{-- dump and die ==> dump + exit --}}

        <h1 class="text-danger text-center"> All Categories</h1>

      <table class="table table-stribe table-bordered w-75 m-auto mt-10">
        <thead>
            <th>Id</th>
            <th>name</th>
            <th>Description</th>
            <th>action</th>
        </thead>
        <tbody>


            <tr>
                <td>
                    {{ $category['id'] }}
                </td>
                <td>
                    {{ $category['name'] }}
                </td>
                <td>
                    {{ $category['description'] }}
                </td>
              <td class="text-center d-flex justify-content-around">
                    <a href="{{ route('categories.show',  $category->id) }}" class="text-decoration-none"> <button
                            class="btn btn-warning">View</button></a>
                    <a href="{{ route('categories.edit',  $category->id) }}" class="text-decoration-none"> <button
                            class="btn btn-info">Edit</button></a>
                    <form action="{{ route('categories.destory',$category->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>

                    </form>

                </td>
            </tr>

        </tbody>

    </table>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
