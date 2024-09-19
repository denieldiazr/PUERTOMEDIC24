<?php
    if(isset($_POST['boton'])){
    $nombres=$_POST['nombres'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $especialidad=$_POST['especialidad2'];
    $doctor=$_POST['doctor2'];
    $fecha=$_POST['fecha'];
    $horas=$_POST['horas'];
    
    $header = "From: ".$correo."\r\n";
    $header .= "X-Mailer: PHP/".phpversion()."\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message="Desde la página web, se desea agendar una cita para el siguiente paciente: \r\n";
    $message .= "Nombres: ".$nombres." \r\n";
    $message .= "Correo: ".$correo." \r\n";
    $message .= "Telefono: ".$telefono." \r\n\n";
    $message .="";
    $message .= "Especialidad: ".$especialidad." \r\n";
    $message .= "Doctor: ".$doctor." \r\n\n";
    $message .= "Cita deseable el dia ".$fecha." a las ".$horas."\r\n";
   

    $para='denieldiaz06@gmail.com';
    $asunto="CITA MÉDICA DE ".$especialidad." CON EL/LA ".$doctor;

    ini_set('SMTP', "server.com");
    ini_set('smtp_port', "25");
    ini_set('sendmail_from', "denieldiaz06@gmail.com");
    if(mail($para,$asunto,$message)){
        echo "<script>
        swal.fire('¡Cita Agendada!', 
      'Su cita fue agendada correctamente, en breve, nos estaremos comunicando con usted via WhatsApp', 
      'success');
        </script>";die();
    }else{
        echo "<script>
        alert('Mensaje');
        </script>";die();
    }
    
    }

    if(isset($_POST['contactanos'])){
        $nombres=$_POST['nombre'];
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $mensaje=$_POST['mensaje'];
        
        $header = "From: ".$correo."\r\n";
        $header .= "X-Mailer: PHP/".phpversion()."\r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
    
        $message="Desde la página web, un posible cliente tiene la siguiente inquietud: \r\n";
        $message .= "Nombres: ".$nombres." \r\n";
        $message .= "Correo: ".$correo." \r\n";
        $message .= "Telefono: ".$telefono." \r\n";
        $message .= "Mensaje: ".$mensaje." \r\n";

        $para='denieldiaz06@gmail.com';
        $asunto="CONTACTO DESDE PUERTOMEDIC24.COM";
    
        ini_set('SMTP', "server.com");
        ini_set('smtp_port', "25");
        ini_set('sendmail_from', "denieldiaz06@gmail.com");
        if(mail($para,$asunto,$message)){
            echo "<script>
            swal.fire('¡Mensaje enviado con éxito!', 
          'Su mensaje fue enviado, en breve nos contactaremos con usted.', 
          'success');
            </script>";die();
        }else{
            echo "<script>
            alert('Mensaje');
            </script>";die();
        }
        
        }
    //header("Location:index.html");
?>