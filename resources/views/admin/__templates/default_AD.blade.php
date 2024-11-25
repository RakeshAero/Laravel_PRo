<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>
    <header>
        <navbar class="navbar navbar-expand-lg align-items-center bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand fs-4" href="#">Admin Panel</a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('usertable')}}">Users</a></li>
                    <li class="nav-item"><a class="nav-link"></a></li>
                    <li class="nav-item"><a class="nav-link" role="button" onclick="document.getElementById('logout-id').submit()">Logout</a></li>
                </ul>
            </div>
        </navbar>
    </header>
    
    <form method="POST" action="{{route('logout')}}" id="logout-id">
        @csrf
    </form>

    {{-- Main Content --}}
    <div class="d-flex justify-content-center">
    @yield('main_content')
    </div>


</body>
</html>
