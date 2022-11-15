<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <h2 class="text-center">Todo application</h2>


         <div class="text-center">
           
            <form action="{{route('saveTodo')}}" method="post">
                @csrf
                <input type = "text" name="todo">
                <button type="submit">Save</button>
            </form>
            <table class ="table">
                <tr>
                    <th>s.no</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                @foreach ($items as $value)
                <tr>
                    <td>
                        {{$value->id}}
                    </td>
                    <td>
                        {{$value->title}}
                    </td>
                    <td>
                        <a class ="btn btn-success" href="/edit/{{$value->id}}">Edit</a>
                    </td>
                    <td>
                        <a  class="btn btn-danger" href ="/delete/{{$value->id}}">Delete</a >
                    </td>
                </tr>
                @endforeach
            </table>


         </div>

</body>
</html>