<?php
$servername="localhost";
$username="root";
$password="";
$database_name="signup";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO signupform (username , email, password) VALUES('$username','$email','$password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "You Have Successfully Been Registered With Us";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>