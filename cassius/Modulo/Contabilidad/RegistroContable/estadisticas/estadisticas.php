
<link rel="stylesheet"  href="estadisticas/css/estilos.css"/>
<script src="estadisticas/js/jquery.js" ></script>
<script  src="estadisticas/js/highcharts.js"></script> 
<script  src="estadisticas/js/modules/exporting.js"></script> 
		<script > 
		
			var chart;
			$(document).ready(function() {
				// Nuevos por mes
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'NUmeses',
						defaultSeriesType: 'column'
					},
					title: {
						text: 'Gastos mes a mes'
					},
					subtitle: {
						text: ''
					},
					xAxis: {
						categories: [
							'1', 
							'2', 
							'3', 
							'4', 
							'5', 
							'6', 
							'7', 
							'8', 
							'9', 
							'10', 
							'11', 
							'12'
						]
					},
					yAxis: {
						min: 0,
						title: {
							text: 'Gastos'
						}
					},
					
					tooltip: {
						formatter: function() {
							return 'Mes'+
								this.x +': ->'+ this.y +' Gasto';
						}
					},
					plotOptions: {
						column: {
							pointPadding: 0.2,
							borderWidth: 0
						}
					},
				        series: [{
						name: 'Monto Gastado por mes',
						data: [ 


						<?php 

						for ($i=1; $i <= 11 ; $i++) { 


						echo $esta[$i].',';  
						}	
						echo $esta[12];
						?>, 
						]
				
					}]
				});
			});
				
		</script> 
 
   	
<div id="NUmeses" style="width: 900px; height: 500px;margin-left:10px; float:left">
</div> 
                
