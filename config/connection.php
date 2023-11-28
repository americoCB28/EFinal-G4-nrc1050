<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "examen_final";
$connection = new mysqli($host,$user,$pass,$db);
if(!$connection){
    echo 'Conexión fallida';
}
