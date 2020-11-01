<?php
$DB_SERVER = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'restapi';

//Establish Database Connection
$conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);

//Check db connection
if(!$conn){
    die('Database connection failed!' .mysqli_connect_error());
}
