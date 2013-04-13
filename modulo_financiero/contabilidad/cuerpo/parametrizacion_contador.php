<div id="salir2">
<input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='contabilidad_home.html'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
<form id="form1" name="form1" method="post" action="php/action/actualizarFuncionario.php" onsubmit="return validar();">
  <table width="850" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td height="40">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="400" height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Nombres:</strong></td>
          <td width="241"><input name="nombre" type="text" class="textarea_redondo2" id="nombre" style="width:200px;" value="<?php echo $funcionario->getNombres(); ?>" />
            </td>
        </tr>
      </table></td>
      <td width="400"><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Apellidos:</strong></td>
          <td width="191"><input name="apellido" type="text" class="textarea_redondo2" id="apellido" style="width:200px;" value="<?php echo $funcionario->getApellidos(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Tipo Cédula:</strong></td>
          <td width="241" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<select name="documento" class="textarea_redondo2" id="documento" style="width:122px; height:27px;">
            <option value="0">--</option>
            <option value="1" <?php if($funcionario->getTipodocumento() == 1){ ?>selected="selected"<?php } ?>>CC</option>
            <option value="2" <?php if($funcionario->getTipodocumento() == 2){ ?>selected="selected"<?php } ?>>CC Extranjero</option>
          </select>
            </td>
        </tr>
      </table></td>
      <td>
    <table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Cédula:</strong></td>
          <td width="191"><input name="cedula" type="text" class="textarea_redondo2" id="cedula" style="width:200px;" value="<?php echo $funcionario->getNodocumento(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Rut/Nit:</strong></td>
          <td width="241"><input name="rut" type="text" class="textarea_redondo2" id="rut" style="width:200px;" value="<?php echo $funcionario->getRutnit(); ?>" />
            </td>
        </tr>
      </table></td>
      <td><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Teléfono fijo:</strong></td>
          <td width="191"><input name="telefono" type="text" class="textarea_redondo2" id="telefono" style="width:200px;" value="<?php echo $funcionario->getTelefono(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Celular:</strong></td>
          <td width="241"><input name="celular" type="text" class="textarea_redondo2" id="celular" style="width:200px;" value="<?php echo $funcionario->getCelular(); ?>" />
            </td>
        </tr>
      </table></td>
      <td><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="149" class="texto_azul" align="left"><strong>Dirección:</strong></td>
          <td width="191"><input name="direccion" type="text" class="textarea_redondo2" id="direccion" style="width:200px;" value="<?php echo $funcionario->getDireccion(); ?>" />
            </td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td height="40">    </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="20" colspan="2"><img src="images/line2.gif" width="850" height="1" /></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="center"><input name="agregar_propietario" type="submit" class="boton_general" style="width:160px" id="agregar_propietario" value="::: Guardar :::" />
        <input type="hidden" name="id" id="id" value="<?php echo $funcionario->getId(); ?>" />
        <input type="hidden" name="cargo" id="cargo" value="<?php echo $funcionario->getCargo(); ?>" />
        <input type="hidden" name="url" id="url" value="parametrizacion_contador" />
        </td>
        
        
    </tr>
  </table>
  </form>
</div>

<div class="titulos" id="subtitulo">&gt; Parametrización Contador</div>
