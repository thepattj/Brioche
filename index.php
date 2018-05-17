<!DOCTYPE html>
<html>
<head>
	<title>Brioche Bistro</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASQKvbTGUZ1Ds6TTJJXJAuicT0ejXwNpw"></script>
</head>
<body>
	<div class="container-fluid" id="bg">
		<header class="header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a href="inicio.php"><img src="images/logoi.png"></a>
			</div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<div class="textM col-md-4"><a href="#us"> Nosotros </a></div>
				<div class="textM col-md-4"><a href="menu.php">Menú </a> </div>
				<div class="textM col-md-4"><a href="#here"> Ubicación </a> </div>
			</div>
		</header>
		<div class="logo col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<img src="images/inicio1.jpg">
			<img src="images/inicio2.jpg" style="display: none;">
			<img src="images/inicio3.jpg" style="display: none;">
			<img src="images/inicio4.jpg" style="display: none;">

			<a href="">&#10094</a>
			<a href="">&#10095</a>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><h1 id="us"></h1></div>
		<div class="historia col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h1>Historia</h1>
			<div class="hst col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			</div>
			<div class="hsti col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<img src="images/History2.jpg" >
			</div>
		</div>


		<div class="historia col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h1 id="here">Ubicacion</h1>
			<div class="hst col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam sint, ad deserunt id cumque, fuga iusto voluptatum quam modi placeat, vero odit quae sequi, explicabo amet. Saepe perspiciatis facere tempora.</p>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus reiciendis, eveniet officiis delectus atque quisquam consequuntur, illum tempora nulla aliquid error ad, magni magnam sit nostrum harum iste. Exercitationem, error. </p>
			</div>
			<div class="hst col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="map">
				
			</div>
		</div>
		<footer class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<ul>
				<a href="https://www.facebook.com/briochemx/"> <li><img src="images/icon/facebook.png">Facebook</li> </a>				
				<li><img src="images/icon/instagram.png">Instagram</li>
				<li><img src="images/icon/youtube.png">Youtube</li>
				<li><img src="images/icon/trabajo.png">Bolsa de Trabajo</li>
				<li><img src="images/icon/gpo.png">Grupo</li>
			</ul>
		</footer>
	</div>
</body>
</html>

<script>
  window.onload = initMap(); // cargar esta funcion enseguida del dom
  /*window.onload = obtenerdireccion;*/
    
  var map = null;
  var marker = null;
  var geocoder = new google.maps.Geocoder();
  
 /* function geoloca(){ //FUNCION DE LA GEOLOCALIZACION QUE DARA LA VARIABLE myLatlng
    navigator.geolocation.getCurrentPosition(initMap);
  }*/

  function initMap() { //FUNCION QUE CARGA EL MAPA CON LA GEOLOCALIZACION ACTUAL
 
    
    var myLatlng = new google.maps.LatLng(20.6912786,-100.4456878);
    var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: myLatlng,
          //mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map
    });
  }
</script>