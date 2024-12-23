@extends('__templates.default')
@section('title','weather')
@section('main-content')


    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="mb-4 pb-2 fw-normal">
                <h3>Check weather</h3>
            </div>

            {{-- Check weather Form --}}
            <form action="{{route('weather.fetch')}}" method="POST">
                @csrf
            <div class="input-group rounded mb-3">
                <input type="search" class="form-control rounded" name="city" id="city" placeholder="Search city" aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-secondary">Get Report</button>
            </div>
            </form>



            {{-- Card --}}
            <div class="card shadow-0 border">

                {{-- To check if the API contains index=> weather --}}
                @if(isset($weather) && isset($weather['weather']))
                <div class="card-body p-4">
                    <h4 class="mb-1">{{$weather['name']}} , {{$weather['sys']['country']}}</h4> 
                    <p class="mb-2">Temperature: <strong>{{$weather['main']['temp']}}°C</strong></p>
                    <p>Feels Like :<strong>{{$weather['main']['feels_like']}}°C</strong></p>
                    <div class="d-flex flex-row align-items-center">
                        <p class="mb-0 me-4 fs-4">{{ucfirst($weather['weather'][0]['description'])}}</p>

                        {{-- To Fetch Openweather Icons --}}
                        <img src="http://openweathermap.org/img/w/{{$weather['weather'][0]['icon']}}.png ">
                      </div>
                </div>
                @endif
            </div>

            {{-- Error --}}
            @if(isset($weather['error']))
                <p class="mb-1 alert alert-danger">{{$weather['error']}}</p>
            @endif
        </div>
    </div>

@endsection
