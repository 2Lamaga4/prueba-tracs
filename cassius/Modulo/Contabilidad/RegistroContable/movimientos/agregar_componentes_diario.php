<form id="form1" name="form1" method="post" action="../php/action/addMovimiento.php" onsubmit="return validar()">
<table width="945" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB">
      <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" class="titulos" align="center">Agregar Comprobante de diario</td>
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
             <select name="documento" class="textarea_redondo2" id="documento" style="width:80px; height:27px;" onchange="numero_documento();" required>
            <option value="0">--</option>
            <?php foreach($documento as $item){ ?>
              <option value="<?php echo $item->getId(); ?>">
              <?php echo $item->getNombredoc(); ?></option>
            <?php } ?>
            </select></td>
            <td width="55"><div id="num_d"></div></td>
          </tr>
        </table>  
        </td>

        <td width="729" align="left" valign="middle" bgcolor="#E6CCCD" class="texto_azul">
          <table width="705" border="0" cellpadding="0" cellspacing="3">
          <tr>
            <td>
              <span class="texto_azul2"><strong>&nbsp;Movimiento 
              <input name="num_movi" id="num_movi" type="hidden" value="<?php if(count($movimiento) == 0){ echo count($movimiento) + 1; }else{ echo count($movimiento) + 1; }  ?>" /> <?php if(count($movimiento) == 0){ echo count($movimiento) + 1; }else{ echo count($movimiento) + 1; }  ?></strong></span><strong> - </strong>
              <input type="text" name="fecha" class="inputDate textarea_redondo2" id="inputDate" style="width:65px;" value="<?php echo date('d/m/Y'); ?>" readonly="readonly" />
 
              <strong>&nbsp;Nombre de tercero:</strong>&nbsp;

              <input name="tercero" type="text" class="textarea_redondo2" id="tercero"
                value="" autocomplete="off" style="width:180px;" onblur="javascript:dato_tercero()" required/> 
             <span id="status"></span>

              <td valign="middle"><div id="ter2">
                
              </div></td>              
            </td>
          </tr>
          <tr>
            <td><img src="images/line2.gif" width="700" height="1" /></td>
          </tr>
          <tr>
            <td colspan="3">
              <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Concepto:</strong>
              <span class="td_tabla_interna">
              <input name="concepto" type="text" class="textarea_redondo2" id="concepto" style="width:422px;" required/>
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
    <td height="35" valign="top" align="center">
    <input style="width:90px;"name="Entrar" type="submit" class="boton_redondo" id="Entrar" value="::: Aceptar :::" />
    <input type="hidden" name="num_movimiento" id="num_movimiento" value="<?php if(count($movimiento) == 0){ echo count($movimiento) + 1; }else{ echo count($movimiento); }  ?>" />
    <input type="hidden" name="suma_debito" id="suma_debito" value="0" />
    <input type="hidden" name="id_suma_debito" id="id_suma_debito" value="0" />
    </td>
  </tr>
</table>
</form>