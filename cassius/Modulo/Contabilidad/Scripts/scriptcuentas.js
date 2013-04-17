/*scrtip de parametrizacion_cuenta.php(cuentas.php)*/
/**
 * [MM_preloadImages ->carga de imagen]
 */
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
/**
 * [MM_swapImgRestore  ->restaurar imagen{evita la perdida de la imagen}]
 */
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
/**
 * [MM_findObj ->convierte en objetos las imagenes]
 * @param {[type=var]} n []
 * @param {[type=var]} d []
 */
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
/**
 * [MM_swapImage ->protocolo de cada imagen]
 */
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
/**
 * [MM_swapImage ->escala de imagen]
 */
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
/**
 * [MM_openBrWindow ->apertura de ventana]
 * @param {[var]} theURL   [url]
 * @param {[var]} winName  [nombre]
 * @param {[var]} features [posicion]
 */
function MM_openBrWindow(theURL,winName,features) { //v2.0
  ventana=window.open(theURL,winName,features);
  alto=screen.height;
  ancho=screen.width;
  yposi=(alto-550)/2;
  xposi=(ancho-560)/2;
  ventana.moveTo(xposi,yposi);
}
/**
 * [borrar ->borrar cuenta]
 * @param  {[var]} id [ide de cuenta]
 * @return {[ulr]}    [get]
 */
function borrar(id){
  if (confirm('¿Estas seguro que desea borrar esta cuenta?')){ 
      location.href = "../php/action/deleteCuenta.php?id="+id;
    } 
}
/**
 * [OK ->funcion de confirmacion]
 */
function OK(){
  alert('Cuenta borrada con exito.');
  }