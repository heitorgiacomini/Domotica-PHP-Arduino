<?php
	/*$ch = curl_init("http://172.16.18.54/subs/grafico/2/arduinoServer.html");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	$content = curl_exec($ch);
	curl_close($ch);
	
	<title>ServerSidePHPScript</title>
	*/
		
	/*$html = "http://172.16.18.54/subs/grafico/2/arduinoServer.html";
	$tidy = new tidy();
	$htmlBody = $tidy->repairString($html, array(
    'output-xhtml' => true,
    'show-body-only' => true,
	), 'utf8');*/
	
	/*$doc = new DOMDocument;
	$doc->loadhtmlfile('http://172.16.18.54/subs/grafico/2/arduinoServer.html');
	$body = $doc->getElementsByTagName('body');
	if ( $body && 0<$body->length ) {
    $body = $body->item(0);
    echo "dd";
	}*/


	//TEM QUE SER DENTRO DA DIV PORQUE TERA OS PARAMETROS TBM
	/*$html = file_get_contents("http://172.16.18.54/subs/grafico/2/arduinoServer.html");
	libxml_use_internal_errors(true); //Prevents Warnings, remove if desired
	$dom = new DOMDocument();
	$dom->loadHTML($html);
	$body = "";
	foreach($dom->getElementsByTagName("body")->item(0)->childNodes as $child) {
		$body .= $dom->saveHTML($child);
	}	
	echo $body;
	json_encode($body);*/
?>
<?php
/*if (is_ajax()) {
if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
$action = $_POST["action"];
switch($action) { //Switch case for value of action
case "test": test_function(); break;
}
}
}
//Function to check if the request is an AJAX request
function is_ajax() {
return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
function test_function(){
	$html = file_get_contents("http://10.67.37.105/subs/grafico/2/arduinoServer.html");
	libxml_use_internal_errors(true); //Prevents Warnings, remove if desired
	$dom = new DOMDocument();
	$dom->loadHTML($html);
	$body = "";
	foreach($dom->getElementsByTagName("body")->item(0)->childNodes as $child) {
		$body .= $dom->saveHTML($child);
	}	
	echo$body;
	$return["json"] = json_encode($body);
} */
?>
<?php 
	try{
	
		$html = @file_get_contents("http://localhost/subs/grafico/2/arduinoServer.html");
		if ($html == null){
			echo json_encode(0, JSON_NUMERIC_CHECK);			
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
			//sleep(5000);
			echo json_encode($jason, JSON_NUMERIC_CHECK);
		}
	}
	catch(Exception $e){
		echo json_encode(0, JSON_NUMERIC_CHECK);					
	}
	//JSON_NUMERIC_CHECK
	
?>




































