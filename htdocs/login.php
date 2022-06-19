<?php
$servername="localhost";
$username="root";
$password="";
$database_name="login";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO loginform (username , password) VALUES('$username','$password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "You Have Successfully Logged In! ";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>