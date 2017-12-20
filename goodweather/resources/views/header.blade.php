<<<<<<< HEAD
@extends('template')

@section('header')
<header class="container-fluid justify-content-center text-center">
	
        <img src="img/logo.png">

        <div class="row justify-content-center text-center">

            <form class="form-inline active-white-2 col-4">
                <input class="form-control w-100 text-white" type="text" placeholder="Renseignez votre ville, code postal..." aria-label="Search" title="Renseignez votre position">
            </form>

            <button type="button" class="btn btn-outline-warning waves-effect px-3"><i class="fa fa-rocket" aria-hidden="true" title="Cliquez-ici pour vous géolocaliser"></i></button>`

        </div>
            
        <button type="button" class="btn btn-outline-white waves-effect col-lg-2 col-md-2 col-sm-2 col-xs-2"><i class="fa fa-sun-o pr-2" aria-hidden="true"></i>Valider</button>

</header>
@endsection
=======
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
>>>>>>> dev
