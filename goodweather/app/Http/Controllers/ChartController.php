<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\CountryUser;

class ChartController extends Controller
{
    //
    public function getLaraChart()
    {
    	
        $stocksTable = \Lava::DataTable();  // Lava::DataTable() if using Laravel

		$stocksTable->addDateColumn('Day of Month')
		            ->addNumberColumn('Projected')
		            ->addNumberColumn('Official');

		// Random Data For Example
		for ($a = 1; $a < 30; $a++) {
		    $stocksTable->addRow([
		      '2015-10-' . $a, rand(800,1000), rand(800,1000)
		    ]);
		}

		$chart = \Lava::LineChart('MaTable',$stocksTable, [
			'title' => 'Ceci est un test',
			'width' => '1000',
			'height'=> '500',
			'titleTextStyle' => [
        		'color'    => '#FF0000',
        		'fontSize' => 24]]); //if using Laravel

		return view('laracharts');

    }

}
