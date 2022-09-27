<?php

include_once "database.php";

$user_name = $_POST["user_name"];
$user_tel = $_POST["user_tel"];

$sql = "INSERT INTO professor_leandro (func_nome, func_telefone)
VALUES ('$user_name','$user_tel')";

if(mysqli_query($conection, $sql)){
    header("Location lister_user.php");
}
else{
    echo("Error in create user!");
}

mysql_close($conection);

?>