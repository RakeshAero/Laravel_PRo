<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    @include('common.message')
    <p>Admin Page</p>
    <a href="{{route('login')}}" onclick="document.getElementById('logout-id').submit()">Log out</a>
    <form method="POST" action="{{route('logout')}}" id="logout-id">
        @csrf
    </form>
</body>
</html>
