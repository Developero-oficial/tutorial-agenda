<?php 
include 'class.agenda.php';
$datos = array('nombre'=>'', 'domicilio'=>'', 'telefono'=>'', 'comentarios'=>'Comentarios', 'id'=>'');
$accion = 'insert';
include 'get.php';


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mi Agenda</title>
</head>
<body>

<form action="post.php" method="post">

	<div class="icon-user-plus"></div>

	<input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required="requiered">

	<input type="text" name="domicilio" value="<?php echo $datos['domicilio']; ?>" placeholder="Calle y número" required="requiered">

	<input type="text" name="telefono"  value="<?php echo $datos['telefono']; ?>"placeholder="Teléfono" required="requiered">

	<textarea name="comentarios" required="requiered"> <?php echo $datos['comentarios']; ?></textarea>

	<input type="hidden" name="id" value="<?php  echo $datos['id']?>">
	<input type="hidden" name="accion" value="<?php  echo $accion?>">
	<input type="submit" name="submit" value="Enviar">
</form>

<?php include 'tabla.php';?>


</body>
</html> 