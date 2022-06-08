<?php
/* Cadastro Rápido */
	$p_nome    =$_POST['r_nome'];
	$p_email   =$_POST['r_email']; 

	echo 
		"Nome     : ".$p_nome."<br/>
		 Email    : ".$p_email."<br/>
		 ";


/* Solicitação para site */
	$p_nome    =$_POST['s_nome'];
	$p_email   =$_POST['s_email'];
	$p_telefone=$_POST['s_telefone'];
	$p_empresa =$_POST['s_empresa'];

	$p_site      =$_POST['s_site'];
	$p_textrap   =$_POST['s_textrap'];
	$p_ideastek  =$_POST['s_ideastek'];

	echo 
		"Nome     : ".$p_nome."<br/>
		 Email    : ".$p_email."<br/>
		 Telefone : ".$p_telefone."<br/>
		 Empresa  : ".$p_empresa."<br/>

		 Site         :" .$p_site."<br/>
		 Texto rapido :" .$p_textrap."<br>
		 Ideastek     : ".$p_ideastek."<br>
		 ";


/* Solicitação para App */
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

	echo 
		"Nome         : ".$p_nome."<br/>
		 Email        : ".$p_email."<br/>
		 Telefone     : ".$p_telefone."<br/>
		 Empresa      : ".$p_empresa."<br/>

		 Parceria     : ".$p_parceria."<br/>
		 Texto rapido : ".$p_textrap."<br>
		 Valor  	     : ".$p_valor."<br>
		 Ideastek     : ".$p_ideastek."<br>
		 ";


?>


