<?php
include 'check.php';
if(isset($_POST['btn_buscar']))
{	 
            $busqueda = $_POST['buscar'];
            $sql_search = "SELECT * FROM clientes WHERE WHERE CONCAT('idClientes', 'primerNombre', 'apellidoMaterno', `'apellidoPaterno', 'numero', 'correo') LIKE '%".$busqueda."%'";
            $search_result = filterTable($sql_search);
            
        } else {
    $sql_search = "SELECT * FROM clientes";
    $search_result = filterTable($sql_search);
    
}
echo'
        
         <a class="button" href="index.php">Volver</a>';

function filterTable($sql_search) {
    $connect = mysqli_connect("127.0.0.1:3310", "test", "testing1", "db_clientes"); 
    $filter_Result = mysqli_query($connect, $sql_search);
    return $filter_Result;
}


