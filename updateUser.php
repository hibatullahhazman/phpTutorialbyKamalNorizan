<?php 
    include_once('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $id = $_POST['user_id'];

    if($name=='' || $email=='' || $phoneNumber==''){
        session_start();
        $_SESSION['flash_message'] = ['msg'=>'Please fill all fields','alert'=>'alert-danger'];
        header('Location: editUser.php');
        exit;
    }
    
    $query = 'UPDATE users SET name = "'.$name.'", email = "'.$email.'", phoneNumber="'.$phoneNumber.'" where id ="'.$id.'"';

    if ($conn->query($query) === TRUE) {
        $_SESSION['flash_message'] = ['msg'=>'Please fill all fields','alert'=>'alert-success'];
    } else {
        $_SESSION['flash_message'] = ['msg'=>"Error: " . $query      . "<br>" . $conn->error,'alert'=>'alert-danger'];
    }
    header('Location: index.php');

    $conn->close();
?>