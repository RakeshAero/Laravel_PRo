@extends('__templates.default')
@section('title','writeups')
@section('main-content')
<div class="d-flex p-2">
    <sidebars>
        <ul class="nav flex-column nav-pills align-items-center">
            <li  class="nav-item "><a href="{{url('writeups/create')}}" id="create-post" class="nav-link {{request()->is('writeups/create') ? 'active' : ''}}"> + create writeup</a></li>
            <hr>
            <li class="nav-item"><a href="{{url('writeups/viewwriteup')}}" class="nav-link {{request()->is('writeups/viewwriteup') ? 'active' : ''}}">view writeups</a></li>
        </ul>
    </sidebars>
    <article class="w-75">
        <div class="d-flex justify-content-center flex-column mx-5">
            @yield('sub-content')
        </div>
    </article>
</div>
@endsection
