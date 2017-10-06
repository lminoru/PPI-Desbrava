    $(document).ready(function(){
      $(".mudar").mouseover(function() {
        $(this).css("cursor","Pointer");
        $(this).css("background-color"," rgba(255,255,255,0.3)");
        $(this).css("font-size"," 105%");
      });

      $(".mudar").mouseout(function() {
        $(this).css("font-size"," 100%");
      });



      $(".fontMen, .nomeLogo, .login").mouseover(function() {
        $(this).css("cursor","Pointer");
      });

      $("#menu").mouseout(function() {
        $(this).css("cursor","default");
        $(".mudar").css("background-color"," rgba(255,255,255,0)");

      });

      $("#log").click(function() {
        var novaURL ="login/";
        $(window.document.location).attr('href',novaURL);

      }); 

      $(".login").click(function() {
         $(".aparecer").toggle();
  

      });

      $("#deslog").click(function() {
        var novaURL ="login/index.php?logout=OK";
          $(window.document.location).attr('href',novaURL);
 
      })
});  
