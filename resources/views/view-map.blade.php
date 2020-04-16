<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

<style>

.map-container{
    height: 500px;
}

#map{
    width: 100%;
    height: 100%;
    border: 1px solid black;
}

#data{
    display: none;
}

</style>

</head>
<body>
    
    


   @php 

    $hotels = json_encode($hotels, true);
    echo '<div id="data">'.$hotels.'</div>';

   @endphp
   


<div class="map-container">

<div id="map"></div>


<script>


var map;

function initMap() {
    var myLatLng = {lat: 24.8607, lng: 67.0011};
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: myLatLng
  });

    var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
  });

  var hdata = document.getElementById('data').innerHTML;
  
}


</script>


</div>




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYLOCsnMuwFYBidIZ9GYGGm8jMAcIL7SM&callback=initMap"
    async defer></script>
</body>
</html>