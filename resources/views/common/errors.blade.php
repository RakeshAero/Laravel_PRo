@if ($errors->any())
    <div class="alert alert-danger">

        <strong>Oops! Something went wrong</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
