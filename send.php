<?php
//Variáveis

$nome = $_POST['name'];
$email = $_POST['email'];
$emaildestinatario = 'renan_magera@hotmail.com';
$telefone = $_POST['phone'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$assunto = $_POST['name'];


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '
<strong>Formulário de Contato</strong> 
<p><b>Nome:</b> '.$nome.' <p>
<b>E-Mail:</b> '.$email.' <p>
<b>Telefone:</b> '.$telefone.' <p>
<hr>';

// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
// remetente
$headers .= "Return-Path: $emaildestinatario \r\n";


// return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
if($envio)
echo "<script>location.href='sucesso.html'</script>";// Página que será redirecionada
?>