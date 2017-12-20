<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
use Khill\Lavacharts\Lavacharts;

// require('vendor/autoload.php');

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

        $forecast = $owm->getWeatherForecast($city.',fr', $units, $lang, '', 5);

        // $lava = new Lavacharts; // See note below for Laravel
        $temperatures = \Lava::DataTable();

        $temperatures->addDateTimeColumn('Heure');
        $temperatures->addNumberColumn('Température (°C)');
        foreach ($forecast as $weather){
            $temperatures->addRow([$weather->time->from->format('d.m.Y H:i:s'), $weather->temperature->getValue()]);
        }
        \Lava::LineChart('Temps', $temperatures, [
            'title' => 'Météo à '.$forecast->city->name
        ]);

        Mapper::map($forecast->city->lat, $forecast->city->lon);

		return view("home");
	}
}
