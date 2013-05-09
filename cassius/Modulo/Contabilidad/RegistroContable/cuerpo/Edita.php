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
                  <input  type="text"  class="textarea_redondo2" id="documento2" style="width:80px; height:27px;" value="<?php echo $item2->getDocumen() ?>" readonly="readonly" required>
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
          <td height="35" colspan="2" valign="top"><div id="cuentas"></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="middle" align="center"><img src="../images/line2.gif" width="940" height="1" /></td>
  </tr>
  <tr>
     
    <?php 
     $i=1;
    foreach ($movimientos as $item3) {
     
      ?>

      <input  value="<?php echo $item3->getCodcuenta();?>"/> 
      <input  value="<?php echo $item3->getDenoinacion();?>"/>
      <input name="<?php echo $i.'debito';?>" value="<?php echo $item3->getDebito();?>"/>
      <input name="<?php echo $i.'credito';?>" value="<?php echo $item3->getCredito();?>"/>
      <?php
       $i++;
      echo "</br>";
     
    }
    ?>

    <td height="35" valign="top" align="center">
    <input style="width:90px;" type="submit" class="boton_redondo" id="Entrar" value="::: Aceptar :::" />
    </td>
  </tr>
</table>
</form>