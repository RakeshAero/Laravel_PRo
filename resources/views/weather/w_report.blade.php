@extends('__templates.default')
@section('title','weather')
@section('main-content')

    <h1>Weather Report</h1>

    <form action="{{route('weather.fetch')}}" method="POST">
        @csrf
    <label>Type City Name :</label>
    <input type="text" name='city' id='city' required>
    <button type="submit" class="btn btn-secondary">Get Report</button>
    </form>
    @if(isset($weather['error']))
    <p style="color: red;">{{ $weather['error'] }}</p>
    @endif

    @if(isset($weather) && isset($weather['weather']))
    <pre>{{$weather['weather'][0]['main']}}</pre>
    <pre>{{$weather['weather'][0]['description']}}</pre>
    @endif

@endsection
