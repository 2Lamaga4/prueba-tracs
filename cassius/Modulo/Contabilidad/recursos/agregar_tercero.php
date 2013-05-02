<?php
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet"/>
<link href="../css/styleterceros.css" rel="stylesheet"/>
<script src="../Scripts/codigo.js"></script>
<script src="../Scripts/globos_ayuda.js" ></script>
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/transicion.js" ></script>
<script src="../Scripts/img.js"></script>
<script>
function validar(){

	var documento = document.getElementById('documento').value;
	if(documento == 0){
		alert('Seleccione un tipo de documento.');
		document.getElementById('documento').focus();
		return false;
	}
	
	var numero = document.getElementById('numero').value;
	if(numero == ""){
		alert('Digite el numero del documento.');
		document.getElementById('numero').focus();
		return false;
	}
	
	var nombre = document.getElementById('nombre').value;
	if(nombre == ""){
		alert('Digite el Nombre.');
		document.getElementById('nombre').focus();
		return false;
	}
	
	var telefono = document.getElementById('telefono').value;
	if(telefono == ""){
		alert('Digite el Telefono.');
		document.getElementById('telefono').focus();
		return false;
	}
	
	var direccion = document.getElementById('direccion').value;
	if(direccion == ""){
		alert('Digite la Direccion.');
		document.getElementById('direccion').focus();
		return false;
	}
	
	
	var correo = document.getElementById('correo').value;
	if (correo == ""){
		alert("Digite el Correo.");
		document.getElementById('correo').focus();
		return false;
	}	
	
	if ((correo.indexOf('@', 0) == -1) || (correo.length < 5) || (correo.indexOf('.', 0) == -1)) 	
	{
	  alert("Correo no válido (ejemplo@cassius.com).");
	  return false
	}

	var regimen = document.getElementById('regimen').value;
	if(regimen == 0){
		alert('Seleccione un Regimen.');
		document.getElementById('regimen').focus();
		return false;
	}
}
function validar_tercero(){
	llamarasincrono('validar_tercero.php', 'nom_tercero');
}

function validar_existe(){
	var numero = document.getElementById('numero').value;
	llamarasincrono('validar_tercero.php?numero='+numero, 'nom_tercero');
}

</script>
</head>
<body class="interna2" OnContextMenu="return false" onload="validar_tercero();">
<?php
    include "../php/dao/identifiDao.php";
    include "../php/entities/enticedula";
    $view= new stdClass(); 
    $view->disableLayout=false;
    $objdaoid = new TipoIDentifiDao;
    $objce = new  cedula;
    $objce = $objdaoid->tipoDeDocumento();
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/agregar_tercero.php');//se llama el cuerpo de modificar
    }
?>
</body>
</html>
