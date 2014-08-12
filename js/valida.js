
function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function SomenteLetra(e){
var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "48") && (tecla <= "57")){
		return false;
	}
}

function igual(EMAIL, COPIA){
if (EMAIL !== COPIA) {
alert('Os email devem ser idênticos!');
}
}
 function ValidaEmail(EMAIL){
if (EMAIL == "") {
alert('Preencha o Email!');
return false; 
}
  var txt = EMAIL;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}

function setFocus(COND) {

if(COND == def){
  document.getElementById("txtQual").focus(); 
  }  
}

function Sumir(COD){

if(COD == 1){
document.getElementById("txtQual").disabled=false;
}
if(COD == 2){
document.getElementById("txtQual").disabled=true;
}
}




