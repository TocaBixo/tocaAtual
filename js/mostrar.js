function mostrar(z)
{ 
if (z === 1){
document.getElementById("loginzin").style.display="block";
document.getElementById("cadastrin").style.display="none";
}else {
document.getElementById("cadastrin").style.display="block";
document.getElementById("loginzin").style.display="none";
}
}