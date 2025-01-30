<?php
    //phpinfo();
    $servername = "192.168.192.115";
    $username = "usuario";
    $password = "Estech_2024";
    $dbname = "prueba";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, nombre, apellidos, telefono FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Nombre</th><th>apellidos</th><th>Telefono</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]." ".$row["apellidos"]."</td><td>".$row["telefono"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
?>
