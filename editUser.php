<?php
    include_once('connection.php');
    include_once('encryption.php');

    $id = $_GET['id'];

    $id = decrypt($id,'SecretKey');

    echo $id;

    $query = "select * from users where id = $id";
    $result = $conn->query($query);

    $row = $result->fetch_assoc();
    $user = $row;
?>