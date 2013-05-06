<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" />
<link href="../css/stylecuenta.css" rel="stylesheet" />
<script src="../Scripts/img.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
<script text="text/javascript">
function Modicuenta(){
  var numcuenta;
  var Denomi;
  var Descri;
  var id;
  numcuenta=document.getElementById('nmrcuenta').value;
  Denomi = document.getElementById('Denominacion').value;
  Descri = document.getElementById('Descripcion').value;
  id = '<?php echo $_GET["id"]?>';
  location.href='cuentaedit.php?nc='+numcuenta+'&de='+Denomi+'&des='+Descri+'&id='+id+'';
}
function cerrarVentana(){ 
    alert('Nueva Cuenta creada con exito.');
     window.opener.location.href = window.opener.location.href; 

  if (window.opener.progressWindow) 
        
 { 
    window.opener.progressWindow.close()
  } 
  window.close(); 
}
</script>
<?php 
    include "../php/dao/daoConnection.php";
    include "../php/entities/cuentas.php";
    include "../php/dao/CuentaDAO.php";
   $objcuentas = new CuentaDAO();	
    $enticuentas = new cuentas();		
    $enticuentas =  $objcuentas->get($_GET['id']);
   
    include_once ('cuerpo/modificar.php');//llama al cuerpo de modifica
?>
