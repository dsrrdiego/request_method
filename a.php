<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $cuerpo=file_get_contents("php://input");
    echo $cuerpo;
    $obj=json_decode($cuerpo);
    var_dump($obj);
    header("HTTP/1.1 " . 200 . " " . "Esta todo mas que bien");
    echo $obj->titulo;
    echo $obj->cantidad;
}
// var_dump($_SERVER);
