<?php
$sql = "SELECT * FROM client_data";

$result = mysqli_query($conection, $sql);

$convert = mysqli_fetch_assoc($result);
?>