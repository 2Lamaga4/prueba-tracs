<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='index.php'"/>
</div>
<div id="logo_small3"><img src="images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97%" align="right"><input name="agregar" type="button" class="boton_agregar" id="agregar" value="Agregar" onclick="location.href='agregar_documento.php?d=1'"/>
          &nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
    </table>
  </div>
</div>
<div id="contenido_tabla">
  <table width="720" border="0" align="center" cellpadding="0" cellspacing="2">
     <?php foreach($documento as $item){ ?>
        <tr class="tr_tabla_interna">
          <td width="74" class="td_tabla_interna"><?php echo $item->getSigla(); ?></td>
          <td width="441" class="td_tabla_interna"><?php echo $item->getNombredoc(); ?></td>
          <td width="87"><input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_documento.php?id=<?php echo $item->getId(); ?>'"/></td>
          <td width="88"><input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="Eliminar" onclick="borrar(<?php echo $item->getId(); ?>)" /></td>
        </tr>
   <?php } ?>
  </table>
</div>
<div class="titulos" id="subtitulo">&gt; Parametrización Documentos</div>