<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
     <br>
        </div>
    </div>
</div>


<div class="container">

<p>
 <a class="btn btn-link text-info ml-5" data-toggle="collapse" href="#CollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">1 DAY</a>
 <a class="btn btn-link text-secondary ml-5" data-toggle="collapse" href="#CollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">2 DAYs</a>
 <a class="btn btn-link text-secondary ml-5" data-toggle="collapse" href="#CollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">3 DAYs</a>
</p>

<div class="row">
<div class="col">
<div id="CollapseExample1">
<div id="CollapseExample2">
<div class="card card-body">
<div class="row">
<div class="col-8">
<div id="map" style="height:500px;"></div>
<script>
          // Initialize and add the map
          function initMap() {
          // The location of Uluru
          var AGO = {lat:43.653887, lng:-79.392299};

          // the location of new place
          var ROM = {lat: 43.668360, lng:-79.394848};

          // The map, centered at Uluru
          var map = new google.maps.Map(document.getElementById('map'), {center: {lat:43.656102, lng:-79.380384},
          zoom: 13});
          // The marker, positioned at Uluru
          var marker1 = new google.maps.Marker({position: AGO, map: map});
          var marker2 = new google.maps.Marker({position: ROM, map: map});
          }
              </script>
              <!--Load the API from the specified URL
              * The async attribute allows the browser to render the page while the API loads
              * The key parameter will contain your own API key (which is not needed for this tutorial)
              * The callback parameter executes the initMap() function
              -->
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfBjkR4r44VhBgYB822duZbaTVF1FiuT4
          &callback=initMap">
              </script>
   </div>

<div class="col-4">
<h3><a href="ROM.php" class="text-info">Royal Ontario Museum</a></h3>
<p>This museum's expansive collection of cultural and
historic artifacts makes it a must-see in Toronto.

Stop by the Royal Ontario Museum to learn about
everything from art of the First Peoples to modern
fashion to the age of dinosaurs.</p>


<h3><a href="index.php" class="text-info">Art Gallery of Ontario</a></h3>
<p>One of the largest galleries in North America.

Significant collections include the largest collection of Canadian art, an expansive body of works from the Renaissance and the Baroque eras, European art, African and Oceanic art, and a modern and contemporary collection.</p>
</div>

     </div>
   </div>



     </div>
   </div>

 </div>
</div>