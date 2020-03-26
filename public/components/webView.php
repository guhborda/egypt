<?php
function webView($params){
  //var_dump($data);
  include('../public/components/sidenav.php');
  include("../public/view/home.view.php");
  ?>
   <script>
    $(document).ready(function(){
        $('body').attr('device','webview');
        $('#rootContent').load('public/view/<?=ucfirst($params)?>/<?=$params?>.view.php');
      //console.log('working');
    });
    
  </script>
  <?php
  }
  ?>