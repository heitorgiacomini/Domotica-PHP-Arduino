<?php
   //session_start();
	require 'config.php'; 
	require 'connection.php'; #connection deve ser chamado anetes do database 
	require 'database.php';
	date_default_timezone_set('America/Sao_Paulo');   
	//while (true){				   
		$ano = date('Y');
		echo 'ano corrente: '.$ano.'<br>';
		$mes = date('mY');
		echo 'mes corrente: '.$mes.'<br>';
		echo '<br>';        
		$mesdoano  = DBRead('mes', "Where mesdoano = {$mes}",'mesdoano'); 
		var_dump($mesdoano);
		if ($mesdoano == false){
			$insercao  = DBCreate('mes','mesdoano, ano'," $mes , $ano"); 
			if ($insercao == false){				
				//$insercao = ($insercao) ? true : null;
				//if (!$insercao){ // se insercao nao retornar true, execute the command
					DBCreate('ano','ano'," $ano");
					DBCreate('mes','mesdoano, ano'," $mes , $ano");
				//}
				echo '<br>';
				echo 'status da inserção se 1 = true (ocorreu): '.$insercao;
			}
		}			
		try{	
			$html = @file_get_contents("http://localhost/subs/grafico/2/arduinoServer.html");
			if ($html == null){
			//$insere = 0;  //faça nada			
			//exit;		//Utilize exit ao invés de if	
			}else{
				libxml_use_internal_errors(true); //Prevents Warnings, remove if desired
				$dom = new DOMDocument();
				$dom->loadHTML($html);
				$body = "";
				foreach($dom->getElementsByTagName("body")->item(0)->childNodes as $child) {
					$body .= $dom->saveHTML($child);					
				}
				$jason = floatval($body);				
				echo '<br>';
				echo $jason;
				DBUpdate('mes', "valor = IFNULL(valor,0) + $jason, tempo= IFNULL(tempo,0) + 5, vezes= IFNULL(vezes,0) + 1 ", "mesdoano ='$mes'");
				$jason = 0;				
			}
		}
		catch(Exception $e){	
			echo $e;					
		}
		sleep (5000);
	//}	
?>