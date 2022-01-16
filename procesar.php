<?php
include_once 'check.php';
if(isset($_POST['guardar']))
{	 
	 $primer_nombre = $_POST['primer_nombre'];
	 $a_materno = $_POST['apellidoM'];
	 $a_paterno = $_POST['apellidoP'];
	 $number = $_POST['numero'];
         $email = $_POST['correo'];
	 $sql_add = "INSERT INTO clientes (primerNombre,apellidoMaterno,apellidoPaterno,numero,correo)
	 VALUES ('$primer_nombre','$a_materno','$a_paterno','$number','$email')";
	 if (mysqli_query($conn, $sql_add)) {
		echo "Dato agregado correctamente !";
                echo'
        
         <a class="button" href="index.php">Volver</a>';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 
}
?>