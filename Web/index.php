<?php 
$conn = include "conexion/conexion.php";

if(isset($_GET['fecha'])){
$fecha_consultar = $_GET['fecha'];
}else{
date_default_timezone_set('US/Central');  
$fecha_consultar = date("Y-m-d");
}

$nahual = include 'backend/buscar/conseguir_nahual_nombre.php';
$energia = include 'backend/buscar/conseguir_energia_numero.php';
$haab = include 'backend/buscar/conseguir_uinal_nombre.php';
$cuenta_larga = include 'backend/buscar/conseguir_fecha_cuenta_larga.php';
$cholquij = $nahual." ". strval($energia);
$nombre_nahual = $nahual;
$numero_energia = strval($energia);
$fecha_haab = $haab[0];
$nombre_uinal = $haab[1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tiempo Maya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include "blocks/bloquesCss.html" ?>
  <link rel="stylesheet" href="css/estilo.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="css/estiloAdmin.css?v=<?php echo(rand()); ?>" />

    <link rel="stylesheet" href="css/index.css?v=<?php echo (rand()); ?>" />


</head>

<body>

<?php include "NavBar.php" ?>
  <div>
    <section id="inicio">
      <div id="inicioContainer" class="inicio-container">
        <h1><br><br>Bienvenido al Tiempo Maya</h1>
        <div id='formulario' style="padding: 15px; width: auto;">
          <?php 
            echo "<a href='models/paginaModeloElemento.php?elemento=uinal#".$nombre_uinal."'>";
            echo "<img src=\"img/Uinales/".$nombre_uinal.".png\" alt=\"Error al intentar mostrar al uinal ".$nombre_uinal." \" width=\"100px\" height=\"100px\" >";
            echo "</a>";
          ?>
          <h5 style="color: whitesmoke;">Calendario Haab : <?php echo isset($fecha_haab) ? $fecha_haab : ''; ?></h5>
          <?php 
            echo "<a href='models/paginaModeloElemento.php?elemento=nahual#".$nombre_nahual."'>";
            echo "<img src=\"img/Nahuales/".$nombre_nahual.".png\" alt=\"Error al intentar mostrar al nahual ".$nombre_nahual." \" width=\"100px\" height=\"100px\" >";
            echo "</a>";  
          ?>          
          <h5 style="color: whitesmoke;">Calendario Cholquij : <?php echo isset($cholquij) ? $cholquij : ''; ?></h5>
          <h5 style="color: whitesmoke;">Cuenta Larga : <?php echo isset($cuenta_larga) ? $cuenta_larga : ''; ?></h5>
          <label style="color: whitesmoke;"><?php echo isset($fecha_consultar) ? $fecha_consultar : ''; ?></label>
        </div>
      </div>
    </section>
  </div>
 
  
<?php include "blocks/bloquesJs1.html" ?>

</body>
</html>
