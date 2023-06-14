<?php 
    include_once('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    $passwordHash = sha1($password);
    $sql = "INSERT INTO users (name, email, phoneNumber, password) VALUES ('$name', '$email', '$phoneNumber', '$passwordHash')";
    session_start();
    if ($conn->query($sql) === TRUE) {
        $_SESSION['flash_message'] = 'User created successfully';
    } else {
        $_SESSION['flash_message'] = "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: index.php');

    $conn->close();
?>