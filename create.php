<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name =  $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $sql="INSERT INTO User(fname,lname,email,password,GENDER) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);
    if ($result === true) {
        echo "new record recorded successfully";
    } else {
        echo "not recorded";

        
    }
    
    $conn ->close();
    
}
?>

<html>
    <a href="signup.html" class="btn btn-info"> back</a>
    <a href="views.php" class="btn btn-info" > view record from database</a>
</html>
