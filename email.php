<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['nome']);
    $sobrenome = addslashes($_POST['sobrenome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mesage']);


    $to = "everaldo.ramos981@gmail.com";
    $subject = "Contato - Ramos Marcenaria";
    $body = "Nome: ".$nome."\r\n".
            "Sobrenome: ".$sobrenome."\r\n".
            "Email: ".$email."\r\n".
            "Mensagem: ".$mensagem;

     $header = "From:contato@rmarcenaria.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

     if(mail($to,$subject,$body,$header)){

        echo("E-mail enviado com sucesso!");
     
    }else{

        echo("O e-mail não pode ser enviado.");
   
    }

    }
    
?>