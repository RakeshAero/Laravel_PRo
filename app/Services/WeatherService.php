<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService{
    protected $api_key;

    public function __construct()
    {
        $this->api_key = env('OPENWEATHER_API_KEY');
    }

    public function getWeather($city){

        $url ='http://api.openweathermap.org/data/2.5/weather';
        $response = Http::get($url,[
            'q' => $city,
            'appid' => $this->api_key,
            'unit' => 'metric',
        ]);

        if($response->successful()){
            return $response->json();
        }

        return ['error'=> 'unable to fetch resources'];
    }
}
