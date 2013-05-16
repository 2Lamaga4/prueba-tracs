<script>
        function cargar(num){

          var tercero = num;
          var status=$("#contenido"+num);
          alert("contenido"+num);
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
          
 
        }        
 </script>