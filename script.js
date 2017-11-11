
function comprobarClave(){ 
   var clave1 = document.getElementById('psw'); 
   var	clave2 = document.getElementById('psw-repeat');
  



   	if (clave1 == clave2) 
      	alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 
   	else 
      	alert("Las dos claves son distintas...") 
} 