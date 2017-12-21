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
    <div class="navbar" style="display: none;"></div>
    @include('header')

    <!-- WEATHER -->
    @isset($weather_city)
    <section class=" row justify-content-center text-center col-12 mt-5 mb-5">

        <!-- WIDGET -->
        @include('widget')

        <!-- MAP -->
        @include('googlemap')

        <!-- GRAPHS -->
        @include('charts')
            
    </section>
    @endisset
    <!-- END WEATHER -->

    <!-- FOOTER -->
    <!--Copyright-->
    <div class="footer-copyright justify-content-center text-center">
        <div class="container-fluid text-white">
            Propulsé par <a href="https://laravel.com" target="_blank"><img height="25" width="25" src="img/laravel_logo.png" alt="Laravel" title="Laravel"></a> avec les données de <a href="https://openweathermap.org" target="_blank"><img height="25" width="25" src="img/openweathermap_logo.png" alt="OpenWeatherMap" title="OpenWeatherMap"></a>
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

    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
