@extends('blog.writeup')
@section('sub-content')
    @if(isset($posts) && request()->is('writeups/viewwriteup'))
        @foreach ($posts as $post)
        <a href="#" class="nav-link">
            <div class="ms-3">
                <h3>{{$post->title}}</h3>
                {{-- <p>{{$post->posts}}<p> --}}
                    <p>{{ Str::limit($post->posts, 200, '...')}}</p>
                <p><i class="bi bi-person-circle fs-5 me-2"></i>{{$post->user->username}}</p>
            </div>
        </a>
        <hr>
        <br>
        @endforeach
    @endif
@endsection
