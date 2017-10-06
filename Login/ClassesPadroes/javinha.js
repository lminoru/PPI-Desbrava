    $(document).ready(function(){
      $(".mudar").mouseover(function() {
        $(this).css("cursor","Pointer");
        $(this).css("background-color"," rgba(255,255,255,0.3)");


      });

      $(".fontMen, .nomeLogo, .login").mouseover(function() {
        $(this).css("cursor","Pointer");
    

      });

      $("#menu").mouseout(function() {
        $(this).css("cursor","default");
        $(".mudar").css("background-color"," rgba(255,255,255,0)");

      });


      $(".nomeLogo").click(function() {
      	var novaURL ="../main.php";
        $(window.document.location).attr('href',novaURL);

      });  

      $("#ex").click(function() {
      	var novaURL ="../exercicios.php";
        $(window.document.location).attr('href',novaURL);

      });  


      $(".div_login .espacoDigitar").focusout(function() {
        $(this).attr("text-align","center");

      });  



      $(".login").click(function() {
         $(".aparecer").toggle();
  

      });

      $("#deslog").click(function() {
        var novaURL ="index.php?logout=OK";
          $(window.document.location).attr('href',novaURL);
 
      })

      $("#log").click(function() {
        var novaURL ="index.php";
        $(window.document.location).attr('href',novaURL);

      }); 


    });  