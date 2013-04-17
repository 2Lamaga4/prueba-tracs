<article id="body">
    <section class="titulos" id="title">Agregar Nueva Cuenta</section>   
    <section class="td_nivel1" id="clases">
      <strong>Clase: </strong>
      <span class="texto_azul">
      <select name="clase" id="clase" class="textarea_redondo2" style="width:407px; height:27px;" onchange="grupo()">
        <option value="0">--</option>
          <?php 
          foreach($cuentas as $item){ 
          ?>
        <option value="<?php echo $item->getCuenta(); ?>"><?php echo $item->getCuenta()." ".$item->getDenominacion(); ?></option>
          <?php } ?>
        </select>
        </span>
      </section> 
    <div id="grupo_combo"></div>
    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr id="cue" style="display:none" >
            <td  class="td_nivel3"><strong>Cuenta:</strong></td>
            <td  class="td_nivel3"><div id="cuenta_combo"></div></td>
          </tr>     
          <tr id="subcue" style="display:none">
            <td height="40" class="td_nivel4"><strong>Subcuenta:</strong></td>
            <td height="20" class="td_nivel4"><div id="subcuenta_combo"></div></td>
          </tr>
          <tr>
            <td colspan="2">
              <table id="aux" width="470" border="0" align="center" cellpadding="0" cellspacing="2" style="display:none">
              <tr class="tr_tabla_interna">
                <td width="70" height="40" class="td_tabla_interna"><strong>Auxiliar:</strong></td>
                <td width="71" class="td_tabla_interna"><div id="numero"></div></td>
                <td width="118" class="td_tabla_interna">
                  <input name="auxiliar" type="text" class="textarea_redondo2" id="auxiliar"  style="width:80px;"/>
                  <span class="hint4">Número de cuenta auxiliar<span class="hint-pointer4">&nbsp;</span></span></td>
                <td width="201"><span class="td_tabla_interna">
                  <input name="denominacion" type="text" class="textarea_redondo2" id="denominacion" style="width:150px;"/>
                </span>
                <span class="td_tabla_interna"></span></td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="40" colspan="4" class="td_tabla_interna">Descripción de cuenta auxiliar:</td>
                </tr>
              <tr class="tr_tabla_interna">
                <td height="80" colspan="4" class="td_tabla_interna" align="center"><textarea name="descripcion_vivienda" cols="45" rows="5" class="textarea_redondo2" id="descripcion_vivienda" style="width:400px; height:57px"></textarea></td>
                </tr>
              </table>
            </td>
          </tr>
    </table>
  <img src="../images/line2.gif" width="550" height="1" /> 
  <input style="width:90px;" name="Entrar" type="button" class="boton_redondo" id="Entrar" value="::: Aceptar :::" onclick="enviar();"/>

</article>
<div id="agregar_grupo"></div>
<div id="agregar_cuenta"></div>
<div id="agregar_subcuenta"></div>