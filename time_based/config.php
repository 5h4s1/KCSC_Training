<?php
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_NAME = "time_based";
const DB_PORT = 3306;

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if ($conn -> connect_error) {
    die("Ket noi that bai");
}
