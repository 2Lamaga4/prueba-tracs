<?php 
include "cuerpo/rc_movimientos_excel.php";
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<link href="../css/titulo.css" rel="stylesheet"/>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>   
</head>
<body class="interna2" OnContextMenu="return false">
<div id="salir2">
  <input name="exit" type="button" class="boton_salir" id="exit" value="Salir" onclick="location.href='../index.php'"/>
</div>
<div id="logo_small3"><img src="../images/logo_small2.png" name="logo_small" width="317" height="62" id="logo_small" /></div>
<div id="modulos"><img src="../images/modulo_administrativo.png" name="mod_registro" width="300" height="55" id="mod_registro" /></div>
<div id="fondo_home_contabilidad"></div>
<div id="contenido_tabla2">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="seccion">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center" class="texto_azul2">El reporte se ha generado satisfactoriamente</div></td>
        </tr>
        <tr>
          <td height="37"><div align="center">
            <input type="button" name="button" id="button" value="::: Regresar :::" onclick="location.href='rc_movimientos.php'" />
          </div></td>
        </tr>
      </table>
</div>
<div class="titulos" id="subtitulo3">&gt; Registro contable - Movimientos</div>
</body>
</html>

<?php
echo "<script> 
location.href = 'exel.php'; 
</script>";
?>
