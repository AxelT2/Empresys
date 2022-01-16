<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Empresys</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <button type="submit" name="mostrar" id="btn_mostrar" class="btn btn-success btn-flat">Actualizar<i class="fa fa-check"></i></button>
            <br>
            
        </form>
        <form method="POST">
            <input type="text" class="form-control" id="buscar" name="buscar"></input>
            <button type="submit" name="btn_buscar" id="btn_buscar" >Buscar</button>
            
        </form>
        <form method="POST" action="modal.php">
            <button type="submit" name="modificar" id="btn_modificar" class="btn btn-success btn-flat">Modificar<i class="fa fa-check"></i></button>
        </form>
        
        <form method="POST" action="download.php">
            <button type="submit" name="descargar" id="btn_descargar" class="btn btn-success btn-flat">Descargar<i class="fa fa-check"></i></button>
        </form>
        
        
        <?php
        include "check.php";
        
        if (isset($_POST["btn_buscar"])) {
            
    $busqueda = $_POST["buscar"];
    
    $sql_search = "SELECT * FROM clientes WHERE CONCAT(idCliente, primerNombre, apellidoMaterno, apellidoPaterno, numero, correo) LIKE '%" . $busqueda . "%'";
    
    $search_result = filterTable($row, $conn, $sql_search);
    
} else {
    $sql_search = "SELECT * FROM clientes";
    $search_result = filterTable($row, $conn, $sql_search);
}

function filterTable($row,$conn, $sql_search) {
    $filter_Result = mysqli_query($conn, $sql_search);
    $row = mysqli_fetch_assoc($filter_Result);
    return $filter_Result;
}


?>
        
    </body>
</html>
