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
        <img src="img/logo.png" alt="logo Good Weather" class="mb-lg-5">

        <form class="active-white-2 justify-content-center text-center" action='{{URL::current()}}' method="POST">
            <div class="row justify-content-center text-center">
                {{ csrf_field() }}
                <input id="posUser" name="posUser" class="form-control w-100 text-white col-lg-3 col-md-3 col-sm-10 col-xs-10 mr-lg-4" type="text" placeholder="Renseignez votre ville, code postal..." aria-label="Search" title="Renseignez votre position">
                
                <button id="geolo" type="button" class="btn btn-outline-warning waves-effect "><i class="fa fa-rocket" aria-hidden="true" title="Cliquez-ici pour vous géolocaliser"></i></button>
            </div>
            
            <input type="submit" class="btn btn-outline-white waves-effect float-left" id="validation"></input>

        </form>

    </header>
    <!--  END HEADER -->

    <!-- WEATHER -->
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
              Nom de la ville
            </h1>
          </div>
          <div class='weather-card--details'>
            <span class='details--day'>Jour</span>
            |
            <span class='details--date'>Mois</span>
            |
            <span class='details--time'>Heures</span>
          </div>
          
          <div class='weather-card--cityname mt-2'>
            <h1>
              Levé du soleil
            </h1>
          </div>
          <div class='weather-card--details'>
            <span class='details--day'>09h00</span>
        </div>

        <div class='weather-card--cityname mt-2'>
            <h1>
              Couché du soleil
            </h1>
          </div>
          <div class='weather-card--details'>
            <span class='details--day'>17h00</span>
        </div>

        <div class='weather-card--temperature mt-4'>
            <ul>
              <li class='outer-temp'>22</li>
              <li class='mid-temp left-50'>26</li>
              <li class='current-temp'>29</li>
              <li class='mid-temp right-50'>28</li>
              <li class='outer-temp'>30</li>
            </ul>
          </div>
        </div>
        <!-- MAP -->
        <section id="carte" class="container col-6 mx-auto p-0 rounded">
                {!! Mapper::render() !!}
        </section>
        <!-- END MAP -->

        <!-- GRAPHS -->
        @isset($city)
            <section id="divTemp" class="container-fluid">
                @linechart('Temps','divTemp')
            </section>
            

            <section id="divWind" class="container-fluid">
                @linechart('Vents','divWind')
            </section>
            

            <section id="divHumidity" class="container-fluid">
                @linechart('Humidity','divHumidity')
            </section>
            
        @endisset
        <!-- END GRAPHS -->
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
