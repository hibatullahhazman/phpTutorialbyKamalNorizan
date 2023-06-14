<?php 
    include_once('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    if($name=='' || $email=='' || $phoneNumber=='' || $password==''){
        session_start();
        $_SESSION['flash_message'] = ['msg'=>'Please fill all fields','alert'=>'alert-danger'];
        header('Location: index.php');
        exit;
    }

    $passwordHash = sha1($password);
    $sql = "INSERT INTO users (name, email, phoneNumber, password) VALUES ('$name', '$email', '$phoneNumber', '$passwordHash')";
    session_start();
    if ($conn->query($sql) === TRUE) {
        $_SESSION['flash_message'] = ['msg'=>'Please fill all fields','alert'=>'alert-success'];
    } else {
        $_SESSION['flash_message'] = ['msg'=>"Error: " . $sql . "<br>" . $conn->error,'alert'=>'alert-danger'];
    }
    header('Location: index.php');

    $conn->close();
?>