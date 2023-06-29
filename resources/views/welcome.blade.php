<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<div class="container m-5 p-5 shadow rounded">
    <h1 class="fw-bold">Todo List</h1>

    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <form method="post" action="{{route('createtodo')}}">
        @csrf
        <input name="content" type="text" class="form-control" required>
        <button type="submit" class="mt-3 btn btn-primary">Add</button>
    </form>

    <ul class="list-group mt-5">
        @foreach($todos as $todo)
        <li class="list-group-item">
            
            @if($todo->status === 'pending')
            <span class="badge bg-primary">Pending</span>
            @endif

            @if($todo->status === 'complete')
            <span class="badge bg-success">Complete</span>
            @endif

            {{$todo->content}}
        </li>
        @endforeach
    </ul>
</div>

</body>

</html>