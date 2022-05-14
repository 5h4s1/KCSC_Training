<?php

class ob
{
    var $number_user;
    var $number_secret;
}


if (isset($_GET['number']) && !empty($_GET['number'])) {
    $temp = new ob;
    $temp->number_user = $_GET['number'];
    $code = base64_encode(serialize($temp));
    echo $code;
}

if (isset($_GET['key']) && !empty($_GET['key'])) {
    $temp = unserialize(base64_decode($_GET['key']));
    if ($temp) {
        $temp -> number_secret = rand(100, 999);
        if ($temp -> number_secret === $temp -> number_user) {
            echo "Successfully";
        }
        else {
            echo "No";
        }
    }
    else {
        echo "Error";
    }
}

?>
