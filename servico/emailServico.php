<?php

// arrumar isso aqui, pelo amor de Jesus Cristo, não aguento mais

require_once "";

function enviarEmail($sender, $subject, $message, $headers, $to = "juliacampos.jn@gmail.com"){
    $headers = "From: '$sender' <juliacampos.jn@gmail.com>\r\n";
    $headers .= "Reply-To: juliacampos.jn@gmail.com";
    mail($to, $subject, $message, $headers);
}