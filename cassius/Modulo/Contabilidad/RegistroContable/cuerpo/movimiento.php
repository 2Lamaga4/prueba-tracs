<?php $GLOBALS['nota']="";?>
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
          <td width="82" class="texto_azul" align="right"><strong>Fecha:&nbsp;&nbsp;</strong></td>
          <td width="48" height="30">Desde</td>
          <td width="89">
            <input name="fecha1" type="date"  class="textarea_redondo2" id="exampleI" style="width:105px;"/></td>
          <td width="50">Hasta</td>
          <td width="126">
             <input name="fecha1" type="date"  class="textarea_redondo2" id="exampleII" style="width:105px;"/></td></td>
          <td width="90"><span class="texto_azul"><strong>Movimiento:</strong></span></td>
          <td width="84"><input name="movi" type="text" class="textarea_redondo2" id="movi" style="width:50px;"  /></td>
          <td width="140"><input name="buscar" type="submit" class="boton_buscar" id="buscar" value="Buscar" onclick="location.href='#'"/></td>
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

                      if(strcmp(substr($item->getfecha(),8,2)."/".substr($item->getfecha(),5,2)."/".substr($item->getfecha(),0,4),$GLOBALS['nota'])!=0)
                      {
                          echo substr($item->getfecha(),8,2)."/".substr($item->getfecha(),5,2)."/".substr($item->getfecha(),0,4);
                      }else{

                      }

                      $GLOBALS['nota'] = substr($item->getfecha(),8,2)."/".substr($item->getfecha(),5,2)."/".substr($item->getfecha(),0,4);
              ?>

            <tr>
              <td><span class="texto_azul2"><strong>&nbsp;Movimiento <?php if($item->getNumero() < 10) { ?>0<?php } ?><?php echo $item->getNumero(); ?></strong></span><strong> - </strong>
             
                        <?php $num = $item->getId();
                          if(!$MovimientosDAO->suma($item->getId())){
                              echo "<pre> !Error diferencia entre valores </pre>";
                           }  
                        ?>
            </td>
             
                 
                
            </tr>
            <tr>
              <td><img src="../images/line2.gif" width="760" height="1" /></td>
            </tr>
            <tr>

              <td><strong>&nbsp;Nombre de tercero:</strong> 
             <?php echo $tercero->getNombretercero(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nit:</strong> 
                <?php echo $tercero->getNodocumento(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Concepto:</strong> 
                <?php echo $item->getConcepto(); ?></td>
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