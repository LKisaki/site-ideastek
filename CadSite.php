<?php
/* Solicitação para site */

$_REQUEST	

$for= "luan@comets.com.br"
$assunto= "Solicitacao de Site"

	$p_nome    =$_REQUEST['s_nome'];
	$p_email   =$_REQUEST['s_email'];
	$p_telefone=$_REQUEST['s_telefone'];
	$p_empresa =$_REQUEST['s_empresa'];

	$p_site      =$_REQUEST['s_site'];
	$p_textrap   =$_REQUEST['s_textrap'];
	$p_ideastek  =$_REQUEST['s_ideastek'];

$corpo = "<strong>Solicit Site</strong><br><br>";
$corpo .= "<strong>Nome: </strong> $p_nome<br>";
$corpo .= "<strong>Email: </strong> $p_email<br>";
$corpo .= "<strong>Telefone: </strong> $p_telefone<br>";
$corpo .= "<strong>Empresa: </strong> $p_empresa<br>";

$corpo .= "<strong>Site: </strong> $p_site<br>";
$corpo .= "<strong>Mensagem: </strong> $p_textrap<br>";
$corpo .= "<strong>Ideastek: </strong> $p_ideastek<br>";

$header = "Content-Type: text/html; charset= utf-8\n";
$header .="From: $email Reply-to: $email\n";


@mail($for, $assunto, $corpo, $header);

header("location:index.html?msg=enviado");

/*
	echo 
		"Nome: ".$p_nome."<br/>
		 Email: ".$p_email."<br/>
		 Telefone: ".$p_telefone."<br/>
		 Empresa: ".$p_empresa."<br/>

		 Site:" .$p_site."<br/>
		 Texto rapido:" .$p_textrap."<br>
		 Ideastek: ".$p_ideastek."<br>
		 ";
*/

?>