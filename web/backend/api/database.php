<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
define('DB_HOST', 'localhost');
define('DB_USER', 'angular-php-app');
define('DB_PASS', 'PavelZ1a');
define('DB_NAME', 'angular-php-app');

function connect() {
    $connect = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno($connect)) {
        die("Failed to connect:" . mysqli_connect_error());
    }

    mysqli_set_charset($connect, "utf8");
    return $connect;
}

$con = connect();