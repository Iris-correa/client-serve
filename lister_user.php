<?php
$sql = "SELECT * FROM professor_leandro";

$result = mysqli_query($conection, $sql);

$convert = mysqli_fetch_assoc($result);
?>