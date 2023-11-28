<?php 
	include("conexion.php");

	if(isset($_POST['register'])){
	if(
		strlen($_POST['name']) >= 1 &&
		strlen($_POST['apell']) >= 1 &&
		strlen($_POST['email']) >= 1 &&
		strlen($_POST['phone']) >= 1 
		){
			$name = trim($_POST['name']);
			$apell=trim($_POST['apell']);
			$email = trim($_POST['email']);
			$phone = trim($_POST['phone']);
			$consulta = "INSERT INTO datos(nombres,apellidos,correo,celular)
				VALUES('$name', '$apell', '$email', '$phone')";
			$resultado = mysqli_query($conex, $consulta);
			if ($resultado){
				?>
					<a class="success" rel="stylesheet" href="juego.php">Tu registro se ha completado! Juega aquí</a>
					
				<?php 
			} else {
				?>
					<h3 class="error">Ocurrió un error</h3>
				<?php 
			}
		} else {
			?>
				<h3 class="error">Llena todos los campos</h3>
			<?php 
		}
	}
?>