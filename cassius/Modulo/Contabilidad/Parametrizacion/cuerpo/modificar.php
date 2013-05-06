<script type="text/javascript">
  function texto (){
                document.getElementById ("Descripcion").value = "<?php echo  $enticuentas-> getDescripcion(); ?>";
            }
</script>
<?php 
 foreach ($enticuentas as $key)
     {
?>	        
<body class="popup" OnContextMenu="return false" onUnload='cerrarVentana()' onload="texto ();">
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="422" height="50" align="center" valign="middle" bgcolor="#ADB1CB">
      <table width="256" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="256" class="titulos" align="center">Modificar Cuenta</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" valign="middle" align="center"></td>
      <tr>
        <td colspan="2"><table width="470" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr class="tr_tabla_interna">
                <td width="70" height="40" class="td_tabla_interna"><strong>Cuenta:</strong></td>
                <td width="71" class="td_tabla_interna">

                	<input id="nmrcuenta" type="text" value='<?php echo  $enticuentas-> getCuenta(); ?>' name="auxiliar" class="textarea_redondo2" id="auxiliar" style="width:80px;"/>
                	<span class="hint4">Número de cuenta auxiliar<span class="hint-pointer4">&nbsp;</span></span></td>
                <td width="201"><span class="td_tabla_interna">

                  <input name="auxiliar2" id="Denominacion" value="<?php echo   $enticuentas-> getDenominacion(); ?>" type="text" class="textarea_redondo2" id="auxiliar2" style="width:150px;"/>
                </span></td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="40" colspan="4" class="td_tabla_interna">
                  Descripción de cuenta:</td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="80" colspan="4" class="td_tabla_interna" align="center" >
                	<div class="txt">    
                    <textarea  id="Descripcion" class="Descri" ></textarea>                                                        
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
 <?php 
     }
 ?>
 <center>
      <input style="width:90px;"name="Entrar" type="button" class="boton_redondo" id="Entrar" value="::: Aceptar :::" onclick="Modicuenta();"/>
    </center>
</body>