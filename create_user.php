<?php

$include_once = "database.php";

$user_name = $_POST["client_name"];
$user_password = $_POST["client_password"];

$sql = "INSERT INTO sga_user( client_password, client_name)
VALUES ('$user_name','$user_password')";

if(mysqli_query($conection, $sql)){
    header("Location lister_user.php");
}
else{
    echo("Error in create user!");
}

mysql_close($conection);

?>