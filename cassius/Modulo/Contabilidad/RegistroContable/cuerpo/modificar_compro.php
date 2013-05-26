<script>
        function cargar(num,vacas){
            var i = vacas;
        
           $('#'+i).attr("hidden", true);

          var tercero = num;
          var status=$("#contenidos"+num);
          status.removeClass("checked").removeClass("error")
            $.ajax({
              type:"GET",
              url:"checking1.php",
              data:"tercero="+tercero, 
              dataType:"json",
              beforeSend:function(){
                  status.html("");
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
          i++;
        

        }     


        function cuentas(id){
           var i = id.id;
           var j = id.value;  
           var denominacion=$("#denominacion"+i);
            denominacion.removeClass("checked").removeClass("error")
            $.ajax({
              type:"GET",
              url:"cuetats.php",
              data:"cuenta="+j, 
              dataType:"json", 
              beforeSend:function(){
                  denominacion.html("");
                  llamarasincrono('cuenta_documento.php?idcuenta='+j+'&n='+id, 'denominacion'+i);  
              },
              success:function(response){
                  if(response.valid==true){
                    denominacion.addClass("checked");                  
                    llamarasincrono('cuenta_documento.php?idcuenta='+j+'&n='+id, 'denominacion'+i);   
                        alert("que jutas1");
                  }else{
                   denominacion.addClass("error"); 
                    alert("ddd");                                      
                  }
                denominacion.html(response.msg);     
                              
              }
            });  
             i++;
            }  

 function eliminar(num){
            var i = num.id;
            alert(i);
           $('#contenido'+i).attr("hidden", true);
        }  

 </script>