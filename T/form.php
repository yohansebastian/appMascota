<?php
include ('../db.php');

if (isset($_POST['formulario'])){
    $cc = $_POST['cc'];
    $fecha = $_POST['fecha'];
    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];
    $pregunta4 = $_POST['pregunta4'];

    $query =" INSERT INTO formulario(cc, fecha, pregunta1, pregunta2, pregunta3, pregunta4) VALUES ('$cc','$fecha', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4',)";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("query failed");
    }
        $_SESSION['message'] = 'formulario guardado exitosamente';
        $_SESSION['message_type'] = 'success';

   header ("location: /php/PHP_CRUD_MYSQL/index.php");
}
?>