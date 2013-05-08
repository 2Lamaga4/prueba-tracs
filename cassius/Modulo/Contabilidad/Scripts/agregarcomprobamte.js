$(function(){
 
        $("input[name=tercero]").keyup(function(e){
          var tercero = $(this).val();
          var status=$("#status");
 
          status.removeClass("checked").removeClass("error")
          if(tercero.length > 0){
            $.ajax({
              type:"GET",
              url:"checking.php",
              data:"tercero="+tercero,
              dataType:"json",
              beforeSend:function(){
                  status.html("<img src='../images/img/loading.gif'/>");
              },
              success:function(response){
                  if(response.valid==true){
                    status.addClass("checked");
                    llamarasincrono('tercero_campo2.php?tercero='+tercero, 'ter2');                    
                  }else{
                    status.addClass("error");
                    llamarasincrono('tercero_campo.php?tercero='+tercero, 'ter');
                  }
                  status.html(response.msg);                  
              }
            })
          }else{
              status.html(" ");
          }
 
        });
 
      })