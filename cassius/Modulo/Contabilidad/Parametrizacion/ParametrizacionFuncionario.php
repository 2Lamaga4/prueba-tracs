<?php
 include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" type="text/css" />
<link href="../css/stylesgregar_tercero.css" rel="stylesheet" type="text/css"/>
<script src="../Scripts/img.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
<script src="../script/funcionarios.js" ></script>
<script src="../Scripts/ParametrizacionFuncionario.js"></script>
</head>
<body class="interna2" OnContextMenu="return false" <?php if(isset($_GET['OK']) == 2){?>onload="OK2()"<?php } ?>>
<?php

    include "../php/dao/daoConnection.php";
    include "../php/entities/funcionarios.php";
    include "../php/dao/FuncionariosDAO.php";

    $FuncionariosDAO = new FuncionariosDAO();
    $funcionarios = new funcionarios();
     $cargoF=$_GET['cargo'];
    $funcionario = $FuncionariosDAO->get($cargoF);
    $FUNC=$FuncionariosDAO->getCargoFun();
 
    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/ParametrizacionFuncionario.php');//se llama el cuerpo de ParametrizacionFuncionario
    }
?>
</body>
</html>
