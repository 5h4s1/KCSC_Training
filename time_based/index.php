<?php
require "config.php";
if (isset($_POST['username']) && $_POST['password']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (preg_match('/hex|substr|union|select|from/i', $username))
        die("No hack");

    if (preg_match('/hex|substr|union|select|from/i', $password))
        die("No hack");

    $query = "SELECT * FROM users  WHERE username = '$username' AND password = '$password'";
    echo $query;
    $datas = $conn->query($query) ;
    if (isset($datas -> num_rows ) and $datas -> num_rows > 0) {
        $datas = $datas->fetch_assoc();
        if ($datas['password'] === $password && $datas['username'] === $username) {
            echo "Yes Yes Yes";
        } else {
            echo "No No No";
        }
    }
    else{
        echo "No No No";
    }
    
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQLi Time Based</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" >
    </form>
</body>
</html>