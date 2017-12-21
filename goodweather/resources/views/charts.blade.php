<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified blue lighten-5 container-fluid mt-5 justify-content-center ml-4" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-thermometer-empty"></i>  Température</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-paper-plane-o"></i> Vent</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-tint"></i> Humidité</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content container-fluid">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
        <br>
        <section id="divTemp" class="container-fluid">
            @linechart('Temps','divTemp')
        </section>
    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade in active" id="panel6" role="tabpanel">
        <br>
         <section id="divWind" class="container-fluid">
            @linechart('Vents','divWind')
        </section>
    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade in active" id="panel7" role="tabpanel">
        <br>
        <section id="divHumidity" class="container-fluid">
            @linechart('Humidity','divHumidity')
        </section>
    </div>
    <!--/.Panel 3-->
    
</div>