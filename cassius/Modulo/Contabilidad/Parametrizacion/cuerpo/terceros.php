<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="97%" align="right">         
          <input name="agregar" type="button" class="boton_agregar" id="agregar" value="Agregar" onclick="location.href='../recursos/agregar_tercero.php?OK=1'"/>
          &nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>

    </table>
 <article id="menuactides"> 
<table  cellspacing="0" cellpadding="0">
        <tr>
          <td width="481" height="70" valign="top">
            <a href="activarterceros.php">
            <img src="../images/btn_inactivos_down.jpg" name="btn_inactivo" width="481" height="46" border="0" id="btn_inactivo" onmouseover="MM_swapImage('btn_inactivo','','../images/btn_inactivos.jpg',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          <td width="419" valign="top">
            <img src="../images/btn_activos_roll.jpg" width="477" height="46" /></td>          
        </tr>
 </table>
 </article>  
  </div>
</div>
<div id="contenido_tablat">
 <div id="tic">
          <strong>Clientes</strong>
</div>
  <section id="paging_container7" class="tr_tabla">
   <ul class="content">
     <?php
       foreach($Terceros as $item){ 
    ?>
          <li class="tr_tabla_interna"> 
                <article id="N0" class="td_tabla_interna"><?php echo $item->getId(); ?><span><?php echo $item->getNodocumento(); ?></span></article>
                <article class="td_tabla_interna" id="NN"><?php echo $item->getnombretercero(); ?></article>
                <input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='../recursos/modificar_tercero.php?id2=<?php echo $item->getNodocumento();?>&id=<?php echo $item->getTipodocumento();?>'"/>
                <input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="inhabilitar" onclick="borrar(<?php echo $item->getNodocumento(); ?>)" />
          </li>

  <?php } ?>     

   </ul>
      <div id="linea"><img src="../images/line.gif" width="472" height="1" /></div>
       <div class="page_navigation"></div>
   </section>   
</div>


<div id="contenido_tablat2">
 <div id="tic">
          <strong>Proovedores</strong>
</div>
<section id="paging_container8" class="tr_tabla">       
        <ul class="content">
            <?php
       foreach($TercerosC as $item){ 
    ?>
          <li class="tr_tabla_interna"> 
                <article id="N0" class="td_tabla_interna"><?php echo $item->getId(); ?><span><?php echo $item->getNodocumento(); ?></span></article>
                <article class="td_tabla_interna" id="NN"><?php echo $item->getnombretercero(); ?></article>
                <input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='../recursos/modificar_tercero.php?id2=<?php echo $item->getNodocumento();?>&id=<?php echo $item->getTipodocumento();?>'"/>
                <input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="inhabilitar" onclick="borrar(<?php echo $item->getNodocumento(); ?>)" />
          </li>

  <?php } ?>     
          
        </ul> 
        
   <div id="linea"><img src="../images/line.gif" width="472" height="1" /></div>
       <div class="page_navigation"></div>
   </section>   
</div>




	<div class="titulos" id="subtitulo">&gt; Parametrización Terceros</div>