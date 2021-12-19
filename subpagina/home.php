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
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
/*@import url(https://fonts.googleapis.com/css?family=roboto); */
body, html {
  background-color: #179b77;
  height: 100%;
  padding: 0;
  margin: 0;
  font-family: 'Roboto Slab', sans-serif;
}
h1 { text-align:center; margin:50px auto; color:#fff;}

main {
  z-index: 2;
  position: relative;
  height: 100%;
  background-color: #179b77;
  -webkit-transition: transform .7s ease-in-out;
  -moz-transition: transform .7s ease-in-out;
  -ms-transition: transform .7s ease-in-out;
  -o-transition: transform .7s ease-in-out;
  transition: transform .7s ease-in-out;
}

.sidebar {
  height: 100%;
  width: 300px;
  position: fixed;
  top: 0;
  z-index: 1;
  left: 0;
  background-color: #13232f;
}

.bar {
  display: block;
  height: 5px;
  width: 50px;
  background-color: #13232f;
  margin: 10px auto;
}

.button {
  cursor: pointer;
  display: inline-block;
  width: auto;
  margin: 0 auto;
  -webkit-transition: all .7s ease;
  -moz-transition: all .7s ease;
  -ms-transition: all .7s ease;
  -o-transition: all .7s ease;
  transition: all .7s ease;
}

.nav-left{
  position: fixed;
  left: 40px;
  top: 20px;
}

.nav-right.visible-xs { z-index: 3; }

.hidden-xs { display: none; }

.middle { margin: 0 auto; }
	/*nada*/
.bar {
  -webkit-transition: all .7s ease;
  -moz-transition: all .7s ease;
  -ms-transition: all .7s ease;
  -o-transition: all .7s ease;
  transition: all .7s ease;
}
	/*nada*/
.nav-right.visible-xs .active .bar {
  background-color: #000;
  -webkit-transition: all .7s ease;
  -moz-transition: all .7s ease;
  -ms-transition: all .7s ease;
  -o-transition: all .7s ease;
  transition: all .7s ease;
}
	/*nada*/
.button.active .top {
  -webkit-transform: translateY(15px) rotateZ(45deg);
  -moz-transform: translateY(15px) rotateZ(45deg);
  -ms-transform: translateY(15px) rotateZ(45deg);
  -o-transform: translateY(15px) rotateZ(45deg);
  transform: translateY(15px) rotateZ(45deg);
}
	/*nada*/
.button.active .bottom {
  -webkit-transform: translateY(-15px) rotateZ(-45deg);
  -moz-transform: translateY(-15px) rotateZ(-45deg);
  -ms-transform: translateY(-15px) rotateZ(-45deg);
  -o-transform: translateY(-15px) rotateZ(-45deg);
  transform: translateY(-15px) rotateZ(-45deg);
}
/*nada*/
.button.active .middle { width: 0; }

.move-to-right {
  -webkit-transform: translateX(300px);
  -moz-transform: translateX(300px);
  -ms-transform: translateX(300px);
  -o-transform: translateX(300px);
  transform: translateX(300px);
}

nav { padding-top: 30px; }

.sidebar-list {
  padding: 0;
  margin: 0;
  list-style: none;
  position: relative; 
  margin-top: 50px; /*define distancia do topo*/
  margin-left:20px;
  text-align: left;
}

.sidebar-item {
  margin: 30px ;
  opacity: 0;
  -webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);}
/*-webkit-transform: translateY(20px);
  -moz-transform: translateY(20px);
  -ms-transform: translateY(20px);
  -o-transform: translateY(20px);
  transform: translateY(20px);*/
.sidebar-item:first-child {
  -webkit-transition: all .7s .2s ease-in-out;
  -moz-transition: all .7s .2s ease-in-out;
  -ms-transition: all .7s .2s ease-in-out;
  -o-transition: all .7s .2s ease-in-out;
  transition: all .7s .2s ease-in-out;
}

.sidebar-item:nth-child(2) {
  -webkit-transition: all .7s .4s ease-in-out;
  -moz-transition: all .7s .4s ease-in-out;
  -ms-transition: all .7s .4s ease-in-out;
  -o-transition: all .7s .4s ease-in-out;
  transition: all .7s .4s ease-in-out;
}

.sidebar-item:nth-child(3) {
  -webkit-transition: all .7s .6s ease-in-out;
  -moz-transition: all .7s .6s ease-in-out;
  -ms-transition: all .7s .6s ease-in-out;
  -o-transition: all .7s .6s ease-in-out;
  transition: all .7s .6s ease-in-out;
}
.sidebar-item:nth-child(4) {
  -webkit-transition: all .7s .6s ease-in-out;
  -moz-transition: all .7s .6s ease-in-out;
  -ms-transition: all .7s .6s ease-in-out;
  -o-transition: all .7s .6s ease-in-out;
  transition: all .7s .6s ease-in-out;
}
.sidebar-item:nth-child(5) {
  -webkit-transition: all .7s .6s ease-in-out;
  -moz-transition: all .7s .6s ease-in-out;
  -ms-transition: all .7s .6s ease-in-out;
  -o-transition: all .7s .6s ease-in-out;
  transition: all .7s .6s ease-in-out;
}

.sidebar-item:last-child {
  -webkit-transition: all .7s .8s ease-in-out;
  -moz-transition: all .7s .8s ease-in-out;
  -ms-transition: all .7s .8s ease-in-out;
  -o-transition: all .7s .8s ease-in-out;
  transition: all .7s .6s ease-in-out;
}

.sidebar-item.active {
  opacity: 1;
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
}

.sidebar-anchor {
  color: #179b77;
  text-decoration: none;
  font-size: 30px;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 7px;
}

.sidebar-anchor:before {
  content: "";
  width: 0;
  height: 2px;
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #179b77;
  -webkit-transition: all .7s ease-in-out;
  -moz-transition: all .7s ease-in-out;
  -ms-transition: all .7s ease-in-out;
  -o-transition: all .7s ease-in-out;
  transition: all .7s ease-in-out;
}

.sidebar-anchor:hover:before { width: 100%; }

 @media (min-width: 480px) {

.nav-list { display: block; }
}
 @media (min-width: 768px) {

.nav-right { position: absolute; }

.hidden-xs { display: block; }

.visible-xs { display: none; }
}


html {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizelegibility;
}

/*html,
body {
	background-image: url('mision.jpg') ;	 
  
  background-repeat: no-repeat;
background-attachment: fixed;
  /* background-size: auto;background-attachment: scroll;*/
  /*position: relative; 
  
}

body {
  font-family: 'Open Sans', sans-serif;
} */

.text {
  position: fixed; /*position: fixed; */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /*margin-left: 100px;*/
  z-index: 10;
  visibility:hidden;
}

svg {
  width: 100%;
  height: inherit;
  
}/*before-edge > text-before-edge > hanging 
*/
svg text {
  text-anchor: end; /*align text in left side*/
  alignment-baseline:before-edge;
}
svg #alpha {
  fill: #666666;
}
svg #title {
  letter-spacing: -2px;
  font-size: 6em;
  font-weight: 800;
}
svg #subtitle {
	
	/*dominant-baseline:hanging;*/
  letter-spacing: 8px;
  font-size: 1.2em;
  font-weight: 300;  
}
svg #base {
  fill: black;
  mask: url(#mask);
}

/*section.intro {
}*/


/*tira as barras*/
	::-webkit-scrollbar {
		width: 0px;
		height: 0px;
	}
	
	





</style>
</head>

<body>
<main>
<iframe class="frame" name="principal" src="homecontent.php" style="position:absolute;border-style: none;width: 100%; height: 100%;"></iframe>
<nav>
    <div class="nav-left hidden-xs">
      <div class="button" id="btn">
        <div class="bar top"></div>
        <div class="bar middle"></div>
        <div class="bar bottom"></div>
      </div>
    </div>
    <!-- nav-right --> 
  </nav>
  <!--<h1>Responsive Off-canvas Sidebar Navigation Demo</h1>
  <div class="jquery-script-ads" align="center">
 </div>-->
<div class="text" onclick="toggleSidebar()">
  <svg>
   <defs>
     <mask id="mask" x="0" y="0" width="100%" height="100%" >
       <!-- alpha rectangle -->
       <!-- rectángulo alfa -->
       <rect id="alpha" x="0" y="0" width="100%" height="100%"/>
       <!-- All text that you want -->
       <!-- Coloca todo el texto que necesites -->
       <text id="title" x="50%" y="0" dy="1.58em">Retornar</text>
       
     </mask>
    </defs>
    <!-- Apply color here! -->
    <!-- Color aquí -->
    <rect id="base" x="0" y="0" width="100%" height="100%"/>
  </svg>
</div>
</main>
<div class="sidebar">
  <ul class="sidebar-list">
    <li class="sidebar-item"><a class="sidebar-anchor" href="homecontent.php" target="principal" onClick="toggleSidebar();">Home</a></li>
    <li class="sidebar-item"><a class="sidebar-anchor" href="graficotemporeal.php" target="principal" onClick="toggleSidebar();">Consumo</a></li>
    <li class="sidebar-item"><a class="sidebar-anchor" href="setor.php" target="principal" onClick="toggleSidebar();">Setores</a></li>
    <li class="sidebar-item"><a class="sidebar-anchor" href="odometro.php" target="principal" onClick="toggleSidebar();">Gasto</a></li>
    <li class="sidebar-item"><a class="sidebar-anchor" href="graficohistorico.php" target="principal" onClick="toggleSidebar();">Historico</a></li>
    <li class="sidebar-item"><a class="sidebar-anchor" href="../sair.php">Logout</a></li><!--onclick="location.href='../index.html';"-->
  </ul>																		
</div>




<script type="text/javascript">/*
google_ad_client = "ca-pub-2783044520727903";
// jQuery_demo 
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;*/
</script>
<script src="../js/jquery-1.10.2.min.js"></script>
<script>
$(document).ready(function() { $(".button").on("click tap", function() {
    toggleSidebar();
  });

  $(document).keyup(function(e) {
    if (e.keyCode === 27) {
      toggleSidebar();	  
    }
  });

});
</script>

<script type="text/javascript">
  /*var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();*/
</script>

<script>
var x = 0;
function toggleSidebar() {
		//alert("Hello!Have a nice day!!");
	$(".text").css("visibility", "visible");
    $(".button").toggleClass("active");
    $("main").toggleClass("move-to-right");
    $(".sidebar-item").toggleClass("active");
	y =	x%2;
	if (y == 0){
		$(".text").css("visibility", "visible");
	}else{
		$(".text").css("visibility", "hidden");
	}
	x++;	
}
</script>


</body>
</html>
