<!DOCTYPE html>
<html>
  <head>
  <style>
    #map-canvas { width:500px; height:500px; }
    .layer-wizard-search-label { font-family: sans-serif };
  </style>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw-tqZV2OCwCAB5b49yHNTww5pFiKfrSA&callback=initMap"
  type="text/javascript"></script>
  <script type="text/javascript"
    src="http://maps.google.com/maps/api/js? sensor=false">
  </script>
  <script type="text/javascript">
    var map;
    var layer_0;
    function initialize() {
      map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: new google.maps.LatLng(8.239981111151556, -73.35134137535096),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      layer_0 = new google.maps.FusionTablesLayer({
        query: {
          select: "col4",
          from: "1SieEuD5LYflgghiVC9H7gmAJs595OuVnrKljrOr8"
        },
        map: map,
        styleId: 2,
        templateId: 3
      });
    }
    function changeMap_0() {
      var whereClause;
      var searchString = document.getElementById('search-string_0').value.replace(/'/g, "\\'");
      if (searchString != '--Select--') {
        whereClause = "'Tipo' = '" + searchString + "'";
      }
      layer_0.setOptions({
        query: {
          select: "col4",
          from: "1SieEuD5LYflgghiVC9H7gmAJs595OuVnrKljrOr8",
          where: whereClause
        }
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  </head>
  
<body>
<table border=1>
<th><h1>titulo</h1></th>
<tr><td><table border=1>
<tr><td>convenciones</td></tr>
<tr><td><div style="margin-top: 10px;">
      <label class="layer-wizard-search-label">
        Tipo de patrimonio
        <select id="search-string_0" onchange="changeMap_0(this.value);">
          <option value="--Select--">--Select--</option>
          <option value="Arquitectura Habitacional">Arquitectura Habitacional</option>
          <option value="Arquitectura Religiosa">Arquitectura Religiosa</option>
          <option value="Monumento">Monumento</option>
        </select>
      </label> 
    </div>
</td>
</tr>
</table></td><td>
    <div id="map-canvas"></div>
    
  </body>
</td>
</tr>
<tr><td>linea de tiempo</td></tr>
</table>
</html>
