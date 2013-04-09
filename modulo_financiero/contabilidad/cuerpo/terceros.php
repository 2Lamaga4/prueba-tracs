<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../contabilidad_home.php'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad">
  <div id="utilidades">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
  
        <td width="97%" align="right"><input name="agregar" type="button" class="boton_agregar" id="agregar" value="Agregar" onclick="location.href='../agregar_tercero.php?OK=1'"/>
          &nbsp;</td>
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
                <input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='modificar_tercero.php?id='"/>
                <input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="Eliminar"  />
          </li>

  <?php } ?>  
   </ul>
      <div id="linea"><img src="../images/line.gif" width="945" height="1" /></div>
   </section>

</div>
	<div class="titulos" id="subtitulo">&gt; Parametrización Terceros</div>
  <style type="text/css">
n{
    color: rgb(0, 0, 51); 
    font-family: Verdana, Geneva, sans-serif; 
    font-size: 12px; text-align: center;
   
}
#linea{
  position: absolute;;
  padding: 0;
  left: 0;
  margin-left: -90px;
  margin-top: -30px;
}
#atras{
  position: relative;
}
.simplePagerNav {
  clear: both;
  position: relative;
  top:25px;
  padding: 0;
  left: 300px;
}

.simplePagerNav.red {
  outline:10px solid red;
}

.simplePagerNav.simplePagerNav li{
    color: rgb(255, 255, 255);
    cursor: pointer; 
    display:block;
    display: inline-block;
    font-family: georgia;
    font-size: 12px; font-family: Verdana, Geneva, sans-serif; 
    padding: 2px;
    padding-top: 3px;
    padding-bottom: 3px;
    width: 30px;
    z-index: 0;
}

.simplePagerNav li a{
    color: #333;
    text-decoration: none;
    position: relative;
    padding-left: 10px;
    padding-right: 10px;
}
.simplePagerNav li{
   background: url(../images/fondo_btn.jpg); 
   position: relative;
   top:-5px;
   margin-top: 0;
}

li.currentPage {
 background-image: url(../images/fondo_btnver.jpg); 
  color: rgb(255, 255, 255);  
  font-family: Verdana, Geneva, sans-serif; 
  font-size: 12px;
  z-index: 999; 
}

.simplePagerNav li.currentPage a {
  color: #fff;  
}

table.pageme {
    border-collapse: collapse;
    border: 1px solid #ccc;
}  

table.pageme td {
    border-collapse: collapse;
    border: 1px solid #ccc;
} 
  </style>