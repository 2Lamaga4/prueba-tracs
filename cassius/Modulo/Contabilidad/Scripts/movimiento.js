 function popUp(){  
 				var idmovi=document.getElementById('idmovi').value;		
				ventana=window.open('EditarMovimiento.php?dato='+idmovi,'Editar','width=980,height=480');
				  alto=screen.height;
				  ancho=screen.width;
				  yposi=(alto-540)/2;
				  xposi=(ancho-980)/2;
				  ventana.moveTo(xposi,yposi);               
				}