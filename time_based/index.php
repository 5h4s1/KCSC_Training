<?php
require "config.php";
if (isset($_GET['username']) && $_GET['password']) {
    if (preg_match('/hex|substr|union|select|from/i', $_GET['username']))
        die("No hack");

    if (preg_match('/hex|substr|union|select|from/i', $_GET['password']))
        die("No hack");

    $username = "'" . $_GET['username'] . "'";
    $password = "'" . $_GET['password'] . "'";
    $query = "SELECT * FROM users  WHERE username = " . $username . " AND password = " . $password;
    $datas = $conn->query($query) ;
    if (isset($datas -> num_rows ) and $datas -> num_rows > 0) {
        $datas = $datas->fetch_assoc();
        if ($datas['password'] === $_GET['password'] && $datas['username'] === $_GET['username']) {
            echo "Yes Yes Yes";
        } else {
            echo "No No No";
        }
    }
    else{
        echo "No No No";
    }
    
} else {
    show_source(__FILE__);
    die();
}
?>
