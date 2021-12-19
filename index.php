<!DOCTYPE html>
<?php
	// session_start();
	// require 'php/config.php'; 
	// require 'php/connection.php'; #connection deve ser chamado anetes do database 
	// require 'php/database.php';	
	// if (isset($_POST['botao'])) { // se o botao submit do cadastro
	// 	//print_r($_POST);
	// 	$nome = $_POST['nome'];
	// 	$sobrenome = $_POST['sobrenome'];
	// 	$email = $_POST['email'];
	// 	$senha = $_POST['senha'];
	// 	if ($sobrenome == "giacomini") {
	// 		echo " {$nome}, {$sobrenome}, {$email}, {$senha}";
	// 		DBCreate('usuario','nome, sobrenome, email, senha'," '{$nome}', '{$sobrenome}', '{$email}', '{$senha}' ");
	// 		//header("Location:http://localhost/subs/prototype/index.php");
	// 		//echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost/index.php'>";
	// 	}
	// }
	// if (isset($_POST['entrar'])){
	// 	$login = $_POST['login'];
	// 	$senha = $_POST['senha'];	
	// 	//echo $login;
	// 	//echo 'bom dia, heitor.';
	// 	if ($senha != null && $senha != ' '){	
	// 	$leitura = DBRead('usuario',"Where email = '{$login}'", ' senha');
	// 	$pass = @array_values($leitura[0]);
	// 	//var_dump($pass);
	// 	$word= $pass[0];
	// 	//echo $word;		
	// 		if ($word == $senha){
	// 			$_SESSION['status'] = 1;	
	// 			header("Location: subpagina/home.php");
	// 		}
	// 	}
	// }
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Entre ou Cadaste-se</title>
    <link rel="shortcut icon" href="img/bulb.png" />
    <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/cadastro/normalize.css">
	<link rel="stylesheet" href="css/cadastro/style.css">
</head>
  <body onLoad="letreiro();">

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Iniciar</a></li>
        <li class="tab"><a href="#login">Cadastrar</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          
                  <h1>Seja bem-vindo!</h1>
                  
                  <form action="/" method="post">
                  
                    <div class="field-wrap">
                    <label>
                      Endereço De E-mail<span class="req">*</span>
                    </label>
                    <input type="email"  required autocomplete="off" name="login"/>
                  </div>
                  
                  <div class="field-wrap">
                    <label>
                      Digite Sua Senha<span class="req">*</span>
                    </label>
                    <input type="password"  required  autocomplete="off" name="senha"/>
                  </div>
                  
                  <!--<p class="forgot"><a href="#">Esqueceu a ?</a></p> -->
                  
                  <button type="submit"  class="button button-block" name="entrar">Entrar</button>
                  
                  </form>
        </div>
        
        <div id="login">   <h1>Preencha os campos</h1>          
              <form action="/" method="post">              
              <div class="top-row">
                <div class="field-wrap">
                  <label>
                    Primeiro Nome<span class="req">*</span>
                  </label>
                  <input type="text" required autocomplete="off"  id="nome" name="nome"/> 
                </div>            
                <div class="field-wrap">
                  <label>
                    Sobrenome<span class="req">*</span>
                  </label>
                  <input type="text"  required autocomplete="off" id="sobrenome" name="sobrenome"/>
                </div>
              </div>    
              <div class="field-wrap">
                <label>
                  Endereço De E-mail<span class="req">*</span>
                </label>
                <input type="email"  required autocomplete="off" id="email" name="email"/>
              </div>              
              <div class="field-wrap">
                <label>
                  Digite Sua Senha<span class="req">*</span>
                </label>
                <input type="password"  required autocomplete="off" id="senha" name="senha"/>
              </div>              
              <button type="submit" class="button button-block" name="botao">Abrir conta</button><!--<button type="submit" class="button button-block"  src>-->         
              </form>
       </div>
        
      </div><!-- tab-content -->
 
</div> <!-- /form -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="js/cadastro/index.js"></script>
<script>
	/*function cadastrar(){
		var nome = document.getElementById('nome').value;
		var sobrenome = document.getElementById('sobrenome').value;
		var email = document.getElementById('email').value;
		var senha = document.getElementById('senha').value;
		console.log('nome: '+nome);
		console.log('sobrenome: '+sobrenome);
		console.log('email: '+email);
		console.log('senha: '+senha);
		if (nome != null && sobrenome != null && email != null && senha != null){
			console.log('oi');
			//envia(nome,sobrenome, email, senha);
		}
	}
	
function enviaPhp(nome,sobrenome, email, senha){
	$.ajax({
		type: "POST",
  		url: "http://localhost/subs/prototype/php/index/pindex.php",
		async: false,
		error: function () {
				location.reload();		 	
			},
  		data: { 
			meuParametro1: "valor 1", meuParametro2: "valor 2"
			},
  		complete: function(data){
            location.reload();
        }
	});    
}*/
</script>
    
    
<script>
var scrl = "    Entre ou Cadaste-se.";
function letreiro() {
	scrl = scrl.substring(1, scrl.length) + scrl.substring(0, 1);
	document.title = scrl;
	setTimeout("letreiro()", 220);
}
</script>




    
    
   
  </body>
</html>
