<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB"><table width="289" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="289" class="titulos" align="center">Modificar Nueva Cuenta</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" valign="middle" align="center"></td>
  </tr>
  <tr>
    <td height="35" valign="middle" align="center"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="797" height="40" class="td_nivel1"><table width="500" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="79"><strong>Clase: </strong></td>
            <td width="701"><span class="texto_azul">
              <select name="clase" id="clase" class="textarea_redondo2" style="width:407px; height:27px;" onchange="grupo()">
                <option value="0">--</option>
                <?php foreach($cuentas as $item){ 
						$sel = "";
						if($datos[0] == $item->getCuenta()){
							$sel = "selected";
						}
				?>
               		 <option value="<?php echo $item->getCuenta(); ?>" <?php echo $sel; ?>><?php echo $item->getCuenta()." ".$item->getDenominacion(); ?></option>
                <?php } ?>
              </select>
            </span></td>
          </tr>
        </table></td>
      </tr>
       <?php if($nm == 0 || $nm == 1 || $nm == 2 || $nm == 3){ ?>  
      <tr>
        <td height="40" class="td_nivel2"><table width="500" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div id="grupo_combo"></div></td>
            </tr>
        </table></td>
      </tr>
      <?php } ?> 
      <tr>
        <td height="20"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
            <?php if($nm == 0 || $nm == 3 || $nm == 2){ ?>  
          <tr>
            <td width="76" height="40" class="td_nivel3"><strong>Cuenta: </strong></td>
            <td width="694" class="td_nivel3"><div id="cuenta_combo"></div></td>
            </tr>
             <?php } ?> 
           <?php if($nm == 0 || $nm == 3){ ?>  
          <tr>
            <td height="40" class="td_nivel4"><strong>Subcuenta: </strong></td>
            <td height="20" class="td_nivel4"><div id="subcuenta_combo"></div></td>
            </tr>
          <?php } ?>  
         <?php if($nm == 0){ ?>   
          <tr>
            <td colspan="2"><table width="470" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr class="tr_tabla_interna">
                <td width="70" height="40" class="td_tabla_interna"><strong>Auxiliar:</strong></td>
                <td width="71" class="td_tabla_interna"><div id="numero"></div></td>
                <td width="118" class="td_tabla_interna"><input name="auxiliar" type="text" class="textarea_redondo2" id="auxiliar" style="width:80px;" value="<?php echo $datos[6].$datos[7]; ?>" /><span class="hint4">Número de cuenta auxiliar<span class="hint-pointer4">&nbsp;</span></span></td>
                <td width="201"><span class="td_tabla_interna">
                  <input name="denominacion" type="text" class="textarea_redondo2" id="denominacion" style="width:150px;" value="<?php echo $Idcuentas->getDenominacion(); ?>"/>
                </span>

                  <span class="td_tabla_interna"></span></td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="40" colspan="4" class="td_tabla_interna">Descripción de cuenta auxiliar:</td>
              </tr>
              <tr class="tr_tabla_interna">
                <td height="80" colspan="4" class="td_tabla_interna" align="center"><textarea name="descripcion_vivienda" cols="45" rows="5" class="textarea_redondo2" id="descripcion_vivienda" style="width:400px; height:57px"><?php echo $Idcuentas->getDescripcion(); ?></textarea></td>
                </tr>
              </table></td>
          </tr>
          <?php } ?>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="middle" align="center"><img src="images/line2.gif" width="550" height="1" /></td>
  </tr>
  <tr>
    <td height="35" valign="top" align="center"><input style="width:90px;" name="Entrar" type="button" class="boton_redondo" id="Entrar" value="::: Aceptar :::" onclick="enviar();"/></td>
  </tr>
</table>
<div id="agregar_grupo"></div>
<div id="agregar_cuenta"></div>
<div id="agregar_subcuenta"></div>