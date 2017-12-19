<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Remote JSONP datasource</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/jquery.easy-autocomplete.js"></script>
  <script>

      var options = {

      url: "./city.list.json",

      getValue: "name",

      list: { 
        match: {
          enabled: true
        }
      },

      theme: "square"
    };

    $("#citysearch").easyAutocomplete(options);

  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="birds">Cities : </label>
  <input id="citysearch">
</div>
  
</body>
</html>