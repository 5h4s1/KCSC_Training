<?php

$command = "ping 8.8.8.8";
if (isset($_GET['cmd']) && !empty($_GET['cmd'])) {
    $cmd = $_GET['cmd'];

    if (preg_match('/ls|head|cat|m4|curl|\;|\||\{|\}|\$|\&/i', $cmd)){
        die("Detect Hack");
    }
    $command = $cmd;
    // echo $command;
    passthru($command);
}
else if (isset($_GET['debug'])){
    highlight_file("index.php");
}
?>


<h1>Chả có cái gì ở đây cả</h1>

<!-- debug -->