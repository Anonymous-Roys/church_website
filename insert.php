<?php
require_once('conn.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  

    if (empty($name) || empty($email) || empty($message)){
        echo "Please fill in the blank spaces";
    }else{

        $query = "INSERT INTO sender (name, email, message) 
        VALUES('$name', '$email', '$message')";

        $result = mysqli_query($conn, $query);

        if($result){
            header("Location:view.php");
        }else{
            echo "There is an error in your QUERY statement. Please try again";
        }

    }
}
else{
    header("location: contact.php");
}
?>