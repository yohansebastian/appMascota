<?php
include ('../db.php');

if (isset($_POST['usuarios'])){
    $cc = $_POST['cc'];
    $nombre = $_POST['nombre'];
    $programa = $_POST['programa'];
    $asesor = $_POST['asesor'];
    $contraseña = $_POST['contraseña'];

    $query =" INSERT INTO usuarios(cc, nombre, programa, asesor, contraseña  ) VALUES (' $cc ','$nombre','$programa','$asesor','$contraseña')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("query failed");
    }
        $_SESSION['message'] = 'registro exitosamente';
        $_SESSION['message_type'] = 'success';

   header ("location: /php/PHP_CRUD_MYSQL/index.php");
}
?>
