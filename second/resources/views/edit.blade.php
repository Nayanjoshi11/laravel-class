<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edited </h2>

    <form action="/edit/{{$data->id}}" method="post">
                @csrf
                <input type = "text" name="todo" value="{{$data->title}}">
                <button type="submit">update</button>
            </form>
</body>     
</html>