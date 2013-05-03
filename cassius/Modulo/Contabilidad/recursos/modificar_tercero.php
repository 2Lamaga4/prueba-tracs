<?php session_start();

include "../php/dao/daoConnection.php";
include "../php/dao/TercerosDAO.php";
include "../php/entities/terceros.php";
include "../php/dao/identifiDao.php";
include "../php/entities/enticedula.php";

$TercerosDAO = new TercerosDAO();
$terceros = new terceros();
$tercero = $TercerosDAO->get($_REQUEST['id']);

$cedula = new  TipoIDentifiDao();
$obj = $cedula ->tipoDeDocumento();

include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<link href="../css/stylesgregar_tercero.css" rel="stylesheet"/>
<script src="../Scripts/codigo.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
<script src="../Scripts/img.js"></script>
<script>
function validar_tercero(){
  llamarasincrono('validar_tercero2.php?num=<?php echo $_REQUEST["id2"];?>', 'nom_tercero');
}
function validar_existe(){
  var numero = document.getElementById('numero').value;
  if(<?php echo $tercero->getNodocumento(); ?> == numero){
    llamarasincrono('validar_tercero2.php?num=<?php echo $tercero->getNodocumento(); ?>', 'nom_tercero');
    //llamarasincrono('validar_tercero2.php?numero='+numero, 'nom_tercero');
  }else{
    llamarasincrono('validar_tercero2.php?num=<?php echo $tercero->getNodocumento(); ?>', 'nom_tercero');
   // llamarasincrono('validar_tercero2.php?numero='+numero, 'nom_tercero');
  }
}
</script>
</head>
<body class="interna2" OnContextMenu="return false" onload="validar_tercero();">
<?php
    
    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/modificar_terceros.php');//se llama el cuerpo de modificar_terceros
    }
?>
</body>
</html>
