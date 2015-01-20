<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\_assets\css\bootstrap.min.css">
<link rel="stylesheet" href="..\_assets\font-awesome-4.2.0\css\font-awesome.min.css">
<script type="text/javascript" src="..\_assets\js\jquery-2.1.3.min.js"></script>
</head>
<body>
<?php
 if(true)
 {
	//redirect to profile page
 }
?>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
    </div>
	<button type="button" class="btn btn-default navbar-btn"><a href="#login">
	<i class="fa fa-sign-out"></i>Logout</a>
	</button>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="googleMap" style="width:100%;height:380px;">
				mapa ko diri
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body">
				side panel ko diri
			</div>
		</div>
	</div>
	</div>


</div>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAvPDBEHKdiZdmhHPNzVrs_kNGYpJbX4_U"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(8.2333,124.2500),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>