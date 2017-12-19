<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
        // Language of data (try your own language here!):
        $lang = 'fr';

        // Units (can be 'metric' or 'imperial' [default]):
        $units = 'metric';

        // Get OpenWeatherMap object. Don't use caching (take a look into Example_Cache.php to see how it works).
        $owm = new OpenWeatherMap();
        $owm->setApiKey('');

        // Example 1: Get current temperature in Berlin.
        $weather = $owm->getWeather('Clermont-Ferrand', $units, $lang);
        Mapper::map($weather->city->lat, $weather->city->lon);
        return view('map');
	}

}
