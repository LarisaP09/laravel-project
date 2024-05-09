<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function submitForm(Request $request)
    {
        $city = $request->input('city');

        $apiKey = 'f8b3a181d02ad4a2a3a3fe3111d85d51';

        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";

        $response = Http::withoutVerifying()->get($apiUrl);


        if ($response->ok()) {
            $weatherData = $response->json();
            $location = $weatherData['name'];
            $temperatureKelvin = $weatherData['main']['temp'];
            $temperatureCelsius = number_format(($temperatureKelvin - 273.15), 2);

            session()->flash('location', $location);
            session()->flash('temperature', $temperatureCelsius);
    
            return redirect()->route('contact');
        } else {
            return response()->json(['error' => 'Failed to fetch weather data'], 500);
        }
        $response = Http::get($apiUrl);

    }
}
