<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;


/**
 * By Default it is instanse of the weatherservice api
 */
class WeatherCotroller extends Controller
{

    protected $weatherservice;
    public function __construct(WeatherService $weatherservice) //Object of the weatherservice
    {
        $this->weatherservice = $weatherservice;
    }

    public function findWeather(Request $request)
    {
        $city = $request->input('city'); //To take the input['name'] from the request
        $data = $this->weatherservice->getWeather($city);
        return view('weather.w_report',['weather'=> $data]);
    }

}
