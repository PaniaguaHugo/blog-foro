<?php
//Captura de datos
    $name = $_POST['name'];
    $email = $_POST['email'];
    $consult = $_POST['consult'];

    $message = "
    <strong>Nombre: </strong> $name <br>
    <strong>Correo: </strong> $email <br>
    <strong>Consultora: </strong> $consult
    ";

    // echo($message) //mostrar en pantalla message

    // mail( 
    //     "info@misitio", //destinatario
    //     "consulta web", //asunto
    //     $message,
    //     $email //remitente
    // );

//     echo("<p
//     >Muchas gracias $name por enviar tu consulta, si deseas volver presiona <a href=../forum.html>aqui</a></p>"
// );

    // header("location: ../forum.html");
?>


<!-- <p>Muchas gracias $name por enviar tu consulta, si deseas volver presiona <a href="../forum.html">aqui</a></p> -->

