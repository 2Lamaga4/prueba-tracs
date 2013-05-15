<form id="form1" name="form1" method="post" action="../php/action/editarMovimientos.php" onsubmit="return validar()">
<table width="945" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB">
      <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" class="titulos" align="center">Edita Comprobante de diario</td>
      </tr>
    </table></td>
  </tr> 
  <tr> 
    <td height="20" valign="middle" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="35" valign="middle" align="center">
      <table width="950" border="0" align="center" cellpadding="0" cellspacing="2">
      <tr>
        <td width="215" height="90" align="left" valign="middle" bgcolor="#D9B0B3" class="texto_azul">
          <table width="220" border="0">
          <tr>
            <td width="166">&nbsp;<span class="texto_azul_peque">Documento</span>:

                 <?php
                 foreach ($movimientos as $item2) 
                 {  if($_GlOBALS['repetidos']!=$item2->getDocumen()){


                  ?>
                  <input  type="text"  class="textarea_redondo2" id="documento2" style="width:125px; height:27px;" value="<?php echo $item2->getDocumen() ?>" readonly="readonly" required>
                  <?php
                     $_GlOBALS['repetidos']=$item2->getDocumen();
                     }
                  }
                  $_GlOBALS['repetidos']="";
               ?>
             </td>
            <td width="55"><div id="num_d"></div></td>
          </tr>
        </table>   
        </td>

        <td width="729" align="left" valign="middle" bgcolor="#E6CCCD" class="texto_azul">
          <table width="705" border="0" cellpadding="0" cellspacing="3">
          <tr>
            <td>
              <span class="texto_azul2"><strong>&nbsp;Movimiento 
              <input  id="num_movi" type="hidden" value=" " />  </strong></span><strong> - </strong>
              <input type="text" name="num_movis"  style="width:65px;" value="<?php echo $_GET['dato'];?>" readonly="readonly" />
        
              <strong>&nbsp;Nombre de tercero:</strong>&nbsp;
            <?php 
                  foreach ($terceros as $item1) {
                   
                     ?>
                             <input  type="text" class="textarea_redondo2" id="tercero2" value="<?php echo $item1->getNombretercero() ?>"  style="width:180px;"    required/> 
                     <?php 
                         }

              ?>
             
             <span id="status"></span>
              <td valign="middle"><div id="ter2">
                
              </div></td>
              <center><div id="ter"></div></center>
            </td>
          </tr>
          <tr>
            <td><img src="images/line2.gif" width="700" height="1" /></td>
          </tr>
          <tr>
            <td colspan="3">
              <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Concepto:</strong>
                <?php
                foreach ($movimientos as $item2) 
                 { if( $_GlOBALS['repetidos']!=$item2->getConcepto()){
                  ?>
                <span class="td_tabla_interna">
                <input name="concepto" type="text" class="textarea_redondo2" id="concepto2" value="<?php echo $item2->getConcepto() ?>" style="width:422px;" required/>
                  <?php
                   $_GlOBALS['repetidos'] = $item2->getConcepto();
                   }
               }
               ?>
              </span>
            </td>
          </tr>
        </table></td>
      </tr>
      <tr>    
          
      </tr>
      <table align="center" border="0" cellpadding="0" cellspacing="2" style="background-color: rgb(95, 115, 166);" width="900">
  <tbody>
    <tr>
      <td class="td_resaltado_azul" height="30" style="background-color: rgb(119, 140, 164); font-size: 12px; font-family: Verdana, Geneva, sans-serif; color: rgb(255, 255, 255); padding: 0px 0px 0px 10px;">
        Cuenta</td>
      <td class="td_resaltado_azul" style="background-color: rgb(119, 140, 164); font-size: 12px; font-family: Verdana, Geneva, sans-serif; color: rgb(255, 255, 255); padding: 0px 0px 0px 10px;" width="471">
        Descripci&oacute;n</td>
      <td class="td_resaltado_azul" style="background-color: rgb(119, 140, 164); font-size: 12px; font-family: Verdana, Geneva, sans-serif; color: rgb(255, 255, 255); padding: 0px 0px 0px 10px;">
        D&eacute;bito</td>
      <td class="td_resaltado_azul" style="background-color: rgb(119, 140, 164); font-size: 12px; font-family: Verdana, Geneva, sans-serif; color: rgb(255, 255, 255); padding: 0px 0px 0px 10px;">
        Cr&eacute;dito</td>
    </tr>  
    <?php 
     $i=1;
    foreach ($movimientos as $item3) {
     
      ?>
<table id="Taab" align="center" border="0" cellpadding="0" cellspacing="1" style="" width="900">
    <tr class="tr_tabla_interna" style="background-color: rgb(228, 238, 249); font-size: 12px; font-family: Verdana, Geneva, sans-serif; color: rgb(10, 97, 162);">
      <td class="td_tabla_interna" id="CuentaF">
        <input  value="<?php echo $item3->getCodcuenta();?>"/></td>
      <td class="td_tabla_interna" id="CuentaD" style="padding: 0px 0px 0px 10px;">
       <input  value="<?php echo $item3->getDenoinacion();?>"/></td>
      <td class="td_tabla_interna" style="padding: 0px 0px 0px 3px;">     
        <input class="textarea_redondo2" id="debito1" name="<?php echo $i.'debito';?>" value="<?php echo $item3->getDebito();?>" style="border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; -webkit-box-shadow: rgb(51, 51, 51) 0px 0px 9px inset; box-shadow: rgb(51, 51, 51) 0px 0px 9px inset; border: 1px solid rgb(0, 0, 102); padding: 3px 5px; font-family: Arial, Helvetica, Verdana, sans-serif; height: 20px; width: 80px;"/>
     </td>
      <td class="td_tabla_interna" style="padding: 0px 0px 0px 10px;">
        <input class="textarea_redondo2" id="credito1" name="<?php echo $i.'credito';?>" value="<?php echo $item3->getCredito();?>" style="border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; -webkit-box-shadow: rgb(51, 51, 51) 0px 0px 9px inset; box-shadow: rgb(51, 51, 51) 0px 0px 9px inset; border: 1px solid rgb(0, 0, 102); padding: 3px 5px; font-family: Arial, Helvetica, Verdana, sans-serif; height: 20px; width: 80px;"/>
    </td>
    </tr>
</table>
      <?php
       $i++;    
     
    }
    ?>
   
</tbody>
<?php include_once("cuentasmas.php");?>

</table>  
    </table></td>
  </tr>
  <tr>
    <center>
    <td height="18" valign="middle" align="center"><img src="../images/line2.gif" width="940" height="1" /></td>
    </center>
  </tr>
    <td height="35" colspan="2" valign="top"><div id="cuentas"></div></td>
  <tr>
    <td height="35" valign="top" align="center">
    <center>
    
    <input style="width:90px;" type="submit" class="boton_redondo" id="Entrar" value="::: Aceptar :::" />
   </center>
    </td>
  </tr>
</table>
</form>
