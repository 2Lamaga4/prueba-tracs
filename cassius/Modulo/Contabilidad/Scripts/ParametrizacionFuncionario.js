 /*
#Parametrizacion
@ParametrizacionFuncionario.php
*/

 function OnSelectionChange (select) {
            var selectedOption = select.options[select.selectedIndex];
     
              if(selectedOption.value==0){				
				ventana=window.open('agregraCargo.php','Agregar Cargo','width=560,height=380');
				  alto=screen.height;
				  ancho=screen.width;
				  yposi=(alto-540)/2;
				  xposi=(ancho-540)/2;
				  ventana.moveTo(xposi,yposi);
              }

        
        }