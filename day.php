<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">1 DAY</a>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">2 DAYs</a>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">3 DAYs</a>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <h2>Royal Ontario Museum</h2>
This museum's expansive collection of cultural and 
historic artifacts makes it a must-see. 

Stop by the Royal Ontario Museum to learn about 
everything from art of the First Peoples to modern 
fashion to the age of dinosaurs. The museum has 
an ever-revolving schedule of exhibitions and events, 
including the summer - long Friday Night Live, which 
transforms the galleries into a party.

<div id="map" style="height:500px;"></div>
<script>
               // Initialize and add the map
               function initMap() {
           // The location of Uluru
           var AGO = {lat:43.653887, lng:-79.392299};

           // the location of new place
           var ROM = {lat: 43.668360, lng:-79.394848};

           // The map, centered at Uluru
           var map = new google.maps.Map(
               document.getElementById('map'), {center: {lat:43.656102, lng:-79.380384},
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
    </div>
  </div>
</div>