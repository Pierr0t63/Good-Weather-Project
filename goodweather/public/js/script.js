$('document').ready( function(){


    // Controle du champ
    // $('#posUser').on('input',function(){

    //     if( $('#posUser').val().length>=3 ) {


    //         initializeAutocomplete('posUser');
    //     }

    // });

    //Autocompletion
    // function initializeAutocomplete(id) {
    //     var options = { 
    //         types: ['(cities)'],
    //         //componentRestrictions: {country: 'fr'},
    //     };

    //     var element = document.getElementById(id);

    //     if (element) {
    //         var autocomplete = new google.maps.places.Autocomplete(element, options); 
    //     }

    //     autocomplete.addListener('Place_changed',fillInAddress);
    // };
        var placeSearch, autocomplete;
        var componentForm = {
            //street_number: 'short_name',
            //route: 'long_name',
            locality: 'long_name',
            //administrative_area_level_1: 'short_name',
            country: 'short_name',
            //postal_code: 'short_name'
            };


    // Controle du champ 2
    $('#posUser').on('input',function(){

        if( $('#posUser').val().length>=3 ) {

            // var options = { 
            //     types: ['geocode'],
            //     // componentRestrictions: {country: 'fr'},
            // };

            var element = document.getElementById('posUser');

            if (element) {
                autocomplete = new google.maps.places.Autocomplete(document.getElementById('posUser'), {types: ['geocode']}); 
            }

            autocomplete.addListener('place_changed',function(){

                alert("toto");

                // Get the place details from the autocomplete object.
                var place = autocomplete.getPlace();
                // for (var component in componentForm) {
                //   document.getElementById(component).value = '';
                //   document.getElementById(component).disabled = false;
                // }

                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                //document.getElementById('posUser').value = "";

                for (var i = 0; i < place.address_components.length; i++) {
                  var addressType = place.address_components[i].types[0];
                  if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    alert(val);
                    document.getElementById('posUser').value += val + ",";
                  }
                }
        
            });

        }

    });

    // variable

    //Filtre final
      function fillInAddress() {
        alert("toto");
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        
        // for (var component in componentForm) {
        //   document.getElementById(component).value = '';
        //   document.getElementById(component).disabled = false;
        // }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        //document.getElementById('posUser').value = "";

        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            alert(val);
            document.getElementById('posUser').value += val + ",";
          }
        }
        
      }


});