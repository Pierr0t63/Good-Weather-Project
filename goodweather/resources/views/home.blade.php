<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Good Weather</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body >
    <!-- HEADER -->
    <header class="container-fluid justify-content-center text-center">
        <div class="container mt-5">
        <div class="wrapper">
  <div class="sun"></div>
  <div class="cloud">
    <div class="cloud1">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="cloud1 c_shadow">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
  
  <div class="cloud_s">
    <div class="cloud1">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="cloud1 c_shadow">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
  
  <div class="cloud_vs">
    <div class="cloud1">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="cloud1 c_shadow">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
  <div class="haze"></div>
  <div class="haze_stripe"></div>
  <div class="haze_stripe"></div>
  <div class="haze_stripe"></div>
  <div class="thunder"></div>
  <div class="rain">
     <ul>
       <li></li>
       <li></li>
       <li></li>
    </ul>
  </div>
  <div class="sleet">
     <ul>
       <li></li>
       <li></li>
       <li></li>
    </ul>
  </div>
  <div class="text">
    <!-- <ul>
      <li>Mostly Sunny</li>
      <li>Partly Sunny</li>
      <li>Partly Cloudy</li>
      <li>Mostly Cloudy</li>
      <li>Cloudy</li>
      <li>Hazy</li>
      <li>Thunderstorm</li>
      <li>Rain</li>
      <li>Sleet</li>
    </ul> -->
  </div>
</div>
</div>

        <form class="active-white-2 justify-content-center text-center" action='{{URL::current()}}' method="POST">
            <div class="row justify-content-center text-center">
                {{ csrf_field() }}
                <input id="posUser" name="posUser" class="form-control w-100 text-white col-lg-3 col-md-3 col-sm-10 col-xs-10 mr-4" type="text" placeholder="Renseignez votre ville, code postal..." aria-label="Search" title="Renseignez votre position">
                
                <button id="geolo" type="button" class="btn btn-outline-warning waves-effect "><i class="fa fa-rocket" aria-hidden="true" title="Cliquez-ici pour vous géolocaliser"></i></button>
            </div>
            
            <input type="submit" class="btn btn-outline-white waves-effect float-left" id="validation"></input>

        </form>

    </header>
    <!--  END HEADER -->

    <!-- WEATHER -->
    @isset($weather_city)
    <section class=" row justify-content-center text-center col-12 mt-5 mb-5">
        <div class='weather-card col-3 p-0 justify-content-end'>
          <div class='weather-card--landmark mb-4'>
            <div class='landmark'>
              <!-- <img src=''> -->
            </div>
            <div class='clouds'></div>
          </div>
          <div class='weather-card--cityname'>
            <h1>
              {{$weather_city->city->name}}
            </h1>
          </div>
          <div class='weather-card--details'>
            <span class='details--day'>{{$weather_city->lastUpdate->format('l')}}</span>
            |
            <span class='details--date'>{{$weather_city->lastUpdate->format('F')}}</span>
            |
            <span class='details--time'>{{$weather_city->lastUpdate->format('H:i:s')}}</span>
          </div>
          
          <div class='weather-card--cityname mt-2'>
            <h1>
              Levé du soleil
            </h1>
          </div>
          <div class='weather-card--details'>
            <span class='details--day'>{{$weather_city->sun->rise->format('H:i:s')}}</span>
        </div>

        <div class='weather-card--cityname mt-2'>
            <h1>
              Couché du soleil
            </h1>
          </div>
          <div class='weather-card--details'>
            <span class='details--day'>{{$weather_city->sun->set->format('H:i:s')}}</span>
        </div>

        <div class='weather-card--temperature mt-4 text-center justify-content-center'>
            <ul class="text-center justify-content-center">
              <li class='mid-temp left-50'>{{$weather_city->temperature->min->getValue()}}</li>
              <li class='current-temp'>{{$weather_city->temperature->now->getValue()}}</li>
              <li class='mid-temp right-50'>{{$weather_city->temperature->max->getValue()}}</li>
            </ul>
          </div>
        </div>
    @endisset
        <!-- MAP -->
        <section id="carte" class="container col-6 mx-auto p-0 rounded">
                {!! Mapper::render() !!}
                <section class="container mt-5">
            <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified teal lighten-4" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-thermometer-empty"></i>Températures</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-paper-plane-o"></i> Vent</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-tint"></i> Humidité</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content container col-6">
    <!--Panel 1-->
    <div class="tab-pane fade in show active container col-12" id="panel5" role="tabpanel">
        <br>
        @isset($city)
            <section id="divTemp" class="container col-12">
                @linechart('Temps','divTemp')
            </section>
        @endisset
    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade container col-12" id="panel6" role="tabpanel">
        <br>
        @isset($city)
            <section id="divWind" class="container col-12">
                @linechart('Vents','divWind')
            </section>
        @endisset
    </div>
    <!--/.Panel 2-->


    <!--Panel 3-->
    <div class="tab-pane fade container col-12" id="panel7" role="tabpanel">
        <br>
        @isset($city)
            <section id="divHumidity" class="container col-12">
                @linechart('Humidity','divHumidity')
            </section>        
        @endisset
    </div>
    <!--/.Panel 3-->
</div>
        </section>
        </section>
    </section>
    <!-- END WEATHER -->

    

    <script type="text/javascript">

        function initializeAutocomplete(id) {
            var options = { 
                types: ['(cities)'],
                componentRestrictions: {country: 'fr'}
            };
            var element = document.getElementById(id);
                if (element) {
                    var autocomplete = new google.maps.places.Autocomplete(element, options);
                }
        }


        google.maps.event.addDomListener(window, 'load', function() {
            initializeAutocomplete('posUser');
        });

    </script>

    <!-- FOOTER -->
    <!--Copyright-->
    <div class="footer-copyright justify-content-center text-center">
        <div class="container-fluid text-white">
            Propulsé par <i class="fa fa-sun-o" aria-hidden="true"></i>
        </div>
    </div>
    <!--/.Copyright-->
    <!--  END FOOTER -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyCE3Td6VrNKRiGOPjLdKfKiVKGIoOhDDuw"></script>
</body>

</html>
