/*
#cassisus
@home.php

#contabilidad
@contabilidad/index.php

#Parametrizacion
@activarterceros.php
@agregar_cuenta.php
@Parametrizacion/index.php
@modificar_cuenta.php
@parametrizacion_documentos.php
@ParametrizacionFuncionario.php
@terceros.php

#ResgitroContable
@agregar_comprobante_diario.php
@rc_movimientos_excel.ph
 */

function bderecho(e) {
if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2))
return false;
else if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) {

return false;
}
return true;
}
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=bderecho;
document.onmousedown=bderecho;
