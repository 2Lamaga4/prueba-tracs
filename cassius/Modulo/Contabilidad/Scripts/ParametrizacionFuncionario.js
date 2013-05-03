 /*
#Parametrizacion
@ParametrizacionFuncionario.php
*/

 function OnSelectionChange (select) {
            var selectedOption = select.options[select.selectedIndex];
     
              if(selectedOption.value==0){

				window.open('agregraCargo.php','Agregar Cargo','width=300,height=400');
              }

        
        }