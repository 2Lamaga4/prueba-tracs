<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='terceros.php'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
  
        <td width="97%" align="right"> &nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
    </table>
  </div>
</div>
<div id="contenido_tabla">
  <section class="tr_tabla">
   <ul class="pagination1">
    <?php
       foreach($Terceros as $item){ 
    ?>
          <li class="tr_tabla_interna"> 
                <article id="N0" class="td_tabla_interna"><?php echo $item->getId(); ?><span><?php echo $item->getNodocumento(); ?></span></article>
                <article class="td_tabla_interna" id="NN"><?php echo $item->getnombretercero(); ?></article>
                <input name="eliminar_int" type="button" class="boton_modificar_int" id="eliminar_int" value="Activar" onclick="activar(<?php echo $item->getNodocumento(); ?>)" />
          </li>

  <?php } ?>  
   </ul>
      <div id="linea"><img src="../images/line.gif" width="945" height="1" /></div>
   </section>

</div>
  <div class="titulos" id="subtitulo">&gt; Parametrización Terceros</div>