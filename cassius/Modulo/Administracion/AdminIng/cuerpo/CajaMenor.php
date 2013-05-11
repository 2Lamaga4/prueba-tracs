
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_administracion"></div>
<div id="contenido_tabla">
  <table width="970" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td width="810" height="20" colspan="3"><table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="20">&nbsp;</td>
        </tr>
        <tr>
           <form action="ingresarDatosCajaMenor.php" method="post">
          <article id="SaldoA">
              <div id="Salname"><strong>Saldo:</strong></div>
              <div id="Salinp"><input type="text" name="saldo" class="textarea_redondo2" id="nombres2"  value="<?php echo $sal; ?>" /></div>
          <article>
          <td height="40" bgcolor="#EAEAEA"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="49" height="35" class="texto_azul" >&nbsp;</td>
              <td width="119" class="texto_azul" align="left"><strong>No:</strong></td>
              <td width="226" class="titulos" align="left">0001</td>

              <td width="122" class="texto_azul"align="left"><strong>Fecha:</strong></td>
              <td width="284" class="texto_azul" align="left">
                <input type="date" name="fecha" class="textarea_redondo2" id="nombres2"  value="" required/>
              </td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="40" bgcolor="#E4EEF9"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="49" height="35" class="texto_azul" >&nbsp;</td>
              <td width="119" class="texto_azul" align="left"><strong>Pagado a:</strong></td>
              <td width="226" class="texto_azul" align="left">  
                             
                  <input name=" " type="text" value="" name="pagado"  class="textarea_redondo2" style="width:200px; height:20px;"/>
             
              </td>
              <td width="122" class="texto_azul"align="left"><strong>CC:</strong></td>
              <td width="284" class="texto_azul" align="left"><input name="cc" type="text" class="textarea_redondo2" id="cc" style="width:100px;"/></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="40" bgcolor="#EAEAEA"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="49" height="35" class="texto_azul" >&nbsp;</td>
              <td width="119" class="texto_azul" align="left"><strong>Valor:</strong></td>
              <td width="226" class="texto_azul" align="left"><input name="valor" type="text" class="textarea_redondo2" id="nombres2" style="width:100px;" required="number"/></td>
              <td width="122" class="texto_azul"align="left"><strong>Aprobado por:</strong></td>
              <td width="284" class="texto_azul" align="left"><select name="categoria6" class="textarea_redondo2" id="categoria8" style="width:200px; height:27px;">
                <option>--</option>
                <option>Presidente de asamblea</option>
              </select></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="40" bgcolor="#EAEAEA"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="49" height="35" class="texto_azul" >&nbsp;</td>
              <td width="119" class="texto_azul" align="left"><strong>Por concepto de:</strong></td>
              <td width="632" align="left" class="texto_azul"><input name="concepto" type="text" class="textarea_redondo2" id="concepto" style="width:535px;"/></td>
              </tr>
          <article id="CaTe">
              <div id="CaTename"><strong>Categoria:</strong></div>
              <div id="Cateinp">
                <select name="categoria"   class="textarea_redondo2" style="width:200px; height:27px;">
                    <option value="0">---</option>
                    <?php 
                          foreach ($cuentas as $items) {
                            ?>
                              <option value="<?php echo $items->getId()?>"><?php echo $items->getDenominacion()?></option>
                            <?php
                          }


                    ?>
                </select>
            

              </div>
          <article>
          </table></td>
        </tr>
         <tr>
          <td height="30">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="3" align="center">
        <img src="../images/line2.gif" width="930" height="1" />
      </td>
    </tr>
    <tr>
      <td height="40" colspan="3" align="center"><input name="agregar_propietario" type="submit" class="boton_general" style="width:160px" id="agregar_propietario" /></td>
        </form>
    </tr>
    <tr>
      <td height="40" colspan="3" align="center"><img src="../images/line2.gif" width="930" height="1" /></td>
    </tr>
    <tr>
      <td height="40" colspan="3" align="center"><table width="950" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr class="texto_blanco">
          <td height="30" align="center" bgcolor="#04447D"><strong>Número</strong></td>
          <td align="center" bgcolor="#04447D"><strong>Fecha</strong></td>
          <td align="center" bgcolor="#04447D"><strong>Pagado a</strong></td>
          <td align="center" bgcolor="#04447D"><strong>Aprobado por</strong></td>
          <td align="center" bgcolor="#04447D"><strong>Por concepto de</strong></td>
          <td align="center" bgcolor="#04447D" class="texto_blanco"><strong>Valor</strong></td>
        </tr>
        <tr class="tr_tabla_interna">
          <td width="83" height="30" align="center"><strong>9807689<span class="texto_azul_peque"></span></strong></td>
          <td width="105" align="center"><strong>12/11/2012<span class="texto_azul_peque"></span></strong></td>
          <td width="198" align="left">&nbsp;&nbsp;&nbsp;Julian Rátiva</td>
          <td width="224" align="left">&nbsp;&nbsp;Presidente asamblea</td>
          <td width="225" align="left">&nbsp;&nbsp;fotocopias</td>
          <td width="108" align="center" bgcolor="#27669B" class="texto_blanco"><strong>254.000</strong></td>
        </tr>
        <tr class="tr_tabla_interna">
          <td height="30" align="center"><strong>9807690<span class="texto_azul_peque"></span></strong></td>
          <td align="center"><strong>12/11/2012<span class="texto_azul_peque"></span></strong></td>
          <td align="left">&nbsp;&nbsp;&nbsp;Mauricio Duque</td>
          <td align="left">&nbsp;&nbsp;Presidente asamblea</td>
          <td align="left">&nbsp;&nbsp;tinto vigilantes</td>
          <td align="center" bgcolor="#27669B" class="texto_blanco"><strong>100.000</strong></td>
        </tr>
        <tr class="tr_tabla_interna">
          <td height="30" align="center"><strong>9807691<span class="texto_azul_peque"></span></strong></td>
          <td align="center"><strong>12/11/2012<span class="texto_azul_peque"></span></strong></td>
          <td align="left">&nbsp;&nbsp;&nbsp;Coopetrán</td>
          <td align="left">&nbsp;&nbsp;Presidente asamblea</td>
          <td align="left">&nbsp;&nbsp;buses</td>
          <td align="center" bgcolor="#27669B" class="texto_blanco"><strong>45.000</strong></td>
        </tr>
        <tr>
          <td bgcolor="#04447D"></td>
           <td align="right" bgcolor="#04447D" colspan="4" height="40"  width="710" style="color:#fff">
        <strong>TOTAL&nbsp;&nbsp;</strong></td>
      <td align="center" bgcolor="#04447D" class="texto_blanco">
        <strong>500.000</strong></td>
        </tr>
      </table>
      <table align="center" border="0" cellpadding="0" cellspacing="1" width="910">
  <tbody>
    <tr class="texto_blanco" style="font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: rgb(255, 255, 255);">
     
    </tr>
  </tbody>
</table>
    </td>
    </tr>
  </table>
</div>
<div class="titulos" id="subtitulo4">&gt; Caja menor</div>
