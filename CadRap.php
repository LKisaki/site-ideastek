<?php
/* Cadastro Rápido */
$_REQUEST	

$for= "luan@comets.com.br"
$assunto= "Cadastro"

	$p_nome    =$_POST['r_nome'];
	$p_email   =$_POST['r_email']; 

$corpo = "<strong>Cadastro de Contato</strong><br><br>";
$corpo .= "<strong>Nome: </strong> $p_nome<br>";
$corpo .= "<strong>Email: </strong> $p_email<br>";

$header = "Content-Type: text/html; charset= utf-8\n";
$header .="From: $email Reply-to: $email\n";


@mail($for, $assunto, $corpo, $header);

header("location:index.html?msg=enviado");

/*
	echo 
		"Nome: ".$p_nome."<br/>
		 Email: ".$p_email."<br/>
		 ";
*/

?>