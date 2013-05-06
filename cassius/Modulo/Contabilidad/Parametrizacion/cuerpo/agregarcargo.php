<body class="popup" OnContextMenu="return false" onUnload='cerrarVentana()' >
<form action="../php/action/addCargo.php" method="GET">	
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB">
      <table width="256" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" class="titulos" align="center">Agregar Cargo</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" valign="middle" align="center"></td>
      <tr>
        <td colspan="2">
        	<table width="470" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr class="tr_tabla_interna">
                <td width="70" height="40" class="td_tabla_interna"><strong>Cargo:</strong></td>
                 	<td width="201"><span class="td_tabla_interna">
					<input type="text" value="" name="nombre" class="textarea_redondo2" style="width:150px;">
                    </span>
                	</td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="40" colspan="4" class="td_tabla_interna">
                  Descripción de Cargo:</td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="80" colspan="4" class="td_tabla_interna" align="center" >
                	<div class="txt">   
                    <textarea name="description" id="Descripcion" class="Descri" ></textarea>    
                    </div>                                                    
                </td>
                </tr>
              </table></td>
          </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="middle" align="center">
      <img src="../images/line2.gif" width="550" height="1" /></td>
  </tr>
  <tr>
    <td height="35" valign="top" align="center">
    </td>
  </tr>
</table>
 <center>
	<input type ="submit" value="::: Enviar :::" style="width:90px;"name="Entrar" class="boton_redondo" id="Entrar">
 </center>
</form>     
</body>