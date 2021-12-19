<?php
	// pega valor dentro de array bidimensional
	function outputValue($array){
	  foreach($array as $key => $value){
		if(is_array($value)){
		  outputValue($value);
		  continue;
		}
		echo "$value" . PHP_EOL;
	  }
	  return $value;
	}
	//Altera Registros
	function DBUpdate($table, $fields, $where =null){
		#FOREACH É um loop de repeticao que passa pelos indices $key do meu array e pelos valores $value 
		//foreach ($data as $key => $value){  
		//$fields[] ="{$key} = '{$value}'";		
		//}
		//$fields = implode(', ',$fields);
		
		
		$table = DB_PREFIX.$table;
		$where = ($where) ? "  WHERE {$where}" : null;
		$query= "UPDATE {$table} SET {$fields} {$where}  "; # TEM QUE TER WHERE PORQUE CASO CONTRÁRIO  todos os campos serias alterados
		//var_dump($query);
		return DBExecute($query);
	}
	
	
	//Ler Registros
	function DBRead($table,$params = null, $fields = '*'){
		$table = DB_PREFIX.$table;
		$params = ($params) ? " {$params}" : null;# serve apenas para tirar espaços desnecessários após a Tabela, caso o esteja sem parâmetros
		$query = "SELECT {$fields} FROM {$table}{$params}";
		$result = DBExecute($query);
		
		if(!mysqli_num_rows($result)){
			return false;
		}
		else{
			while ($res= mysqli_fetch_assoc($result)){
				$data[] = $res;	
			}	#fetch_assoc convert em um array
		return $data;
		}
		
		}
	//grava registros
	function DBCreate($table,$fields,$values){
		//$table = DB_PREFIX.'_'.$table;
		//$data = DBEscape($data);
		//$fields= implode(' ,',array_keys($data));
		//$values= "'".implode("', '",$data)."'";		
		$query ="INSERT INTO $table ({$fields}) VALUES ({$values}) ";
		$status = DBExecute($query);
		if (!$status){
			return false;
		}else{
			return $status;	
		}
	}
	
	#executa Querys-> inserões no DB
	function DBExecute($query){
		$link = DBConnect();
		$result = mysqli_query($link,$query) ;//or die(mysqli_error($link)) ;
		DBClose($link);	
		return $result;	
	}
?>