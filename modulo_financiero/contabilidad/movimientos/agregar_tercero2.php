<div class="titulos" id="subtitulo">
  &gt; Agregar Tercero</div>
<div id="subtitulo">

  <form action="contabilidad/php/action/addTerceros.php" id="form1" method="post" name="form1" onsubmit="return validar();">
    <table align="center" border="0" cellpadding="0" cellspacing="1" width="850">
      <tbody>
        <tr>
          <td height="30" width="435">
            &nbsp;</td>
          <td width="414">
            &nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC" class="tr_tabla_interna2" height="40">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="300">
              <tbody>
                <tr>
                  <td align="left" class="texto_azul" width="137">
                    <strong>Tipo de documento:</strong></td>
                  <td width="163">
                    <select class="textarea_redondo2" id="documento" name="documento" style="width:122px; height:27px;"><option value="0">--</option><option value="1">CC</option><option value="2">CC Extranjero</option></select></td>
                </tr>
              </tbody>
            </table>
          </td>
          <td bgcolor="#CCCCCC" class="tr_tabla_interna2">
            <div id="nom_tercero">
              <table align="center" border="0" cellpadding="0" cellspacing="0" style="color: rgb(10, 97, 162); font-family: Verdana, Geneva, sans-serif; font-size: 12px; background-color: rgb(228, 238, 249);" width="300">
                <tbody>
                  <tr>
                    <td align="left" class="texto_azul" style="color: rgb(0, 0, 51);" width="74">
                      <strong>N&uacute;mero:</strong></td>
                    <td width="226">
                      <input class="textarea_redondo2" id="numero" name="numero" style="border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; -webkit-box-shadow: rgb(51, 51, 51) 0px 0px 9px inset; box-shadow: rgb(51, 51, 51) 0px 0px 9px inset; border: 1px solid rgb(0, 0, 102); padding: 3px 5px; font-family: Arial, Helvetica, Verdana, sans-serif; height: 20px; width: 200px;" type="text" value="" /></td>
                  </tr>
                  <tr>
     
                  </tr>
                </tbody>
              </table>
            </div>
          </td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC" class="tr_tabla_interna2" colspan="2" height="40">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="715">
              <tbody>
                <tr>
                  <td align="left" class="texto_azul" width="136">
                    <strong>Nombre:</strong></td>
                  <td width="579">
                    <input class="textarea_redondo2"  value="<?php echo $prueba;?>" id="nombre" name="nombre" style="width:565px;" type="text" /></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC" class="tr_tabla_interna2" height="40">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="300">
              <tbody>
                <tr>
                  <td align="left" class="texto_azul" width="137">
                    <strong>Tel&eacute;fono:</strong></td>
                  <td width="163">
                    <input class="textarea_redondo2" id="telefono" name="telefono" style="width:110px;" type="text" /></td>
                </tr>
              </tbody>
            </table>
          </td>
          <td bgcolor="#CCCCCC" class="tr_tabla_interna2">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="300">
              <tbody>
                <tr>
                  <td align="left" class="texto_azul" width="74">
                    <strong>Direcci&oacute;n:</strong></td>
                  <td width="226">
                    <input class="textarea_redondo2" id="direccion" name="direccion" style="width:200px;" type="text" /></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td class="tr_tabla_interna2" height="40">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="300">
              <tbody>
                <tr>
                  <td align="left" class="texto_azul" width="137">
                    <strong>Correo:</strong></td>
                  <td width="163">
                  <input class="textarea_redondo2" id="correo" name="correo" style="width:110px;" type="email" placeholder="me@example.com"/></td>
                </tr>
              </tbody>
            </table>
          </td>
          <td class="tr_tabla_interna2" height="40">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="300">
              <tbody>
                <tr>
                  <td align="left" class="texto_azul" width="74">
                    <strong>R&eacute;gimen:</strong></td>
                  <td>
                    <select class="textarea_redondo2" id="regimen" name="regimen" style="width:212px; height:27px;"><option value="0">--</option><option value="1">Simplificado</option><option value="2">Com&uacute;n</option><option value="3">Gran contribuyente</option></select></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td align="center" colspan="2">
            <img height="1" src="images/line2.gif" width="850" /></td>
        </tr>
        <tr>
          <td align="center" colspan="2">
            &nbsp;</td>
        </tr>
        <tr>
          <td align="center" colspan="2">
            <input class="boton_general" id="agregar_propietario" name="agregar_propietario" style="width:160px" type="submit" value="::: Aceptar :::" /> 
            <input id="des" name="des" type="hidden" value="1" /></td>
        </tr>
      </tbody>
    </table>
  </form>

</div>
<p>&nbsp;</p>
