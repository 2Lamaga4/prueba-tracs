<?php
 include_once ('../info.php');//se llama la informacion de la pagina
?>
<link href="Contabilidad/config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<script src="script/Scriptimg.js"></script>
<script src="Contabilidad/Scripts/globos_ayuda.js" type="text/javascript"></script>
<script src="Contabilidad/Scripts/bloqueo_clic_derecho.js" type="text/javascript"></script>
<script src="Contabilidad/Scripts/transicion.js" type="text/javascript"></script>
</head>

<body class="interna2" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='menu_home.php'"/>
</div>
<div id="logo_small3"><img src="Contabilidad/images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="fondo_home_configuracion"></div>
<div id="contenido_tabla">
  <table width="850" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td height="95" colspan="2" bgcolor="#E2E2E2"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="142" class="texto_azul" ><strong>Logo de la entidad:</strong></td>
          <td width="102" class="texto_azul" ><img src="Contabilidad/images/logo_conjuunto.png" width="92" height="86" /></td>
          <td width="256"><input name="fileField" type="file" id="fileField" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="400" height="40" bgcolor="#999999"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="159" class="texto_azul" ><strong>Nombre de la entidad:</strong></td>
          <td width="231"><dd>
            <input name="nombres" type="text" class="textarea_redondo2" id="nombres" style="width:200px;"/>
            <span class="hint2">Ingrese primero el bloque y luego la vivienda, ejemplo: 2 201<span class="hint-pointer2"></span></span></dd></td>
        </tr>
      </table></td>
      <td width="400" bgcolor="#CCCCCC"><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="86" class="texto_azul" ><strong>NIT:</strong></td>
          <td width="254"><dd>
            <input name="apellidos3" type="text" class="textarea_redondo2" id="apellidos3" style="width:200px;"/>
            <span class="hint2">Ingrese primero el bloque y luego la vivienda, ejemplo: 2 201<span class="hint-pointer2"></span></span></dd></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="40" bgcolor="#999999"><table width="390" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="159" class="texto_azul" ><strong>Dirección:</strong></td>
          <td width="231"><dd>
            <input name="nombres2" type="text" class="textarea_redondo2" id="nombres2" style="width:200px;"/>
            <span class="hint2">Ingrese primero el bloque y luego la vivienda, ejemplo: 2 201<span class="hint-pointer2"></span></span></dd></td>
        </tr>
      </table></td>
      <td bgcolor="#CCCCCC"><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="86" class="texto_azul" ><strong>Teléfono:</strong></td>
          <td width="254"><dd>
            <input name="apellidos4" type="text" class="textarea_redondo2" id="apellidos4" style="width:200px;"/>
            <span class="hint2">Ingrese primero el bloque y luego la vivienda, ejemplo: 2 201<span class="hint-pointer2"></span></span></dd></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="20" colspan="2"><img src="Contabilidad/images/line2.gif" width="850" height="1" /></td>
    </tr>
    <tr>
      <td height="40" colspan="2"><table width="850" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="30" align="center" valign="middle" bgcolor="#E6CCCD" class="texto_azul"><strong>CONCEJO</strong></td>
          <td align="center">&nbsp;</td>
          <td align="center" bgcolor="#C1C4D7" class="texto_azul"><strong>USUARIOS PLATAFORMA</strong></td>
        </tr>
        <tr>
          <td height="50" align="center" valign="middle" bgcolor="#E6CCCD"><table width="230" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="51"><img src="Contabilidad/images/icon_propietario.png" width="18" height="32" border="0" />&nbsp;<img src="Contabilidad/images/icon_propietario.png" width="18" height="32" border="0" /></td>
              <td width="179"><input name="agregar_propietario" type="button" class="boton_agregar" style="width:160px" id="agregar_propietario" value="Agregar Concejero" onclick="MM_openBrWindow('agregar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
            </tr>
          </table></td>
          <td align="center">&nbsp;</td>
          <td align="center" bgcolor="#C1C4D7"><table width="230" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="48"><img src="Contabilidad/images/icon_arrendatario.png" width="18" height="32" />&nbsp;<img src="Contabilidad/images/icon_arrendatario.png" width="18" height="32" /></td>
              <td width="182"><input name="agregar_residente" style="width:160px" type="button" class="boton_agregar" id="agregar_residente" value="Agregar Usuario" onclick="MM_openBrWindow('agregar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=540px')"/></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td width="422" height="35" valign="top"><table width="420" border="0" align="center" cellpadding="0" cellspacing="2">
            <tr>
              <td width="414" class="td_resaltado"><strong>Miguel antonio porras huertas</strong></td>
              <td width="87"><input name="modificar_int" type="button" class="boton_modificar_int" id="modificar_int" value="Modificar" onclick="MM_openBrWindow('modificar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td width="87"><input name="eliminar_int" type="button" class="boton_eliminar_int" id="eliminar_int" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Juan camilo castro maldonado</td>
              <td><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int2" value="Modificar" onclick="MM_openBrWindow('modificar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int2" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int10" value="Modificar" onclick="MM_openBrWindow('modificar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int10" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Juan camilo castro maldonado</td>
              <td><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int9" value="Modificar" onclick="MM_openBrWindow('modificar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int9" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Juan camilo castro maldonado</td>
              <td><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int14" value="Modificar" onclick="MM_openBrWindow('modificar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int14" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Juan camilo castro maldonado</td>
              <td><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int13" value="Modificar" onclick="MM_openBrWindow('modificar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int13" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Juan camilo castro maldonado</td>
              <td><input name="modificar_int2" type="button" class="boton_modificar_int" id="modificar_int12" value="Modificar" onclick="MM_openBrWindow('modificar_propietario.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int2" type="button" class="boton_eliminar_int" id="eliminar_int12" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
          </table></td>
          <td width="10" align="center"><img src="Contabilidad/images/linea_vertical.gif" width="1" height="150px" /></td>
          <td width="402" align="center" valign="top"><table width="420" border="0" align="center" cellpadding="0" cellspacing="2">
            <tr class="tr_tabla_interna">
              <td width="414" class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td width="87"><input name="modificar_int3" type="button" class="boton_modificar_int" id="modificar_int3" value="Modificar" onclick="MM_openBrWindow('modificar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td width="87"><input name="eliminar_int3" type="button" class="boton_eliminar_int" id="eliminar_int3" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td><input name="modificar_int3" type="button" class="boton_modificar_int" id="modificar_int4" value="Modificar" onclick="MM_openBrWindow('modificar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int3" type="button" class="boton_eliminar_int" id="eliminar_int4" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td><input name="modificar_int3" type="button" class="boton_modificar_int" id="modificar_int5" value="Modificar" onclick="MM_openBrWindow('modificar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int3" type="button" class="boton_eliminar_int" id="eliminar_int5" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td><input name="modificar_int3" type="button" class="boton_modificar_int" id="modificar_int6" value="Modificar" onclick="MM_openBrWindow('modificar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int3" type="button" class="boton_eliminar_int" id="eliminar_int6" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td><input name="modificar_int3" type="button" class="boton_modificar_int" id="modificar_int7" value="Modificar" onclick="MM_openBrWindow('modificar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int3" type="button" class="boton_eliminar_int" id="eliminar_int7" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td><input name="modificar_int3" type="button" class="boton_modificar_int" id="modificar_int8" value="Modificar" onclick="MM_openBrWindow('modificar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int3" type="button" class="boton_eliminar_int" id="eliminar_int8" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
            <tr class="tr_tabla_interna">
              <td class="td_tabla_interna">Miguel antonio porras huertas</td>
              <td><input name="modificar_int3" type="button" class="boton_modificar_int" id="modificar_int11" value="Modificar" onclick="MM_openBrWindow('modificar_residente.html','AgregarPropietario','scrollbars=yes,width=460px,height=530px')"/></td>
              <td><input name="eliminar_int3" type="button" class="boton_eliminar_int" id="eliminar_int11" value="Eliminar" onclick="location.href='agregar_vivienda.html'"/></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="45" colspan="3" valign="middle" align="center"><input style="width:90px;"name="Entrar" type="button" class="boton_redondo" id="Entrar" value="::: Aceptar :::" onclick="location.href='menu_home.html'"/></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
