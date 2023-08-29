<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','edoc');

$database = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


    // $database= new mysqli("localhost","root","root","edoc")
// if ($database->connect_error){
//     die("Connection failed:  ".$database->connect_error);
 
//     }

?>