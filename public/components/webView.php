<?php
if($auth){
function webView($params){
  include('../public/components/sidenav.php');
  include("../public/view/home.view.php");
  ?>
   <script>
    $(document).ready(function(){
        $('body').attr('device','webview');
        $('body').attr('page','<?=ucfirst($params)?>');
        var page = $('body').attr('page');
        $('.LogoTitle p').html(page);
        //$('#rootContent').load('public/components/testes/hometeste.html');
        $('#rootContent').load('public/view/<?=ucfirst($params)?>/<?=$params?>.view.php');
      //console.log('working');
    });
    
  </script>
  <?php
  }
}else{
  header("location: ../index.php");
}
  ?>