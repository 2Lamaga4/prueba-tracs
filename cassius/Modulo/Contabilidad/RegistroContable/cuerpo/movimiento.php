<?php
      $GLOBALS['nota']="";
      $GLOBALS['contador'] = $MovimientosDAO->contar()+1;

      $GLOBALS['res'] = "";
      $GLOBALS['nummo'] = "";
?>  
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../index.php'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla2">
  <table width="950" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr> 
      <td height="50" bgcolor="#CCCCCC" class="tr_tabla_interna2">
      <form method="post" name="form1" id="form1" action=""> 
      <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <form action="movimientos/temp.php" method="get">
          <td width="82" class="texto_azul" align="right"><strong>Fecha:&nbsp;&nbsp;</strong></td>
          <td width="48" height="30">Desde</td>
          <td width="89">
            <input name="fecha1" type="date"  class="textarea_redondo2" id="exampleI" style="width:105px;"/></td>
          <td width="50">Hasta</td>
          <td width="126">
             <input name="fecha2" type="date"  class="textarea_redondo2" id="exampleII" style="width:105px;"/></td></td>
          <td width="90"><span class="texto_azul"><strong>Movimiento:</strong></span></td>
          <td width="84"><input name="movi" type="text" class="textarea_redondo2" id="movi" style="width:50px;"  /></td>
          <td width="140"><input name="buscar" type="submit" class="boton_buscar" id="buscar" value="Buscar" onclick="location.href='#'"/>
          </form>
          </td>
          </tr> 
      </table>
      </form> 
     </td>
    </tr> 
    <tr>
      <td height="45" bgcolor="#E4EEF9" align="center">
        <input name="agregar_residente2" 
        style="width:220px" type="button"
         class="boton_agregar" id="agregar_residente2"
          value="Agregar Comprobante de diario" 
          onclick="MM_openBrWindow('agregar_comprobante_diario.php','AgregarComprobante','scrollbars=yes,width=970px,height=540px')"/>
        </td>
    </tr>
    <tr>
      <td height="20"><img src="../images/line2.gif" width="950" height="1" /></td>
    </tr>
    <?php if(count($movimiento) > 0){?>
    <tr>
      <td height="30" align="center"><table width="950" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="40" align="left" valign="top" class="texto_azul"><a href="rc_movimientos_excel.php?fecha1=<?php echo $fecha1; ?>&fecha2=<?php echo $fecha2; ?>&movi=<?php echo $movi; ?>"><input name="buscar3" type="button" class="boton_excel" id="buscar3" value="Descargar Excel"/></a></td>
          <td height="30" align="left" valign="middle" class="texto_azul">&nbsp;</td>
          </tr>
       <?php 
       foreach($movimiento as $item){ 
            $tercero = $TercerosDAO->get($item->getTercero());
            $doc = $DocumentoDAO->get($item->getTipodoc());            
            $mvCuentas = $MovimientosDAO->getList_cuentas($item->getId());
       ?>
        <tr>  
          <td width="780" height="60" align="left" valign="middle" bgcolor="#E6CCCD" class="texto_azul"><table width="770" border="0" cellpadding="0" cellspacing="3">
             <?php  
              $GLOBALS['nummo']=$item->getId(); 
       
                if(strcmp(substr($item->getfecha(),8,2)."/".substr($item->getfecha(),5,2)."/".substr($item->getfecha(),0,4),$GLOBALS['nota'])!=0)
                      {
                      echo '<article class="MOlefe"> - '.substr($item->getfecha(),8,2)."/".substr($item->getfecha(),5,2)."/".substr($item->getfecha(),0,4).'</article>';

                          $GLOBALS['contador']--;
                          $GLOBALS['res'] = 0;
                     
                  }
                   else{
                        $GLOBALS['res'] = 1;
                   }
                      $GLOBALS['nota'] = substr($item->getfecha(),8,2)."/".substr($item->getfecha(),5,2)."/".substr($item->getfecha(),0,4);
              ?>
              <?php $MovimientosDAO->confir($GLOBALS['contador'],$item->getNumero());
                  $MovimientosDAO->confirdato($item->getfecha(),$GLOBALS['contador']);
              ?>
            <tr>
              <td><span class="texto_azul2 MOle">
               <?php
                    if($GLOBALS['res']!=1){
                  ?>
                     <strong>-Movimiento <?php if($item->getNumero() < 10) { ?>0<?php } ?>
                     <?php  
                    if(isset($_REQUEST['movi'])){
                      if($_REQUEST['movi'] != ""){
                           //echo $item->$_REQUEST['movi']; 
                           echo $_REQUEST['movi'];                         

                         }
                         elseif($_REQUEST['fecha1'] && $_REQUEST['fecha2']){ 
                            echo $MovimientosDAO->numerofecha($item->getfecha());
                          
                       }
                       }
                         else{ echo $GLOBALS['contador'];
                       }
                       
                      ?></strong></span><strong> - </strong>

                  <?php
                    }
                   else{
                    ?>
                     <strong>-</strong></span><strong> - </strong>
                  <?php 
                  }                 
               ?>                                  
                        <?php $num = $item->getId();
                          if($doc->getSigla()=="RCM"){

                          }else{

                  
                          if($MovimientosDAO->suma($item->getId())==1){
                              echo "
                              <section id='rojo'></section>
                              <article class='editE'> ¡Error diferencia entre valores! </article>
                              <input id='idmovi".$GLOBALS['nummo']."' type='hidden' value='".$GLOBALS['nummo']."'/>
                              <input   onclick='popUp(idmovi".$GLOBALS['nummo'].")' class='boton_modificar_int mofM' id='modificar_int17' name='modificar_int7' style='cursor: pointer; border: none; font-family: Arial, Helvetica, Verdana, sans-serif; color: rgb(255, 255, 255); background-image: url(../images/fondo_btn_modificar_int.jpg); height: 17px; width: 87px;' type='button' value='Modificar' />
                             ";                              
                           }  
                             if($MovimientosDAO->suma($item->getId())==2 ){
                              echo "
                              <section id='rojo'></section>
                              <article class='editE'> ¡Error balance vacio! </article>
                              <input id='idmovi".$GLOBALS['nummo']."' type='hidden' value='".$GLOBALS['nummo']."'/>
                              <input   onclick='popUp(idmovi".$GLOBALS['nummo'].")' class='boton_modificar_int mofM' id='modificar_int17' name='modificar_int7' style='cursor: pointer; border: none; font-family: Arial, Helvetica, Verdana, sans-serif; color: rgb(255, 255, 255); background-image: url(../images/fondo_btn_modificar_int.jpg); height: 17px; width: 87px;' type='button' value='Modificar' />
                             ";                              
                           }  
                             }
                        ?>
            </td>           
            </tr>
            <tr>
              <td><img src="../images/line2.gif" width="760" height="1" /></td>
              <td class="MOle"><img src="../images/line2.gif" width="760" height="1" /></td>
            </tr>
            <tr>

              <td style="height:15px;">
                <article class="MOle terceroMO">
                <strong>&nbsp;Nombre de tercero:</strong> 
             <?php echo $tercero->getNombretercero(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nit:</strong> 
                <?php echo $tercero->getNodocumento(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Concepto:</strong> 
                <?php echo $item->getConcepto(); ?>
                </article>
              </td>
            </tr>
          </table></td>
          <td width="164" align="left" valign="middle" bgcolor="#D9B0B3" class="texto_azul"> &nbsp;&nbsp;<span class="texto_azul_peque">Documento</span>: <?php echo $doc->getSigla(); ?> <?php echo $item->getNumdoc(); ?></td>
          </tr>
        <tr>
          <td height="35" colspan="2" valign="top"><table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
            <tr>
              <td height="20" class="td_resaltado_azul">Cuenta</td>
              <td width="595" class="td_resaltado_azul">Descripción</td>
              <td align="center" class="td_resaltado_azul"><div align="center">Débito</div></td>
              <td align="center" class="td_resaltado_azul"><div align="center">Crédito</div></td>
            </tr>             
            <?php 
            foreach($mvCuentas as $item2){ 
             $cuenta = $CuentaDAO->get($item2->getCodcuenta());                
            ?> 
                <tr class="tr_tabla_interna">
                  <td width="74" class="td_tabla_interna"><?php echo $cuenta->getCuenta(); ?></td>
                  <td class="td_tabla_interna"><?php echo $cuenta->getDenominacion(); ?></td>
                  <td width="108" align="center" class="td_tabla_interna">
                    <?php echo $item2->getDebito();?>
                  </td>
                  <td width="113" align="center" class="td_tabla_interna">
                    <?php echo $item2->getCredito();?>
                  </td>
                </tr>
          <?php } ?>   
          </table></td>
          </tr>
           <?php } ?>  
       
      </table></td>
    </tr>
   <?php }else{ ?>       
         <tr>        
          <td height="30" align="center" valign="middle" class="texto_azul"><strong>No hay registro</strong></td>
    </tr>     
         <?php } ?>  
  </table>
</div>
<div class="titulos" id="subtitulo3">&gt; Registro contable - Movimientos</div>