<!doctype html>
<html lang="en">
  <head>
  	<? include "head.php"?>
  </head>


  <body>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<? include "navigation.php"?>
		</div>
	</div>
  </div>

  <div class="container-fluid my-5">

   <div class="row">

      <div class="col-lg-4 col-12 mb-lg-0 mb-2 px-5">
      <h1>Royal Ontario Museum</h1>
      <p>Welcome to the virtual galleries of Royal Ontario Museum.</p>
      <img src="https://albinger.files.wordpress.com/2017/12/bodhisattva-figures-at-the-royal-ontario-museum.jpg" class="img-fluid" alt="Responsive image">
      </div> 

      <div class="col-lg-8 col-12 mb-lg-0 mb-2 px-5">
      <div id="street-view1" style="height:500px;"></div>
            <script>
            var panorama;
            function initializeago() {
            panorama = new google.maps.StreetViewPanorama(
            document.getElementById('street-view1'),
            {
              position: {lat:43.667766, lng:-79.394217},
              pov: {heading: 220, pitch: 50},
              zoom: 1
            });
            }
            </script>
      </div>

   </div>
   </div>
  </body>



  <? include "footer.php"?>
</html>