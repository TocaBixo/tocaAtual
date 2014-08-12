img = new Array('1','2');
 
indice = 0;
 
setInterval("mudaImg()", 6000);
	
function mudaImg(i, url) {
 
	if (i == 0 || i == 1) {
		
		indice = i;
		
	} else {
		
		if (indice == img.length - 1) {
			
			indice = 0;
			
		} else {
			
			indice++;
			
		}
		
	}
	
	document.getElementById("banner_img_1").setAttribute("class", "");
	document.getElementById("banner_img_2").setAttribute("class", "");
	document.getElementById("banner_img_" + img[indice]).setAttribute("class", "hover");
	
	document.getElementById("banner_img").innerHTML = "<img src='banner_img/"+ img[indice] +".jpg' width='100%' height='444' border='0' alt='Banner'>";
 
}