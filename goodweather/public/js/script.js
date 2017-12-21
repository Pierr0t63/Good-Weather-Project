$('document').ready( function(){

    $('#posUser').on('input',function(){

        if( $('#posUser').val().length>=3 ) {
            
            initializeAutocomplete('posUser');

        }

    });

    function initializeAutocomplete(id) {
        var options = { 
            types: ['(cities)'],
            componentRestrictions: {country: 'fr'},
        };
        var element = document.getElementById(id);
        if (element) {
            var autocomplete = new google.maps.places.Autocomplete(element, options);
        }
    };

});