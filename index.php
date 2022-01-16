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
            <button type="submit" name="mostrar" id="btn_mostrar" class="btn btn-success btn-flat">Mostrar<i class="fa fa-check"></i></button>
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
        
        if(isset($_POST['btn_buscar']))
{	 
            $busqueda = $_POST['buscar'];
            $sql_search = "SELECT * FROM clientes WHERE CONCAT('idClientes', 'primerNombre', 'apellidoMaterno', `'apellidoPaterno', 'numero', 'correo') LIKE '%".$busqueda."%'";
            $search_result = filterTable($sql_search);
        } else {
    $sql_search = "SELECT * FROM clientes";
    $search_result = filterTable($sql_search);
}
function filterTable($sql_search) {
    $connect = mysqli_connect("127.0.0.1:3310", "test", "testing1", "db_clientes"); 
    $filter_Result = mysqli_query($connect, $sql_search);
    return $filter_Result;
}

?>
        
    </body>
</html>
