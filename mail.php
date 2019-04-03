<?php
    // enviar un mail gmlproducciones2015@gmail.com

    $nombre = $_POST[ 'nombre' ] ;
    $correoCliente = $_POST[ 'correo' ] ;
    $asunto = $_POST[ 'asunto' ] ;
    $mensaje = $_POST[ 'mensaje' ] ;

    $correoGML = 'julianllorensi@outlook.com' ;
    $cabecera = 'Enviado por: ' . $email ;
    $mensajeCompleto = "Nombre: $nombre\n E-mail: $correoCliente Mensaje:\n $mensaje" ;
    
    if ( $_POST[ 'submit' ] ) {
        if ( mail( $correoGML, $asunto, $mensajeCompleto, $cabecera ) ) {
            echo '<script language="javascript"> alert( "Tu mensaje ha sido enviado correctamente, pronto te responderemos" ) ; </script>' ;
        } else {
            echo '<script language="javascript"> alert( "fallo al enviar el mensaje" )  ; </script>' ;
        }
    }

?>