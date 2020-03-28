<?php
function mobileView($params){
    
    //echo __DIR__;
    include('../public/components/smp_navbar.html');
    include('../public/components/sidenav.php');
    include('../public/view/home.view.php');
    ?>
    <div class="fixed-action-btn" style="bottom: 0px; right: 10px;">
    <a class="btnFlutuante btn-floating btn-lg btn-default"><i class="fas fa-bolt"></i></a>
      <ul class="list-unstyled">
        <li><a class="btn-floating red"><i class="fas fa-star"></i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
        <li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
        <li><a class="btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
      </ul>
    </div>
      <script>
        $(document).ready(function(){
            $('body').attr('device','smartphoneview');
            $("#rootContent").load('public/view/<?=ucfirst($params)?>/<?=$params?>.view.php');
            var btnstatus = 0;
          $('.fixed-action-btn').click(function(){
              if(btnstatus == 0){
                $(".fixed-action-btn").css('height','500px');
                  $(".fixed-action-btn").addClass("active");
                  $(".fixed-action-btn ul li a").addClass("shown");
                  btnstatus = 1;
              }else{
                $(".fixed-action-btn").css('height','110px');
                $(".fixed-action-btn").removeClass("active");
                $(".fixed-action-btn ul li a").removeClass("shown");
                btnstatus = 0;
              }
          });
        });
        </script>
    <?php
    //var_dump($data);
    //include('public/components/openPost.html');
  }
  ?>