@extends('__templates.default')
@section('title','Services')
@section('main-content')
    <div class="row text-center">
        <h3>This is a Service Page</h3>
        <h4>
        @if($session == 1)
            Session is Under Construction !
        @else
            OOPS!.. Session Expired
        @endif
        @forelse ($authors as $author)
            <p>{{$author['name']}}</p>
        @empty
            <p>No Authors</p>
        @endforelse
    </h4>
    </div>
@endsection

