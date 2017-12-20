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
        <img src="img/logo.png" alt="logo Good Weather" class="mb-5">

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
    <section id="divMeteo" class="container-fluid">
        
    </section>
    @linechart('Temps','divMeteo')
    <!-- END WEATHER -->

    <!-- MAP -->
    <section id="carte" class="container-fluid mx-auto p-0">
            {!! Mapper::render() !!}
    </section>
    <!-- END MAP -->

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
