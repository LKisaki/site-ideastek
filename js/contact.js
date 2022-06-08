/* Telefone */
function formtel(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
	  
	 }
}

/* Toggle Quero um Site */
$(document).ready(function(){
	$("#btn_show_app").click(function(){
		$("#form_app").toggle("slow");
		$("#form_site").hide("slow");
	});
});
/* /Quero um Site */
			
/* Toggle Quero um app */
$(document).ready(function(){
	$("#btn_show_site").click(function(){
		$("#form_site").toggle("slow");
		$("#form_app").hide("slow");
	});
});	
/* /Quero um app */