<?php
	// session_start();
	// if (!isset($_SESSION['status'])){
	// 	header("Location: ../index.php");
	// 	exit;			
	// }
	// require '../php/graficohistorico/config.php';   //todos os campo devem ser preenchidos, se não poderá haver error
   	// require '../php/graficohistorico/connection.php';
   	// require '../php/graficohistorico/database.php';
	// $quantidade = DBRead('ano',$params = null, 'COUNT(*)');
	// $valorres = array_values($quantidade[0]);
	// $valor = floatval($valorres[0]); 
	// $anos  = DBRead('ano', ' order by ano asc ','*'); 
	// $verdadeiraStringFinal = '';
	// for ($x =0; $x<$valor;$x++){ 
	// 	$ano = array_values($anos[$x]); 
	// 	$quando = floatval($ano[0]);					
	// 	$year = "Where ano = ".$quando; 		
	// 	$aaa  = DBRead('mes', $year,'*');	
	// 	$stringFinal = '';	
	// 	if ($aaa != false){			
	// 		$forzinho =  count($aaa);
	// 		$arrayData=array(null,'null','null','null','null','null','null','null','null','null','null','null','null');
	// 		for ($y=0;$y<$forzinho;$y++){
	// 			$parray = array_values($aaa[$y]);	
	// 			$mesdoano = floatval($parray[1]);
	// 			$tempo = floatval($parray[2]);
	// 			$valora = floatval($parray[3]);
	// 			$vezes = floatval($parray[4]);
				
	// 			$mesdoano = intval(substr_replace($mesdoano, " ", -4));					
				
	// 			$tempo_emHoras= $tempo/3600; //divide por 3600 para se obter horas
				
	// 			$valorMedio_watt = $valora/$vezes;  //valor médio do Watt
	// 			$Consumo_emKW = (($valorMedio_watt*$tempo_emHoras)/1000);
				
	// 			$arrayData[$mesdoano] = $Consumo_emKW; 				
	// 		}
	// 		$explosao ='';
	// 		foreach ($arrayData as $value){
	// 				if ($value != null){
	// 					$explosao .= $value.', ';
	// 				}
	// 		}
	// 		$dadosFinais = substr_replace($explosao, " ", -2);
	// 		$stringFinal .="   { name: '".$quando."',";		
	// 		$stringFinal .="data: [";
	// 		$stringFinal .=$dadosFinais;
	// 		$stringFinal .="]},";
	// 		$verdadeiraStringFinal .= $stringFinal;
	// 	}				
	// }
	//echo substr_replace($verdadeiraStringFinal, " ", -1);	
?>


<!DOCTYPE HTML><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>	
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <!-- Permite exportar como foto-->
    <script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>   
    <script src="../../../grafico/workGraphics/dark.js"></script>

</head>
<body>

    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monthly Spending with Electric Energy.</h1>
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    <script type="text/javascript">
		$(function () {
		$('#container').highcharts({
			chart: {
				type: 'spline'
			},
			title: {
				text: 'Monthly Average Temperature'
			},
			credits: {
				enabled: false
			},
			subtitle: {
				text: 'Source: WorldClimate.com'
			},
			xAxis: {
				categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun',
					'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            min: 0,
            max:11
					
			},
			yAxis: {
				title: {
					text: 'Temperature'
				},
				labels: {
					formatter: function () {
						return this.value + '°';
					}
				}
			},
			tooltip: {
				crosshairs: true,
				shared: true
			},
			plotOptions: {
				spline: {
					marker: {
						radius: 4,
						lineColor: '#666666',
						lineWidth: 1
					}
				}
			},
			
			series: [
			
			
<?php
	echo substr_replace($verdadeiraStringFinal, " ", -1);	
?>
			
			
			
			
				
			]
		});
	});
	
    </script>

</body></html>