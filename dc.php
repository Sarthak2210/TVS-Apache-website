<?php
include("demo1.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userprocess.php" method="post" name="user">
        Name: <input type="text" name="name" value=""><br>
        Email: <input type="text" name="email" value=""><br>
        Mobile: <input type="text" name="mobile" value=""><br>
        Message: <textarea name="message" value=""></textarea>
        <input type="submit" value="Submit">
</form>
</body>
</html>