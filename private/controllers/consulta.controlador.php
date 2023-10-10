<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class ControladorConsulta {


    static public function ctrEnviarConsultaFooter($comMail, $comPas){

        if(isset($_POST['enviarConsulta'])) {

            if($_POST["nombreConsulta"] != "" && $_POST["mailConsulta"] != "" && $_POST["consulta"] != "") {

                $mail = new PHPMailer(true);

                    try {
                        $mail->SMTPOptions = array(
                            'ssl' => array (
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                            );
                        //Server settings
                        $mail->SMTPDebug = 0;
                        $mail->isSMTP();
                        $mail->Host       = 'smtp.gmail.com';
                        $mail->SMTPAuth   = "login";
                        $mail->Username   = $comMail;
                        $mail->Password   = $comPas;
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port       = 587;
                    
                        //Recipients
                        $mail->setFrom($_POST["mailConsulta"]);
                        $mail->addAddress($comMail);     // Add a recipient
                        /*$mail->addAddress('ellen@example.com');
                        $mail->addReplyTo('info@example.com', 'Information');
                        $mail->addCC('cc@example.com');
                        $mail->addBCC('bcc@example.com');*/
                    
                        // Content
                        $mail->isHTML(true);
                        $mail->Subject = 'Ha recibido una consulta';
                        $mail->Body    = '<div style="width:100%; background:#eee; padding:20px;">

                            <h3 style="font-weight:100; color:#999;">HA RECIBIDO UNA CONSULTA</h3>

                            <h4 style="font-weight:100; color:#999; padding:0px 20px; text-transform:uppercase">'.$_POST["nombreConsulta"].'</h4>

                            <h4 style="font-weight:100; color:#999; padding:0px 20px;">De: '.$_POST["mailConsulta"].'</h4>

                            <h4 style="font-weight:100; color:#999; padding:0px 20px">'.$_POST["consulta"].'</h4>

                         </div>';
                    
                        $envio = $mail->send();
                        /*echo 'Message has been sent';*/
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }

                        if(!$envio){

                            echo '<script> 

                            swal({
                                title: "Error",
                                type: "error",
                                title: "Ha ocurrido un problema enviando el mensaje",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                                }).then((result) => {
                                  if (result.value) {
              
                                    var enlace = window.location.href;
                                    window.location = enlace;
              
                                  }
                              })

                            </script>';

                        }else{

                            echo '<script> 

                            swal({
                                title: "Consulta enviada",
                                type: "success",
                                title: "Su mensaje ha sido enviado, muy pronto le responderemos",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                                }).then((result) => {
                                  if (result.value) {
              
                                    var enlace = window.location.href;
                                    window.location = enlace;
              
                                  }
                              })

                            </script>';
                            
                        }


            } else {
                echo "<script>

                swal({
                    title: 'Error',
                    type: 'error',
                    title: 'Debe completar todos los campos',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                    }).then((result) => {
                      if (result.value) {
  
                        var enlace = window.location.href;
                        window.location = enlace;
  
                      }
                  })

                </script>";

            }

        }

    }

}