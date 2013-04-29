
<?php 
 foreach ($enticuentas as $key)
     {
     	?>	
  
    	 <input type="text" value='<?php echo  $enticuentas-> getCuenta(); ?>' id="nmrcuenta">
         <input type="text" value="<?php echo   $enticuentas-> getDenominacion(); ?>" id="Denominacion">
         <input type="textarea" value="<?php echo  $enticuentas-> getDescripcion(); ?>" id="Descripcion">
         <?php 
           }
        	?>
     <button onclick="enviarModificar();">Modificar</button>