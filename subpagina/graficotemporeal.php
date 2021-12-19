<?php
	// session_start();
	// if (!isset($_SESSION['status'])){
	// 	header("Location: ../index.php");
	// 	exit;			
	// }
?>
<!DOCTYPE HTML><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>   

</head>

<body>

    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gasto aproximado de energia.</h1>
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	<script src="../js/temporeal/dark.js"></script>
    <script type="text/javascript">
	function obtemvalores(){    
		$.ajax({
			url: "http://localhost/subs/prototype/php/graficotemporeal/serverSide.php", 
			
			error: function () {
				y = 0;		 	
			},
			async: false,						 
			success: function(data){
				
				y =  parseFloat(data);
			}    		
		}); 
		return y;
	}
   $(function () {
    $(document).ready(function () {
        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

        $('#container').highcharts({
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {
                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                             y = obtemvalores();
								
                            series.addPoint([x, y], true, true); // TENHO QUE FAZER COM QUE O VALOR DESSE Y ESSA IGUAL A POTENCIA
                        }, 2000);
                    }
                }
            },
            title: {
                text: 'Gasto atual em Kw.'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150
            },
            yAxis: {
                title: {
                    text: 'kilowatt'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y, 2);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Valor mensurado',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;

                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: Math.random()
                        });
                    }
                    return data;
                }())
            }]
        });
    });
});
    </script>




<!--Desable view-source. Only works in chrome-->
<script>
    function click() {
        if (event.button==2||event.button==3) {
            oncontextmenu='return false';
            }
        }
    document.onmousedown=click
    document.oncontextmenu = new Function("return false;")
</script><script>
    function disableselect(e) {
        return false
    }
    function reEnable() {
        return true
    }
    document.onselectstart=new Function ("return false")
    if (window.sidebar) {
        document.onmousedown=disableselect
        document.onclick=reEnable
    }
</script>
<script>
    document.onkeydown = function(e) {
        if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
        }
        return false;
    };
</script><script>
    function click() {
        if (event.button==2||event.button==3) {
            oncontextmenu='return false';
            }
        }
    document.onmousedown=click
    document.oncontextmenu = new Function("return false;")
</script><script>
    function disableselect(e) {
        return false
    }
    function reEnable() {
        return true
    }
    document.onselectstart=new Function ("return false")
    if (window.sidebar) {
        document.onmousedown=disableselect
        document.onclick=reEnable
    }
</script>
</body></html>