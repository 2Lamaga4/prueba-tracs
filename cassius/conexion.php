<?php
 include_once ('info.php');//se llama la informacion de la pagina
?>
<script>
function ok(){
	alert('Datos de conexion insertados con exito');
}
</script>
<body <?php if(isset($_REQUEST['OK']) == 1){ ?>onload="ok()"<?php } ?>>
<form name="conexion" action="infoconexion.php" method="POST">
BaseDatos: <input type="text" name="BaseDatos" value="dbconjun"><br>
Servidor:  <input type="text" name="Servidor"  value="localhost"><br>
Usuario :  <input type="text" name="Usuario"   value="root"><br>
Clave :    <input type="password" name="Clave"><br>
<input type="submit" value="crear conexion"><br>
<input type="reset" value="borrar">
</form>
<a href="home.php">entrar a cassius</a>
</body>