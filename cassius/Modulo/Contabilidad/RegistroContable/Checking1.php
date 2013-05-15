 <?php


$vari=$_GET['tercero'];

     $checking=false;


     if($vari==$vari){

     	$msm="";

  for ($i=0; $i <= $vari; $i++) { 

    		$temp='<input  type="text" value="'.$vari.'"/>
     <div id="contenido'.$vari.'" ></div>';

    		$msm=$msm.$temp;
    	}  	
     $msg=''.$msm.'<a href="#" onclick="javascript:cargar('.($vari+1).');">Agregar Cuenta</a>'; 

 }
    

  
 
  $json=array("valid"=>$checking, "msg" => $msg);
 
  echo json_encode($json);
 
?>