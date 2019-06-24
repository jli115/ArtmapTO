<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
  </head>



  <body>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="index.php">ArtmapIO</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="Museum.php">Museum</a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Gallery</a>
						</li>
                        <li class="nav-item">
							 <a class="nav-link" href="#">Art School</a>
						</li>
                        <li class="nav-item">
							 <a class="nav-link" href="#">Street Art</a>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" /> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Share</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">FaceBook</a> 
                                 <a class="dropdown-item" href="#">Instagram</a> 
                                 <a class="dropdown-item" href="#">Twitter</a>
								</div> 
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>

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

<div id="map"></div>
               <script>
               // Initialize and add the map
               function initMap() {
           // The location of Uluru
           var uluru = {lat: -25.344, lng: 131.036};

           // the location of new place
           var somewhere = {lat: -29, lng: 100};

           // The map, centered at Uluru
           var map = new google.maps.Map(
               document.getElementById('map'), {zoom: 4, center: uluru});
           // The marker, positioned at Uluru
           var marker1 = new google.maps.Marker({position: uluru, map: map});
           var marker2 = new google.maps.Marker({position: somewhere, map: map});
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


 


  </body>


  <? include "footer.php"?>
</html>