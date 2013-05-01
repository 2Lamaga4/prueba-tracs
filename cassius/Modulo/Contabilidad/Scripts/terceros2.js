/*
#Parametrizacion
@activarterceros.php
@terceros.php
*/

   $(document).ready(function(){
                $('#paging_container7').pajinate({
                    num_page_links_to_display : 3,/*numero de datos enel paginador*/
                    items_per_page : 12 /*numero de datos en la pagina*/
                });
            });     
  $(document).ready(function(){
        $('#paging_container8').pajinate({
          num_page_links_to_display : 3,
          items_per_page : 12 
        });
      });            
            
function borrar(id){
  if (confirm('¿Estas seguro que desea borrar este Tercero?')){ 
     location.href = "../php/action/deleteTerceros.php?id="+id;
    } 
}
function borrarF(id){
  if (confirm('¿Estas seguro que desea borrar este Funcionario?')){ 
     location.href = "../php/action/deletfuncionario.php?id="+id;
    } 
}

function activar(id){
  if (confirm('¿Estas seguro que desea activar este Tercero?')){ 
     location.href = "../php/action/deleteTerceros.php?con=1&id="+id;
    } 
}
function cerrarVentana(){ 
 window.opener.location.href = window.opener.location.href; 
  if (window.opener.progressWindow)     
 { 
    window.opener.progressWindow.close()
  } 
 window.close(); 
}