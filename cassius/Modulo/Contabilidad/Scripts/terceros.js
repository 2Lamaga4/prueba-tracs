$(document).ready(function() {
  $("ul.pagination1").quickPagination();
  $("ul.pagination2").quickPagination({pagerLocation:"both"});
  $("ul.pagination3").quickPagination({pagerLocation:"both",pageSize:"3"});
});
function borrar(id){
  if (confirm('¿Estas seguro que desea borrar este Tercero?')){ 
     location.href = "../php/action/deleteTerceros.php?id="+id;
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