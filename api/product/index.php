<?php
require_once('../../config/DB.php');
require_once('../../models/Product.php');

$body=json_decode(file_get_contents('php://input'));
$database=new DB();
$conn=$database->connect();//conexión

$name=$body->name;
$price=$body->price;
$category_id=$body->category_id;

$sofa=new Product($conn,$name,$price,$category_id);//creamos la instancia del modelo

if(!$sofa->save()){
    echo 'ha habido un problema';
}else{
    echo json_encode([
        'message'=>'producto registrado con éxito'
    ],JSON_UNESCAPED_UNICODE );
}