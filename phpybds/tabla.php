
<?php
  require('inc/conexion.php');

  $consulta="SELECT Id,nombre,trabajo FROM trabajo";
  $resultado=$mysqli->query($consulta);
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

	
	<nav>
		<div class="nav-wrapper black">
			<a href="#!" class="brand-logo">Phpbds</a>
			<!-- activate side-bav in mobile view -->
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			<ul class="right hide-on-med-and-down">
				
				<li><a href="components.html">tabla</a></li>
				<!-- Dropdown Trigger -->			</ul>
			<!-- navbar for mobile -->
			<ul class="side-nav" id="mobile-demo">
				
				<li><a href="components.html">tabla</a></li>
			</ul>
		</div>
	</nav>

  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Ingresar Datos</h4>
    </div>

    <div class="row">
    	<form class="col s12">
    		<div class="row">
    		<div class="input-field col s6">
          <input placeholder="Nombre" id="first_name" type="text" class="validate">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Titulo" id="first_name" type="text" class="validate">
          <label for="first_name">Titulo</label>
        </div>
    		</div>
    	</form>
    </div>
    <div class="center">
    	<a class="waves-effect btn">Agregar</a>
    </div>

    
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
    </div>
  </div>
  

  <div class="container">
<div class="row">
    <div class="col s6" center>
		<table  class="responsive-table">
        <thead>
          <tr>
              <th data-field="Id">Id</th>
              <th data-field="nombre">Nombre</th>
              <th data-field="titulo">Titulo</th>
              <th data-field="accion">accion</th>
          </tr>
        </thead>

       <tbody>
            <?php 
              while ($fila=$resultado->fetch_assoc()) {?>
                <tr>
                  <td><?php echo $fila['Id'];?></td>
                  <td><?php echo $fila['nombre'];?></td>
                  <td><?php echo $fila['titulo'];?></td>
                  <td class=""><a href="inc/eliminar.php?Id=<?php echo $fila['Id'];?>"><i class="mdi-action-highlight-remove small center"></i></a> 

                  <a href="mod.php?id=<?php echo $fila['Id'];?>"><i class="mdi-content-create small center"></i></a> 
                    
                  </td>
                </tr>
            <?php } ?>
            </tbody>

    </div>
</div>
  </div>  
       	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
		$(document).ready(function(){
    $('.modal-trigger').leanModal();
  });
		  $('#modal1').openModal();
		   $('#modal1').closeModal();

		</script>
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>
