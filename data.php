<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//datbase connection

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);

}
else{
    $stmt =$conn->prepare("insert into registration(name, email, subject, message) value(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name, $email,$subject, $message );
    $stmt->execute();
    echo "Registration Successfully.......";
    $stmt->close();
    $conn->close();

}
?>
