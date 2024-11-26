<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherCotroller extends Controller
{

    protected $weatherservice;
    public function __construct(WeatherService $weatherservice)
    {
        $this->weatherservice = $weatherservice;
    }

    public function findWeather(Request $request)
    {
        $city = $request->input('city');
        // dd($city);
        $data = $this->weatherservice->getWeather($city);
        return view('weather.w_report',['weather'=> $data]);
    }

}
