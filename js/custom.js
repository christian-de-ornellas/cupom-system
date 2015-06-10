/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
//JAVASCRIPT  - ELETRONIC -
//  ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO

jQuery(function($){
   $("#cep").change(function(){
      var cep_code = $(this).val();
      if( cep_code.length <= 0 ) return;
      $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
         function(result){
            if( result.status!=1 ){
               alert(result.message || "Houve um erro desconhecido");
               return;
            }
            $("input#cep").val( result.code );
            $("input#uf").val( result.state );
            $("input#cidade").val( result.city );
            $("input#bairro").val( result.district );
            $("input#rua").val( result.address );
            $("input#estado").val( result.state );
         });
   });
});

 $('#cep').mask('99999-999');    
//    $('#cpf').mask('999.999.999-99');    
    $('#rg').mask('99.999.999-9');    
    $('#dtcompra').mask('99/99/9999');     
    $('#nasc').mask('99/99/9999');    
    $('#cel').mask('(99)99999-9999');    
    $('#tel').mask('(99)9999-9999');   
    
    $("#vlcompra").maskMoney({thousands : '', decimal : ','});
    


function Impressao( preVisualizar ) 
{
	var CorpoMensagem = document.body.innerHTML;
	document.body.innerHTML = ImprimirConteudo.innerHTML;
	if( preVisualizar ) 
	{
		PreVisualizar();
	} 
	else 
	{
		window.print();
	}
	document.body.innerHTML = CorpoMensagem;
}
 
function PreVisualizar() 
{
	try 
	{
		 //Utilizando o componente WebBrowser1 registrado no MS Windows Server 2000/2003 ou XP/Vista
		 var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>'; 
		 document.body.insertAdjacentHTML('beforeEnd', WebBrowser); 
		 WebBrowser1.ExecWB( 7, 1 ); 
		 WebBrowser1.outerHTML = ""; 
	} 
	catch(e) 
	{
		alert("Para visualizar a impressão você precisa habilitar o uso de controles ActiveX na página.");
		return;
	}
}

function VerificaCPF () {
if (vercpf(document.frmcpf.cpf.value)) 
{document.frmcpf.submit();}else 
{errors="1";if (errors) window.alert('O CPF NÃO É VÁLIDO.'); 
location.href="cadastrar-clientes";    
document.retorno = (errors == "");}}
function vercpf (cpf) 
{if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999")
return false;
add = 0;
for (i=0; i < 9; i ++)
add += parseInt(cpf.charAt(i)) * (10 - i);
rev = 11 - (add % 11);
if (rev == 10 || rev == 11)
rev = 0;
if (rev != parseInt(cpf.charAt(9)))
return false;
add = 0;
for (i = 0; i < 10; i ++)
add += parseInt(cpf.charAt(i)) * (11 - i);
rev = 11 - (add % 11);
if (rev == 10 || rev == 11)
rev = 0;
if (rev != parseInt(cpf.charAt(10)))
return false;
window.alert('O CPF INFORMADO É VÁLIDO.'); 
return true;
}


