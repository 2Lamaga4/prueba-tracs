<?php
class CargoDao{

    public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
        $this->daoConnection->conectar();
	}

	
	function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }
	
	function save($obj){
        $newcuentas = new cargoEnti();
        $newcuentas = $obj;

        $querty =   "insert into cargos
                    (nombrecargo,descripcion) VALUES
                     ('".mysql_real_escape_string($newcuentas->getCargo())."',
                     	'".mysql_real_escape_string($newcuentas->getDes())."')";

        $result = mysql_query($querty, $this->daoConnection->Conexion_ID);
		if (!$result){
            echo 'Ooops (saveCuenta): '.mysql_error();
            return false;
        }

        return true;

    }

}
?>