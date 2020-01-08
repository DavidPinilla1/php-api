<?php  
//   $nombre ='Xavi';//las variables siempre llevan el dólar delante
//     echo "Hola, $nombre <br/>";//concatenamos con comillas dobles
//     echo "Hola". $nombre;
// $a=7;
// $b=3;
// // echo '<br/>';
// echo $a%$b.'<br/>';

// $b ="Hola";
// $b.="Mundo";
// $b=$b."Mundo ";
// var_dump("2" === 2);
// echo gettype("2" === 2);
// print_r('hola');

// $arr=[1,2,3];
$usuario=['nombre'=>'Pedro','apellido'=>'Rodríguez','edad'=>13];// array asociativa
$otroUser=['nombre'=>'Jaime','apellido'=>'García','edad'=>24];
// echo '<br/>';
// echo '<br/>';
// var_dump($arr) ;
// echo '<br/>';
// var_dump($usuario) ;
// echo '<br/>';
// echo $usuario['nombre'];
$users= [$usuario,$otroUser];//concatenamos arrays
$users=array_map(function ($user)
{
    $user['edad']++;
    return $user;
},$users);//map toma como primer argumento el callback
$users=array_filter($users,function ($user)// filter toma como primer argumento el array
{
    return $user['edad']>18;
});
echo json_encode($users,JSON_UNESCAPED_UNICODE);//conversión a JSON de array asociativo
// $a=7;
// echo ++$a;
// echo '<br/>';
// echo $a;
$apellido='García';
$GLOBALS['apellido']=$apellido;
function saluda($nombre ) {
    echo $GLOBALS['apellido'];
    if(strlen ($nombre)!==0){
        return $nombre;
        return 'debes pasar un nombre';
    }
    return 'Hola '.$nombre;
}

echo '<br/>';
echo saluda('algo');