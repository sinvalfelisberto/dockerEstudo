<?php
    $servername = "agregadorinvestimentos-mysql-1";
    $username = "myuser";
    $password = "secret";
    $banco = "mydatabase";

    $conn = new mysqli($servername, $username, $password, $banco);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $res = $conn->query("SELECT username, email, creation_timestamp FROM tb_users");

    echo "<pre>";
    print_r($res->fetch_all());
    echo "</pre>";

?>
