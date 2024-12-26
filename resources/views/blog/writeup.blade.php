@extends('__templates.default')
@section('title','writeups')
@section('main-content')
<div class="d-flex p-2">
    <sidebars>
        <ul class="nav flex-column nav-pills border border-1 align-items-center">
            <li  class="nav-item border border-1 bg-success"><a href="{{url('/create')}}" id="create-post" class="nav-link {{request()->is('create') ? active : ''}} text-white "> + create writeup</a></li>
            <hr>
            <li class="nav-item"><a href="#" class="nav-link">view writeups</a></li>
        </ul>
    </sidebars>
    <article class="w-75">

        <div>
            @if(isset($posts) && request()->is('writeups'))
            <table class="table">
                @foreach ($posts as $post)
                <tr>
                    <tr>
                        <th>{{$post->user_id}}</th>
                        <th>{{$post->title}}</th>
                    </tr>
                    <tr>
                        <td>{{$post->posts}}</td>
                    </tr>
                </tr>
                @endforeach
            </table>
            @elseif(request()->is('create'))
                @include("blog.createblog");
            @endif
        </div>
    </article>
</div>
@endsection
