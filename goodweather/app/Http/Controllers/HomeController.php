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
        $weather_city = $owm->getWeather($city.',fr', $units, $lang);

        // Températures
        $temperatures = \Lava::DataTable();
        $temperatures->addDateTimeColumn('Heure');
        $temperatures->addNumberColumn('Température (°C)');

        // Vent
        $winds = \Lava::DataTable();
        $winds->addDateTimeColumn('Heure');
        $winds->addNumberColumn('Vent (m/s)');
        // Humidité
        $humidity = \Lava::DataTable();
        $humidity->addDateTimeColumn('Heure');
        $humidity->addNumberColumn('Humidité (%)');

        foreach ($forecast as $weather){
            $temperatures->addRow([$weather->time->from->format('d.m.Y H:i:s'), $weather->temperature->getValue()]);
            $winds->addRow([$weather->time->from->format('d.m.Y H:i:s'), $weather->wind->speed->getValue()]);
            $humidity->addRow([$weather->time->from->format('d.m.Y H:i:s'), $weather->humidity->getValue()]);
        }
        \Lava::LineChart('Temps', $temperatures, [
            'title' => 'Températures à '.$forecast->city->name,
            'width' => '1000',
            'height'=> '500',
            'titleTextStyle' => [
               'color'    => '#FF0000 ',
               'fontSize' => 24
        ]]);
        \Lava::LineChart('Vents', $winds, [
            'title' => 'Vent à '.$forecast->city->name,
            'width' => '1000',
            'height'=> '500',
            'titleTextStyle' => [
               'color'    => '#FF0000 ',
               'fontSize' => 24
        ]]);
        \Lava::LineChart('Humidity', $humidity, [
            'title' => 'Humidité de l\'air à '.$forecast->city->name,
            'width' => '1000',
            'height'=> '500',
            'titleTextStyle' => [
               'color'    => '#FF0000 ',
               'fontSize' => 24
        ]]);

        Mapper::map($forecast->city->lat, $forecast->city->lon);

		return view("home", compact('weather_city'));
	}
}
