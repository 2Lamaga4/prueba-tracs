<script>
        function cuentas(id){
           var i = id.value;       
           alert(i);
          var status=$("#denominacion"+i);
          status.removeClass("checked").removeClass("error")
            $.ajax({
              type:"GET",
              url:"cuetats.php",
              data:"cuenta="+i, 
              dataType:"json",
              beforeSend:function(){
                  status.html("");
              },
              success:function(response){
                  if(response.valid==true){
                    status.addClass("checked");                  
                      alert("nada");                  
                  }else{
                    status.addClass("error"); 
                    alert("ddd");                                      
                  }
                  status.html(response.msg);     
                              
              }
            })
        

        
        }        
 </script>