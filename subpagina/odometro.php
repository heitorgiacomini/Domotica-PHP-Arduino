<?php
	// session_start();
	// if (!isset($_SESSION['status'])){
	// 	header("Location: ../index.php");
	// 	exit;			
	// }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>

<link rel="stylesheet" href="../css/odometro/odometer-theme-car.css" />
<script src="../js/odometro/odometer.js"></script>
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>


<style>
.odometer {
    font-size: 100px;	
}
</style>
</head>
<body bgcolor="#179b77">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 <div  id="odometer" class="odometer" onClick="odometro()">0</div>

<script>
function obtemValores(){   
		var y;	 
		$.ajax({
			url: "http://localhost/php/odometro/podometro.php", 			
			error: function () {
				y = ﻿﻿﻿"[0,0,0]";		 	
			},	
			async:false,				 
			success: function(data){
				y = data;
			}    		
		}); 
		return y;
}
function calculo(){
	setTimeout(function(){
		var fras  = obtemValores();
		console.log('fras: '+fras);
		fras= fras.slice(4,-1);
		console.log('sliced fras: '+fras);
		fras = fras.split(",");
		console.log('splited fras[0]: '+fras[0]);//tempo em segundos
		console.log('splited fras[1]: '+fras[1]);//soma total de todos os valores em watts
		console.log('splited fras[2]: '+fras[2]);//vezes que o valor foi mensurado
		var media =  ( parseInt(fras[1]) / parseInt(fras[2]) );
		var horas =( parseInt(fras[0])  / 3600);
		var kWh = (horas*media)/1000;
		var dinheiro =  kWh * 0.18041; //0,18041 = valor do kW 
		console.log('dinheiro: '+dinheiro)
		odometro(parseInt(dinheiro));
	   	odometer.innerHTML = arred(dinheiro,1);		
	 	calculo();		  
  }, 3000)
  
function arred(d,casas) { 
   var aux = Math.pow(10,casas)
   return Math.floor(d * aux)/aux
}	
	
}
$(document).ready(function() {
    calculo();
});

function odometro(dinheiro) {
  
}	

</script>
</body>
</html>