<article class="tree">
  <?php
   foreach($cuentas as $item){
  $cuentasN2 = $CuentaDAO->Lista_Nivel($item->getCuenta(),2);
  ?>
  <div id="N1">    
    <section class="td_nivel1">
      <label for="selectEventTree_0"><strong><?php echo $item->getCuenta()." ".$item->getDenominacion(); ?></strong></label> 
    </section>
      <input type="checkbox" id="selectEventTree_0">
      <article id="N2">
        <?php foreach($cuentasN2 as $item2){ 
          $cuentasN3 = $CuentaDAO->Lista_Nivel($item2->getCuenta(),3);
        ?> 
        <div>
          <section class="td_nivel2">
            <label for="selectEventTree_1"><strong><?php echo $item2->getCuenta()." ".$item2->getDenominacion(); ?></strong></label>
            <input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('../modificar_cuenta.php?id=<?php echo $item2->getId(); ?>&nm=1','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/>
            <input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item2->getId(); ?>)"/>
          </section>
            <?php 
             if ($cuentasN3){?>
              <input type="checkbox" id="selectEventTree_1">
            <?php
             }else{?>
              <div id="t3"><input type="checkbox"></div>
            <?php }?>
            <article id="N3">
            <?php foreach($cuentasN3 as $item3){ 
              $cuentasN4 = $CuentaDAO->Lista_Nivel($item3->getCuenta(),4);
            ?>
            <div  class="item">
              <section class="td_nivel3">                   
                <label for="selectEventTree_2"><strong><?php echo $item3->getCuenta()."</strong>&nbsp;&nbsp;".$item3->getDenominacion(); ?></label>
                <input name="modificar_int2" type="button" class="boton_modificar_int mo3" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('../modificar_cuenta.php?id=<?php echo $item3->getId(); ?>&nm=2','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/>
                <input name="eliminar_int2" type="button" class="boton_eliminar_int eli3" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item3->getId(); ?>)"/>
              </section>
              <?php
                if($cuentasN4){?>
                  <input type="checkbox" id="selectEventTree_2">
                <?php }else{ ?>                     
                  <div id="t3"><input type="checkbox"></div>
                <?php }?>                            
                <article id="N4">
                <?php foreach($cuentasN4 as $item4){ 
                  $cuentasN5 = $CuentaDAO->Lista_Nivel($item4->getCuenta(),5);
                ?>
                <div class="item">
                  <section class="td_nivel4">    
                    <label><strong><?php echo $item4->getCuenta()."</strong>&nbsp;&nbsp;".$item4->getDenominacion(); ?></label>
                    <input name="modificar_int2" type="button" class="boton_modificar_int mo4" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('../modificar_cuenta.php?id=<?php echo $item4->getId(); ?>&nm=3','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/>
                    <input name="eliminar_int2" type="button" class="boton_eliminar_int eli4" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item4->getId(); ?>)"/>
                  </section>
                    <?php
                    if($cuentasN5){?>
                    <input type="checkbox" id="selectEventTree_3">
                     <?php }else{ ?>                     
                     <div id="t3"><input type="checkbox"></div>
                     <?php }?>                     
                    <article id="N5">
                    <?php foreach($cuentasN5 as $item5){ 
                      $cuentasN6 = $CuentaDAO->Lista_Nivel($item5->getCuenta(),5);
                    ?>
                    <div class="item">
                      <section class="tr_tabla_interna">    
                        <label>
                          <?php echo $item5->getCuenta()."</label><u>".$item5->getDenominacion(); ?></u>
                        <input name="modificar_int2" type="button" class="boton_modificar_int mo5" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('../modificar_cuenta.php?id=<?php echo $item5->getId(); ?>&nm=null','ModificarCuenta','width=560px,height=550px,scrollbars=yes')"/></td>
                        <input name="eliminar_int2" type="button" class="boton_eliminar_int eli5" id="eliminar_int3" value="Eliminar" onclick="borrar(<?php echo $item5->getId(); ?>)"/></td>
                      </section>
                    </div>   
                    <?php } ?>                    
                    </article>
                </div>
                <?php } ?>
                </article>
            </div>
            <?php } ?>
            </article>
        </div>
        <?php } ?>
        </article> 
  </div>
  <?php } ?> 
</article> 

