/*
#ResgitroContable
@rc_movimientos.php
 */

function MM_openBrWindow(theURL,winName,features) { //v2.0
  ventana=window.open(theURL,winName,features);
  alto=screen.height;
  ancho=screen.width;
  yposi=(alto-540)/2;
  xposi=(ancho-970)/2;
  ventana.moveTo(xposi,yposi);
}
	window.addEvent('domready', function() { 
		new vlaDatePicker('exampleI');
		new vlaDatePicker('exampleII');		
	});	