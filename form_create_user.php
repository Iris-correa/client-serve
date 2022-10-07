<?php
include ("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form create user</title>
</head>
<body>
    <h3>Create User</h3>
    <form action="create_user.php" method="post">
        <label for="user_name">User:</label>
        <input type="text" name="user_name" id="user_name">
        <br>
        <label for="user_tel">Telephone:</label>
        <input type="tel" name="user_tel" id="user_tel">
        <input type="submit" value="Send">
    </form>
</body>
</html>

<?php 
include ("footer.php");
?>
