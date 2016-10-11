
<?php 
	$id=$_GET['Id'];
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>titulo del sitio</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="css/estilos.css">


	</head>

	<body>

	<!-- Dropdown Structure -->
	
	<nav>
		<div class="nav-wrapper black">
			<a href="#!" class="brand-logo">Phpbds</a>
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			<ul class="right hide-on-med-and-down">
				
				<li><a href="tabla.php">Administracion</a></li>
				<!-- Dropdown Trigger -->			</ul>
			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				
				<li><a href="tabla.php">Administracion</a></li>
			</ul>
		</div>
	</nav>

<div class="container">
	<div class="row">
		<?php while ($fila=$resultado->fetch_assoc()) { ?>
        	
				<div class="col s6">
					<div class="card teal darken-1">
						<div class="card-content white-text">
							<span class="card-title"><?php echo $fila['nombre'];?></span>
							<hr>
							<br>
							

							<p><?php echo $fila['titulo']; ?></p>
						</div>
					</div>
				</div>
			
        <?php } ?>
	</div>
	</div>

<div class="container">
<form action="inc/modificar.php" method="POST" class="col s12" action="">
    <div class="row">
      <input type="hidden" name="Id" value="<?php echo $id; ?>">
        <div class="input-field col s12 m6" >
          <input id="password" type="text" class="validate" name="nombre">
          <label for="password">Nombre</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="password" type="text" class="validate" name="titulo">
          <label for="password">Titulo</label>
        </div>
     </div> 
  <div class="center">
    <button class="btn waves-effect waves-light" type="submit" name="action">Modificar</button>
  </div>
</form>
</div>

    
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>