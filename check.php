<?php
echo "<table style='border: solid 1px black;'>";
        
        echo "<tr><th>Id</th><th>PrimerNombre</th><th>ApellidoMaterno</th><th>ApellidoPaterno</th><th>Número</th><th>Correo</th></tr>";

        

        $server = "127.0.0.1:3310";
        $username = "test";
        $password = "testing1";
        $dbname = "db_clientes";
        
        
        $conn = new mysqli($server, $username, $password, $dbname);
        
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT idCliente, primerNombre, apellidoMaterno, apellidoPaterno, numero, correo FROM clientes";
        $result = mysqli_query($conn, $sql);



        echo "Conectado correctamente";
?>