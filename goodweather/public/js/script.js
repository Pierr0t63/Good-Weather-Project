$('document').ready( function(){
    function initializeAutocomplete(id) {
        var options = { 
            types: ['(cities)'],
            componentRestrictions: {country: 'fr'}
        };
        var element = document.getElementById(id);
        if (element) {
            var autocomplete = new google.maps.places.Autocomplete(element, options);
        }
    };


    $( document ).ready(function() {
        initializeAutocomplete('posUser');
    });	
});