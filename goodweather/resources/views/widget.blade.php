<!-- WIDGET -->
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

        <div class='weather-card--temperature mt-4'>
            <ul>
              <li class='mid-temp left-50 text-info'>Min</li>
              <li class='mid-temp left-50'>{{round($weather_city->temperature->min->getValue())}}</li>
              <li class='current-temp'>{{round($weather_city->temperature->now->getValue())}}</li>
              <li class='mid-temp right-50'>{{round($weather_city->temperature->max->getValue())}}</li>
              <li class='mid-temp left-50 text-danger'>Max</li>
            </ul>
          </div>
        </div>
