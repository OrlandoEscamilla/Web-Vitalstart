<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	else{
		$id = '232869152';
	}

	if(isset($_GET['titulo'])){
		$titulo = $_GET['titulo'];
	}
	else{		
		$titulo = 'Vital Start (Gary Vanderpool)';
	}

	if(isset($_GET['des'])){
		$des = $_GET['des'];
	}
	else{
		$des = 'Subido por Vital Fertilizers
jueves, 7 de septiembre de 2017 14:27.';
	}
 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
	<title>Vital start</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<header>

<div class="contenedor_logo">
	<img src="img/logo.png">
</div>	

<div class="menu">
	<img src="img/menu.png">
</div>
	
</header>

<div class="contenedor_principal">
	<div class="contenedor_videoprincipal">
		<div class="contenedor_iframe">
			<iframe src="https://player.vimeo.com/video/<?php echo $id; ?>?autoplay=1&loop=1&title=0&byline=0&portrait=0" 
			style="height:100%; left: 0; position: absolute;  top:0; width:100%; background-color: #fff; " frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>

			<br>
			<p class="titulo_video_principal"><?php echo $titulo; ?></p>
			<p class="descripcion_video_principal"><?php echo $des; ?></p>
	</div>
	<br>
	<br>
	<br>

<aside>
	<article>
	
			<div class="contenedor_video">
					<a href="index.php?id=<?php echo '232869152'; ?>&titulo=<?php echo 'Vital Start (Gary Vanderpool)'; ?>&des=<?php echo 'Subido por Vital Fertilizers jueves, 7 de septiembre de 2017 14:27'; ?>"><img src="img/foto1.png"></a>
			</div>

			<div class="contenedor_informacion">
					<p class="titulo_video">Vital Start(Gary Vanderpool)</p>

					<p class="descripcion_video">Subido por Vital Fertilizers jueves, 7 de septiembre de 2017 14:27.</P>				
			</div>
			
	</article>


	<article>
			<div class="contenedor_video">
				<a href="index.php?id=<?php echo '222583161'; ?>&titulo=<?php echo 'Testimonial Richard Vos Vital Start'; ?>&des=<?php echo 'Subido por Vital Fertilizers
miércoles, 21 de junio de 2017 17:07.'; ?>"><img src="img/foto2.png"></a>			
			</div>
			<div class="contenedor_informacion">
					<p class="titulo_video">Testimonial Richard Vos Vital Start</p>
					<p class="descripcion_video">Subido por Vital Fertilizers miércoles, 21 de junio de 2017 17:07.</p>
			</div>
	</article>

	<article>
			<div class="contenedor_video">
					<a href="index.php?id=<?php echo '232869152'; ?>&titulo=<?php echo 'Vital Start (Gary Vanderpool)'; ?>&des=<?php echo 'Subido por Vital Fertilizers jueves, 7 de septiembre de 2017 14:27'; ?>"><img src="img/foto1.png"></a>
			</div>
			<div class="contenedor_informacion">
					<p class="titulo_video">Vital Start(Gary Vanderpool)</p>

					<p class="descripcion_video">Subido por Vital Fertilizers jueves, 7 de septiembre de 2017 14:27.</P>				
			</div>
	</article>


<div class="botonera_categoria">
	<div class="boton1">
		<div class="boton_categoria1">
			<img src="img/bottom1.png">
		</div>
	</div>
	<div class="boton2">
		<div class="boton_categoria2">
			<img src="img/bottom2.png">
		</div>
	</div>
	<div class="boton3">
		<div class="boton_categoria3">
			<img src="img/bottom3.png">
		</div>
	</div>
</div>
		
</aside>




</div>





</body>
</html>