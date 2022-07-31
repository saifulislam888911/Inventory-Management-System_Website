<?php

    function connect()
    {
        $dbHost = "localhost";
        $user = "root";
        $pass = "";
        $dbName = "Inventory-Management-System_Website";

        $conn = new mysqli($dbHost, $user, $pass, $dbName);

        return $conn;
    }

    function close_connect($cn)
    {
        $cn->close();
    }

?>
