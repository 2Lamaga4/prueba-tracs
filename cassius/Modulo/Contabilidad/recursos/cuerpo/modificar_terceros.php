<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../Parametrizacion/terceros.php'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
<form id="form1" name="form1" method="post" action="../php/action/editTerceros.php" onsubmit="return validar();">
  <table width="850" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td width="435" height="30">&nbsp;</td>
      <td width="414">&nbsp;</td>
    </tr>
    <tr>
      <td height="40" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="137" class="texto_azul" align="left"><strong>Tipo de documento:</strong></td>
          <td width="163"><select name="documento" class="textarea_redondo2" id="documento" style="width:122px; height:27px;">
            <option value="0">--</option>
            <option value="1" <?php if($tercero->getTipodocumento() == 1){ ?>selected="selected"<?php } ?> >CC</option>
            <option value="2" <?php if($tercero->getTipodocumento() == 2){ ?>selected="selected"<?php } ?> >CC Extranjero</option>
          </select>
           </td>
        </tr>
      </table></td>
      <td bgcolor="#CCCCCC" class="tr_tabla_interna2"><div id="nom_tercero"></div></td>
    </tr>
    <tr>
      <td height="40" colspan="2" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="715" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="136" class="texto_azul" align="left"><strong>Nombre:</strong></td>
          <td width="579"><input name="nombre" type="text" class="textarea_redondo2" id="nombre" style="width:565px;" value="<?php echo $tercero->getNombretercero(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="137" class="texto_azul" align="left"><strong>Teléfono:</strong></td>
          <td width="163"><input name="telefono" type="text" class="textarea_redondo2" id="telefono" style="width:110px;" value="<?php echo $tercero->getTelefono(); ?>" />
           </td>
        </tr>
      </table></td>
      <td bgcolor="#CCCCCC" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="74" class="texto_azul" align="left"><strong>Dirección:</strong></td>
          <td width="226"><input name="direccion" type="text" class="textarea_redondo2" id="direccion" style="width:200px;" value="<?php echo $tercero->getDireccion(); ?>" />
          </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="137" class="texto_azul" align="left"><strong>Correo:</strong></td>
          <td width="163"><input name="correo" type="text" class="textarea_redondo2" id="correo" style="width:110px;" value="<?php echo $tercero->getEmail(); ?>" />
           </td>
        </tr>
      </table></td>
      <td height="40" class="tr_tabla_interna2"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="74" class="texto_azul" align="left"><strong>Régimen:</strong></td>
          <td width="226"><select name="regimen" class="textarea_redondo2" id="regimen" style="width:212px; height:27px;">
            <option value="0">--</option>
            <option value="1" <?php if($tercero->getRegimen() == 1){ ?>selected="selected"<?php } ?> >Simplificado</option>
            <option value="2" <?php if($tercero->getRegimen() == 2){ ?>selected="selected"<?php } ?> >Común</option>
            <option value="3" <?php if($tercero->getRegimen() == 3){ ?>selected="selected"<?php } ?> >Gran contribuyente</option>
          </select>
           </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center"><img src="images/line2.gif" width="850" height="1" /></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center"><input name="agregar_propietario" type="submit" class="boton_general" style="width:160px" id="agregar_propietario" value="::: Aceptar :::" />
        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>" /></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center">&nbsp;</td>
    </tr>
  </table>
  
  </form>

</div>
<div class="titulos" id="subtitulo1">&gt; Modificar Tercero</div>