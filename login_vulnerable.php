<?php

include 'conexion_mysqli.php';

$acceso = false;

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$resultado = $bd -> query( "SELECT * FROM usuarios WHERE usuario = '$usuario' AND pw = '$password'" );

$datos = $resultado -> fetch_row();


if ( empty( $datos )  ) {

    header( 'location: index.php?login' );
    
} else {

    session_start();
    $_SESSION['usuario'] = $datos[1];
    header( 'location: admin.php' );

}


?>
