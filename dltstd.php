<?php
if ( isset($GET["ID"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mycurd";

    //Create connection with database
    $connection = new mysqli($servername, $username, $password, $database);


    $sql = "DELETE FROM `curddata` WHERE id = $id";
    $connection->query($sql);

}

header("location: ./curdapplication/home.php");
exit;


?>