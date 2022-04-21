<form action="" method="GET">
    <input type="text" name="url">
    <input type="submit" value="Get Url">
</form>

<?php
if (isset($_GET['url'])){
    $page = $_GET['url'];
    include($page);
}