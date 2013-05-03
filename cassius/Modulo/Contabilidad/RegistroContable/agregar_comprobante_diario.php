<?php
include "cuerpo/agregar_comprobante_diario.php";
include_once ('../../../info.php');//se llama la informacion de la pagina
?>
<link href="../config/estilos_cassius.css" rel="stylesheet" />
<link href="../js/jquery.autocomplete.css" rel="stylesheet" />
<link href="../css/datepicker.css"rel="stylesheet" />
<script src="../Scripts/bloqueo_clic_derecho.js" ></script>
<script src="../Scripts/codigo.js"></script>
<script src="../js/jquery.js"></script>
<script src='../js/jquery.bgiframe.min.js'></script>
<script src='../js/jquery.autocomplete.js'></script>
<script src="../js/datepicker.js"></script>
<script src="../js/eye.js"></script>
<script src="../js/utils.js"></script>
<script src="../js/layout.js?ver=1.0.2"></script>
<script src="../Scripts/img.js"></script>
<?php
   include('cuerpo/agregar_comprobante_diariojs.php');
 ?>  
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript">
      $(function(){
 
        $("input[name=tercero]").keyup(function(e){
          var tercero = $(this).val();
          var status=$("#status");
 
          status.removeClass("checked").removeClass("error")
          if(tercero.length > 0){
            $.ajax({
              type:"POST",
              url:"checking.php",
              data:"tercero="+tercero,
              dataType:"json",
              beforeSend:function(){
                  status.html("<img src='img/loading.gif'/>");
              },
              success:function(response){
                  if(response.valid==true){
                    status.addClass("checked");
                  }else{
                    status.addClass("error");
                  }
                  status.html(response.msg);
              }
            })
          }else{
              status.html("Ingrese un usuario");
          }
 
        });
 
      })
    </script>
</head>

<body class="popup" onload="dato_tercero2(); <?php if($_GET['OK'] == 1){?>cerrarVentana()<?php } ?>"  onUnload="cerrar_v()" >

<?php
    $view= new stdClass(); 
    $view->disableLayout=false;
if ($view->disableLayout==false)
    {
      include_once ('movimientos/agregar_componentes_diario.php');
    }
 ?>   
</body>
</html>
<style type="text/css">
   span{
        color:#555555;
        font-weight:bold;
        padding-bottom:2px;
        padding-left:16px;
      }
 
      span.checked{
        background:url("img/checked.gif") no-repeat scroll 0 0 transparent;
        color:#3581CC;
      }
      span.error{
        background:url("img/unchecked.gif") no-repeat scroll 0 0 transparent;
        color:#EA5200;
      }
</style>
