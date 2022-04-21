<a href="/?file=flag.php">Flag here</a>
<?php


$file = str_replace("flag", "", strtolower($_GET['file']));
if (isset($_GET['file'])){
    include_once($file);
}
?>