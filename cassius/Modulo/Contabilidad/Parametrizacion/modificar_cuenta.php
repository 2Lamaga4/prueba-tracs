<script text="text/javascript">
function enviarModificar(){
  //var d = new document();
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
</script>
<?php 
    include "../php/dao/daoConnection.php";
    include "../php/entities/cuentas.php";
    include "../php/dao/CuentaDAO.php";
   $objcuentas = new CuentaDAO();	
    $enticuentas = new cuentas();		
    $enticuentas =  $objcuentas->get($_GET['id']);
   
    include_once ('cuerpo/modificar.php');
?>