<?php
      $GLOBALS['nota']="";
      $GLOBALS['contador'] = $MovimientosDAO->contar()+1;
      $GLOBALS['res'] = "";
      $GLOBALS['nummo'] = "";
?>  
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>

<div id="utilidades">
  <table width="320" border="0" align="right" cellpadding="0" cellspacing="0">
    <tr>
      <td width="52%" align="center"><input name="buscar3" type="button" class="boton_excel" id="buscar3" value="     Descargar Excel"/></td>
      <td width="44%"><input name="buscar2" type="button" class="boton_pdf" id="buscar2" value="     Descargar PDF"/></td>
      <td width="4%">&nbsp;</td>
    </tr>
  </table>
</div>
<div id="contenido_tabla2">
  <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align=""><table width="900" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr class="texto_blanco" >
          <td height="50" align="center" valign="middle" bgcolor="#6CA3D2"><table width="700" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="103">Fecha: <strong>Desde</strong></td>
              <td width="223"><span class="texto_azul">
                 <input type="date" name="categoria5" class="textarea_redondo2" id="categoria5" style="width:110px; height:27px;"/>
              </span></td>
              <td width="53"><strong>Hasta</strong><span class="texto_azul"> </span></td>
              <td width="197"><span class="texto_azul">
                 <input type="date" name="categoria2" class="textarea_redondo2" id="categoria4" style="width:110px; height:27px;"/>
              </span></td>
              <td width="124"><input style="width:90px;"name="Entrar" type="button" class="boton_redondo" id="Entrar" value="::: Aceptar :::"/></td>
            </tr>
          </table></td>
          </tr>
        <tr >
          <td height="17" align="center">
<!-- ------------------------------ -->

<section id="contenedor">
    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
    <label for="tab-1" class="tab-label-1">1</label> 
<?php
for ($i=2; $i <= 12 ; $i++) { 
echo'
<input id="tab-'.$i.'" type="radio" name="radio-set" class="tab-selector-'.$i.'" />
    <label for="tab-'.$i.'" class="tab-label-'.$i.'">'.$i.'</label>';
}
?>

<article class="content">

<?php for ($i=1; $i <= 12 ; $i++) { 
      echo '<div class="content-'.$i.'">';
$GLOBALS['suma'] = 0;
?>

<table width="910" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr class="texto_blanco" >
              <td height="30" align="center" bgcolor="#04447D"><strong>Número</strong></td>
              <td align="center" bgcolor="#04447D"><strong>Fecha</strong></td>
              <td align="center" bgcolor="#04447D"><strong>Pagado a</strong></td>
              <td align="center" bgcolor="#04447D"><strong>Aprobado por</strong></td>
              <td align="center" bgcolor="#04447D" class="texto_blanco"><strong>Valor</strong>
              </td>
            </tr>         
<!-- -->

<?php if(count($movimiento) > 0){       
         foreach($movimiento as $item){ 
            $tercero = $TercerosDAO->get($item->getTercero());
            $doc = $DocumentoDAO->get($item->getTipodoc());            
            $mvCuentas = $MovimientosDAO->getList_cuentas($item->getId());
            if( $doc->getSigla() == 'RCM' ){ 

               if(substr($item->getfecha(),5,2)==$i){

                          $GLOBALS['nummo']=$item->getId();  
                          $GLOBALS['contador']--;
                          $GLOBALS['res'] = 0;  

                 // echo 'movimiento'.$GLOBALS['contador']; 
                 // echo 'Nit: '.$tercero->getNodocumento(); 
                //echo 'Concepto: '.$item->getConcepto();
                 // echo 'Documento: '.$doc->getSigla();      

?> 
              <tr class="tr_tabla_interna" id="tablaF">    
                <td width="120" height="30" align="center"><strong>
                      <?php echo $item->getNumdoc(); ?>
                    <span class="texto_azul_peque"></span></strong></td>
                <td width="132" align="center"><strong>
                  <?php echo ''.substr($item->getfecha(),8,2)."/".substr($item->getfecha(),5,2)."/".substr($item->getfecha(),0,4).' ';?>
                  <span class="texto_azul_peque"></span></strong></td>
                <td width="275" align="left">&nbsp;&nbsp;&nbsp;
                   <?php echo ''.$tercero->getNombretercero(); ?>
                </td>
                <td width="275" align="left">&nbsp;&nbsp;
                  Presidente asamblea
              </td>
<?php 
            foreach($mvCuentas as $item2){ 
             $cuenta = $CuentaDAO->get($item2->getCodcuenta());           
                 //echo 'cuenta:'.$cuenta->getCuenta(); 
                 //echo 'Denominacion:'.$cuenta->getDenominacion();
                 //echo 'Debito:'.$item2->getDebito();
 if($cuenta->getCuenta()<>'11051001'){         
?> 
               <td width="102" align="center" bgcolor="#27669B" class="texto_blanco" id="valor">
            <strong>        
              <?php
              $GLOBALS['suma'] = $item2->getCredito()+$GLOBALS['suma'];

               echo ''.$item2->getCredito();?>
            </strong></td>
            </tr>                        
  <?php     }/*if*/

          }/*foreach*/
        }/*if*/
            }/*if*/
          }/*foreech*/
       $esta[$i]=$GLOBALS['suma'];
       /*
       $array = array();
       $array*/

        }/*if*/  
else{ ?>    
         <tr>        
          <td height="30" align="center" valign="middle" class="texto_azul"><strong>No hay registro</strong></td>
        </tr>     
<?php } ?>     

<!-- -->
            <tr class="texto_blanco">
              <td height="40" colspan="4" align="right" bgcolor="#04447D"><strong>TOTAL&nbsp;&nbsp;</strong></td>
              <td align="center" bgcolor="#04447D" class="texto_blanco"><strong><?php echo $GLOBALS['suma']?></strong></td>
            </tr>
            </table></div>
<?php } ?>
<!-- ------------------------------ -->

      </td>
      </tr>
      </table></td>
       </tr>
    <tr>
      <td height="20" align="center" id="line2"><img src="../images/line.gif" width="945" height="1" /></td>
    </tr>

    <tr>
      <td height="20" id="esta" align="center">
        <?php 

       include('estadisticas/estadisticas.php');
        ?>
      </td>
    </tr>
    <tr>
      <td height="20" align="center" id="line1" ><img src="../images/line.gif" width="945" height="1" /></td>
    </tr>
    <tr>
      <td align="rigth">
      </td>
    </tr>
  </table>
</div>
<div class="titulos" id="subtitulo4">&gt; Movimiento Caja menor</div>

<style type="text/css">
  
  s{

  }
</style>