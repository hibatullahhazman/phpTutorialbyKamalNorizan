<?php 
include_once('connection.php');
include_once('encryption.php');
$key='SecretKey';

$data=$_GET['id'];

$id = decrypt($data,'SecretKey');

$query = "DELETE from users where id='$id'";

if ($conn->query($query) === TRUE) {
    $_SESSION['flash_message'] = ['msg'=>'Deleted Successfully','alert'=>'alert-success'];
} else {
    $_SESSION['flash_message'] = ['msg'=>"Error: " . $query      . "<br>" . $conn->error,'alert'=>'alert-danger'];
}
header('Location: index.php');

$conn->close();
?>