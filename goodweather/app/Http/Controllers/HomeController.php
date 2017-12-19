<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

class HomeController extends Controller
{
    public function index()
    {
        return view ("home");  
    }

    public function maMeteo(request $request)
	{
		// Langue
        $lang = 'fr';
        // Unité ('metric' ou 'imperial')
        $units = 'metric';
        // Ville
        $city = $request->posUser;

        $owm = new OpenWeatherMap();
        $owm->setApiKey('e469e4ae90d47fcdf9df7c2666e35487');

        $weather = $owm->getWeather($city, $units, $lang);
        Mapper::map($weather->city->lat, $weather->city->lon);

		return view ("home");
	}
}
