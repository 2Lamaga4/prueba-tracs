<?php
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" />
<link href="../css/stylecuenta.css" rel="stylesheet" />
<script src="../Scripts/img.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
</head>
<body>
    <script type="text/javascript">
    function cerrarVentana(){ 
    alert('Nueva Cuenta creada con exito.');
     window.opener.location.href = window.opener.location.href; 

  if (window.opener.progressWindow) 
        
 { 
    window.opener.progressWindow.close()
  } 
  window.close(); 
}
</script>
<?php

    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/agregarcargo.php');//se llama el cuerpo de modificar
    }
?>
</body>
</html>