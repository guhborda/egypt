<?php
function webView($params){
  //var_dump($data);
  include('../public/components/sidenav.php');
  include("../public/view/home.view.php");
  ?>
   <script>
    $(document).ready(function(){
        $('body').attr('device','webview');
      //console.log('working');
    });
    
  </script>
  <?php
  }
  ?>