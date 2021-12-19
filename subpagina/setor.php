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
<style>
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background: #179b77;
}

.colorful-switch {
  display: block;	
  position: absolute;
  left: 50%;
  top: 100px;
  width: 280px;
  height: 120px;
  margin-left: -140px;
  margin-top: -60px;
  border-radius: 50px;
  background: #000000;
}
.colorful-switch2 {
  display: block;	
  position: absolute;
  left: 50%;
  top: 250px;
  width: 280px;
  height: 120px;
  margin-left: -140px;
  margin-top: -60px;
  border-radius: 50px;
  background: #000000;
}
.colorful-switch2:before {
  content: "";
  z-index: -1;
  position: absolute;
  left: -5px;
  top: -5px;
  width: 290px;
  height: 130px;
  border-radius: 55px;
  /* 			COR DA BORDA */
  background: #000000;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}
.colorful-switch2:hover:before {
/* 			COR DA BORDA hover */
  background: #13232f;
}
.colorful-switch3 {
  display: block;	
  position: absolute;
  left: 50%;
  top: 400px;
  width: 280px;
  height: 120px;
  margin-left: -140px;
  margin-top: -60px;
  border-radius: 50px;
  background: #000000;
}
.colorful-switch3:before {
  content: "";
  z-index: -1;
  position: absolute;
  left: -5px;
  top: -5px;
  width: 290px;
  height: 130px;
  border-radius: 55px;
  /* 			COR DA BORDA */
  background: #000000;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}
.colorful-switch3:hover:before {
/* 			COR DA BORDA hover */
  background: #13232f;
}

.colorful-switch:before {
  content: "";
  z-index: -1;
  position: absolute;
  left: -5px;
  top: -5px;
  width: 290px;
  height: 130px;
  border-radius: 55px;
  /* 			COR DA BORDA */
  background: #000000;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}
.colorful-switch:hover:before {
/* 			COR DA BORDA hover */
  background: #13232f;
}
.colorful-switch__checkbox {
	z-index: -10;
	position: absolute;
	left: 0;
	top: 0;
	opacity: 0;
}
.colorful-switch__label {
  z-index: 1;
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 50px;
  cursor: pointer;
}
.colorful-switch__bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 840px;
  height: 100%;
  
 /* background: -webkit-linear-gradient(0deg, #ffffff 0, #ffffff 280px, #ffffff 560px, #ffffff  100%);*/
  
  background: linear-gradient(120deg, #179b77 0, #33FF99 280px, #FF3300 560px, #ff0000  	100%);
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(-560px, 0, 0);
          transform: translate3d(-560px, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__bg {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__dot {
  position: absolute;
  left: 204px;
  top: 50%;
  width: 8px;
  height: 8px;
  margin-left: -4px;
  margin-top: -4px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__dot {
  -webkit-transform: translate3d(-125px, 0, 0);
          transform: translate3d(-125px, 0, 0);
}
.colorful-switch__on {
  position: absolute;
  left: 177px;
  top: 35px;
  width: 30px;
  height: 56px;
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__on {
  -webkit-transform: translate3d(-125px, 0, 0);
          transform: translate3d(-125px, 0, 0);
}
.colorful-switch__on__inner {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-transition: -webkit-transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  transition: -webkit-transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  transition: transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  transition: transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28), -webkit-transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  -webkit-transform-origin: 100% 50%;
          transform-origin: 100% 50%;
  -webkit-transform: rotate(45deg) scale(0) translateZ(0);
          transform: rotate(45deg) scale(0) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__on__inner {
  -webkit-transition: -webkit-transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  transition: -webkit-transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  transition: transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  transition: transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61), -webkit-transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  -webkit-transform: rotate(45deg) scale(1) translateZ(0);
          transform: rotate(45deg) scale(1) translateZ(0);
}
.colorful-switch__on__inner:before, .colorful-switch__on__inner:after {
  content: "";
  position: absolute;
  border-radius: 4px;
  background: #ffffff;
}
.colorful-switch__on__inner:before {
  left: 0;
  bottom: 0;
  width: 100%;
  height: 9px;
}
.colorful-switch__on__inner:after {
  right: 0;
  top: 0;
  width: 9px;
  height: 100%;
}
.colorful-switch__off {
  position: absolute;
  left: 204px;
  top: 50%;
  width: 64px;
  height: 64px;
  margin-left: -32px;
  margin-top: -32px;
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off {
  -webkit-transform: translate3d(-125px, 0, 0);
          transform: translate3d(-125px, 0, 0);
}
.colorful-switch__off:before, .colorful-switch__off:after {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 8px;
  margin-top: -4px;
  border-radius: 4px;
  background: #ffffff;
  -webkit-transition: -webkit-transform 0.25s 0.25s;
  transition: -webkit-transform 0.25s 0.25s;
  transition: transform 0.25s 0.25s;
  transition: transform 0.25s 0.25s, -webkit-transform 0.25s 0.25s;
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:before, .colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:after {
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.colorful-switch__off:before {
  -webkit-transform: rotate(45deg) scaleX(1) translateZ(0);
          transform: rotate(45deg) scaleX(1) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:before {
  -webkit-transform: rotate(45deg) scaleX(0) translateZ(0);
          transform: rotate(45deg) scaleX(0) translateZ(0);
}
.colorful-switch__off:after {
  -webkit-transition-timing-function: cubic-bezier(0.67, -0.16, 0.47, 1.61);
          transition-timing-function: cubic-bezier(0.67, -0.16, 0.47, 1.61);
  -webkit-transform: rotate(-45deg) scaleX(1) translateZ(0);
          transform: rotate(-45deg) scaleX(1) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:after {
  -webkit-transition-timing-function: ease;
          transition-timing-function: ease;
  -webkit-transform: rotate(-45deg) scaleX(0) translateZ(0);
          transform: rotate(-45deg) scaleX(0) translateZ(0);
}
</style>
</head>
<body><font size="200px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Room</font>
	    
    <div class="colorful-switch" >
        <input type="checkbox" style=" position: relative;
   							 top: 20px;" class="colorful-switch__checkbox" id="cozinha"/>
          <label class="colorful-switch__label" for="cozinha">
            <span class="colorful-switch__bg" ></span>
            <span class="colorful-switch__dot" ></span>
            <span class="colorful-switch__on">
              <span class="colorful-switch__on__inner" ></span>
            </span>
            <span  class="colorful-switch__off"></span>
          </label>
        </div> 
        
        <div class="colorful-switch2" >
        <input type="checkbox" style=" position: relative;
											top: 20px;" class="colorful-switch__checkbox" id="cozinha2"/>
          <label class="colorful-switch__label" for="cozinha2">
            <span class="colorful-switch__bg" ></span>
            <span class="colorful-switch__dot" ></span>
            <span class="colorful-switch__on">
              <span class="colorful-switch__on__inner" ></span>
            </span>
            <span  class="colorful-switch__off"></span>
          </label>
        </div>

        <div class="colorful-switch3" >
        <input type="checkbox" style=" position: relative;
    top: 20px;" class="colorful-switch__checkbox" id="cozinha3"/>
          <label class="colorful-switch__label" for="cozinha3">
            <span class="colorful-switch__bg" ></span>
            <span class="colorful-switch__dot" ></span>
            <span class="colorful-switch__on">
              <span class="colorful-switch__on__inner" ></span>
            </span>
            <span  class="colorful-switch__off"></span>
          </label>
        </div>
</body>
</html>