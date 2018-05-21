<!DOCTYPE html>
<html>
<head>
	<title>Brioche Bistro</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
	<div class="container-fluid" id="bg">
		<div id="bg-negro" onclick="cerrar()"></div>
		<div id="modal"></div>
		<header class="header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a href="index.php"><img src="images/logoi.png"></a>
			</div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<div class="textM col-md-4"><a href="#us"> Nosotros </a></div>
				<div class="textM col-md-4"><a href="menu.php">Menú </a> </div>
				<div class="textM col-md-4"><a href="#here"> Ubicación </a> </div>
			</div>

			<div class="menum col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<a href="index.php"><img id="bimg" src="images/logoi.png"></a>
			</div>
			<div class="menum col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menum col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<img id="mimg" src="images/icon/menu.png">
			</div>
		</header>


	
		<div class="menut col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<H1>Nuestro Menú</H1>
			<H4>Algo que cautivara tus sentidos</H4>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
		</div>
		<div class="plt col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(1)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Chilaquiles (Verdes o Rojos)</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(2)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Avena</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(3)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Crepa Desayuno</p>
				</div>
			</div><div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(4)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Enfrijoladas</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(5)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Timbal, Nopal y Panela</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(6)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pancakes</p>
				</div>
			</div><div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(7)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Crepa Vegetariana</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(8)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Claras de Huevo</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(9)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pan Frances - French Toast</p>
				</div>
			</div><div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(10)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Gluten Free Banana Pan Cakes</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(11)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Huevos Salsa Chipotle</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4" onclick="pmodal(12)">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Plato de frutas</p>
				</div>
			</div><div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Smoked Salmon Toast</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Huevos Salsa Poblana</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Muesli</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Nutella Toast</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Huevos al Gusto</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Acai Bowl</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Bowl Quinoa</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Huevos Benecditinos</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Omelette Mexicano</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Huevos Pochados</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Omelette De Claras</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Huevos Florentinos</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Huevos Noruegos</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Lasagna Papa</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Avocado Toast</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Croque Madam</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Croque Monsieur</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>French Dip Sandwich</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Ensalada Thai</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Ensalada Manzana</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Steak Frittes</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Hamburguesa</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pasta Alfredo</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Milenasa Parmesana</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pizza Enfrijoladas</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pizza Espinacas a la Crema y Salmon</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pizza Poblana</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pizza Chipotle</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Americano</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Limonada</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Capuccino</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Naranjada</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Chai</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Jugo de Naranja</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Chocolate</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Jugo de temporada</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Espresso</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Jugo Verde</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Europeo</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Jugo de Zanahoria</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Té</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Croissant</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Pain au chocolat</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Trenza de Nuez</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Chocolate Cookie</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Kouign amann</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Cinnamon Roll</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Bollo Relleno</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Concha (Chocolate/Vainilla)</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Dona ()</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Manopla</p>
				</div>
			</div>
			<div class="plts col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<div class="img col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<img src="images/platillo/sarten1.jpg">
					<p>Oreja</p>
				</div>
			</div>
		</div>
		
		
	</div>
</body>
</html>