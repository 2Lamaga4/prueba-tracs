<div id="salir2">
<input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla">
<form id="form1" name="form1" method="post" action="../php/action/actualizarFuncionario.php" onsubmit="return validar();">

  <section class="tr_tabla">
   <ul class="pagination1"> 
    <?php
       foreach($FUNC as $item){ 
    ?>
          <li class="tr_tabla_interna"> 
                <article id="N0" class="td_tabla_interna">
                  <div id="fun"><?php echo  $item->getCargoFun();?></div>
                </article>
                <article class="td_tabla_interna" id="NN">
                  <div id="funCe">
                   <div id="cc"><?php echo  $item->getTipodocumento();?></div>
                   <div id="tid"><?php echo $item->getNodocumento(); ?></div>
                  </div>
                  <div id="funNA">
                  <?php echo  $item->getNombres()?>
                  <?php echo$item->getApellidos();?>
                  </div>
                </article>
                <input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="location.href='ParametrizacionFuncionario.php?id=<?php echo $item->getNodocumento(); ?>'"/>
                <input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="Eliminar" onclick="borrar(<?php echo $item->getNodocumento(); ?>)" />
          </li>
  <?php } ?>  
   </ul>
 <div id="linea"><img src="../images/line.gif" width="945" height="1" /></div>

  </form>
</div>

<div class="titulos" id="subtitulo1">&gt; Funcionarios</div>
