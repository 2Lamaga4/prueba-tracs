
<?php
    include "../php/dao/daoConnection.php";
    include "../php/entities/cuentas.php";
    include "../php/dao/CuentaDAO.php";
if( isset($_GET['nc']) && isset($_GET['de']) && isset($_GET['des']) && isset($_GET['id']))
   {       $objcuentas = new CuentaDAO();	
           $enticuentas = new cuentas();		
   	     $enticuentas->setCuenta($_GET['nc']);
         $enticuentas->setDenominacion($_GET['de']);
         $enticuentas->setDescripcion($_GET['des']);
         $enticuentas->setId($_GET['id']);
         $res=$objcuentas->update($enticuentas);
         if($res){
         	echo "
         		<script text='text/javascript'>
         			alert('modificado correctamente');
         		</script>
         	";
         	header()
         }
   }else{
    
   }
?>