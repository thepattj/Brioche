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
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
	<div class="container-fluid" id="bg">
	    <div id="bg-blanco" onclick="cerrarm()"></div>
	    <div id="menuh"></div>
	    <div id="menugpo"></div>
		<header class="header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		
		    <!--HEADER CUANDO EL TAMANO DE LA PAGINA ES MAYOR A 1024-->
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a href="index.php"><img src="images/logoi.png"></a>
			</div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<div class="textM col-md-4"><a href="#us"> Nosotros </a></div>
				<div class="textM col-md-4"><a href="menu.php">Menú </a> </div>
				<div class="textM col-md-4"><a href="#here"> Ubicación </a> </div>
			</div>
            <!--HEADER CUANDO EL TAMANO DE LA PAGINA ESTA ENTRE 768 A 1024-->
			<div class="menum col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a href="index.php"><img id="bimg" src="images/logoi.png"></a>
			</div>
			<div class="menum col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menum col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<img onclick="menus('menu')" id="mimg" src="images/icon/menu.png">
			</div>
			
			<!--HEADER CUANDO EL TAMANO DE LA PAGINA ESTA ENTRE 0 A 767-->
			<div class="menus col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
				<a href="index.php"><img id="bimg" src="images/logoi.png"></a>
			</div>
			<div class="menus col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
				<img onclick="menus('menu')" id="mimg" src="images/icon/menu.png">
			</div>
		</header>
		
		<!--EL CARRUSEL DE IMAGENES-->
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
		<div class="logo col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
			<div id="my-slider" class="carousel slide" data-ride="carousel">
			    <!--indicators dot nov-->
			    <!--wrapper for slides-->
			    <div class="carousel-inner" role="listbox">
			        <div class="item active">
			            <img src="images/inicio0.jpg" alt="inicio1" id="logoimg">
			            <div class="carousel-caption">
			                <h1>Alimentos de </h1>
			            </div>
			        </div>
			        <div class="item">
			            <img src="images/inicio2.jpg" alt="inicio2" id="logoimg">
			            <div class="carousel-caption">
			                <h1>Nuestro servicio</h1>
			                <h3>Te hara sentir en casa.</h3>
			            </div>
			        </div>
			        <div class="item">
			            <img src="images/inicio3.jpg" alt="inicio3" id="logoimg">
			            <div class="carousel-caption">
			                <h1>Amor por la comida</h1>
			            </div>
			        </div>
			         <div class="item">
			            <img src="images/inicio4.jpg" alt="inicio4" id="logoimg">
			            <div class="carousel-caption">
			                <h1>Visitanos</h1>
			                <h3>Te enamoraras de nosotros.</h3>
			            </div>
			        </div>
			    </div>
			    <!--controls or next and prev buttons-->
			    <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			    </a>
			</div>
		</div>
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
		
		<!--LA HISTORIA-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><h1 id="us"></h1></div>
		<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"></div>		
		<div class="historia col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
			<h1>Historia</h1>
			<div class="hst col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			</div>
			<div class="hsti col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<img src="images/History2.jpg" >
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"></div>

        <!--EL MAPA-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xl-offset-12"><h1 id="here"></h1></div>

		<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"></div>		
		<div class="ubica col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
			<h1>Ubicación</h1>
			<div class="hts col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
			</div>
			<div class="hsti col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="map"> </div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"></div>
		
		
		<!--EL FOOTER-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xl-offset-12"><h1 id="here"></h1></div>
		<footer class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<ul>
				<a href="https://www.facebook.com/briochemx/" target="_blank"> <li id="footerw"><img src="images/icon/facebook.png">Facebook</li> </a>		
				<li id="footerw"><img src="images/icon/instagram.png">Instagram</li>
				<li id="footerw"><img src="images/icon/youtube.png">Youtube</li>
				<li id="footerw"><img src="images/icon/trabajo.png">Bolsa de Trabajo</li>
				<li id="footerw"><img onclick="menus('menun')" src="images/icon/gpo.png">Grupo</li>
				
				<a href="https://www.facebook.com/briochemx/" target="_blank"> <li id="footers"><img src="images/icon/facebook.png"></li> </a>				
				<li id="footers"><img src="images/icon/instagram.png"></li>
				<li id="footers"><img src="images/icon/youtube.png"></li>
				<li id="footers"><img src="images/icon/trabajo.png"></li>
				<li id="footers"><img onclick="menus('menun')" src="images/icon/gpo.png"></li>
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