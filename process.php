<?php
session_start();
$conn=mysqli_connect("localhost","root","","hotel booking");
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$query= mysqli_query($conn,"SELECT Username FROM logintb WHERE Username = '$username' and  Password='$password'");
}
 
if(mysqli_num_rows($query)==1){
    while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
        $_SESSON['Username'] = $row['Username'];
        header("Location:spli.php");
  
}
//print_r(mysqli_error($con,$result));
}

    
?>