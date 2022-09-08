<?php

include 'conexion_mysqli.php';

$acceso = false;

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$resultado = $bd -> prepare( "SELECT * FROM usuarios  WHERE usuario = ? AND pw = ?" );
$resultado -> bind_param("ss", $usuario, $password);
$resultado -> execute();
$filas = $resultado -> get_result();

// while ( $datos = $filas -> fetch_assoc() ) {
//     print_r( $datos );
// }

$cantidad = $filas -> num_rows;

if ( $cantidad > 0  ) {

    session_start();
    $datos = $filas -> fetch_assoc();
    $_SESSION['usuario'] = $datos['usuario'];
    header( 'location: admin.php' );
    
} else {
    
    header( 'location: index.php?login' );

}


?>
