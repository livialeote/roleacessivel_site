<?php
session_start();
require 'includes/conexao.php';
require 'includes/funcoes.php';         
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mapa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="estilo/padrao.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <style> #map{
             height: 400px;
             width: 100%;
            }
            
            </style>
        
    </head>
    <body>
       <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Conheça a equipe do Rolê</h2>
          <br>
        </div>
      </div>
        <div id="map"></div>
        <script>
    
      

  function initMap(){
      // Map options
      var options = {
          setClickable:false,
        zoom:15,
        center: {lat: -29.96449709, lng: -51.61942706}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers
      var markers = [
        {
          coords: {lat: -28.880861, lng: -51.704237},
         // iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<p>Bar da Dete</p>'
        },
                {
          coords:{lat: -29.955059, lng:-51.704237},
          content:'<p>Sorveteria Alaska</p> <p> Teste </p>'
        },
        {
          coords:{lat: -29.96443147, lng:-51.61942706},
          content:'<h1>Bar da Dete</h1> <p> Média 4 </p>'
        },
        {
          coords:{lat:42.7762,lng:-71.0773}
        }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }

        </script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIbwLXPBl9-QCPGnoj3KRYfdZuGqAF2qc&callback=initMap">
    </script>
        
        
         <?php        
            include 'includes/navegacao.php';
        ?>
    </body>
</html>
        