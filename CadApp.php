<?php

/* Solicitação para App */
$_REQUEST	

$for= "luan@comets.com.br"
$assunto= "Solicitacao de App"
	
	$p_nome    =$_POST['a_nome'];
	$p_email   =$_POST['a_email'];
	$p_telefone=$_POST['a_telefone'];
	$p_empresa =$_POST['a_empresa'];

	$p_parceria    =$_POST['a_parceria'];
	$p_textpref    =$_POST['a_textpref'];
	$p_app         =$_POST['a_app'];
	$p_textrap     =$_POST['a_textrap'];
	$p_valor			=$_POST['a_valor'];
	$p_ideastek    =$_POST['a_ideastek'];

/*
if ($p_nome==""){
	$error['a_nome'] = "Por favor, insira o seu nome.";
}

if ($p_email==""){
	$error['a_email'] = "Por favor, insira o seu email.";
}*/


$corpo = "<strong>Solicit App</strong><br><br>";
$corpo .= "<strong>Nome: </strong> $p_nome<br>";
$corpo .= "<strong>Email: </strong> $p_email<br>";
$corpo .= "<strong>Telefone: </strong> $p_telefone<br>";
$corpo .= "<strong>Empresa: </strong> $p_empresa<br>";

$corpo .= "<strong>Parceria: </strong> $p_parceria<br>";
$corpo .= "<strong>Descrição: </strong> $p_textpref<br>";
$corpo .= "<strong>App: </strong> $p_app<br>";
$corpo .= "<strong>Mensagem: </strong> $p_textrap<br>";
$corpo .= "<strong>Valor: </strong> $p_valor<br>";
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

		 Parceria: ".$p_parceria."<br/>
		 Texto rapido: ".$p_textrap."<br>
		 Valor: ".$p_valor."<br>
		 Ideastek: ".$p_ideastek."<br>
		 ";
*/


?>