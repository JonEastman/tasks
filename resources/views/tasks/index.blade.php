<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - My Tasks</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>My Tasks</h1>
    <ul>
        @foreach($tasks as $task)
            <a href="/tasks/{{ $task->id }}">
                <li>{{ $task->body }}</li>
            </a>
        @endforeach
    </ul>
</body>
</html>