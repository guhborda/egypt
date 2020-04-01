
<!-- SideNav slide-out button -->
<!-- SideNav slide-out button -->
 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
          <div class="logo-wrapper waves-light" style="border-bottom: none;">
            <a href="#" style="top: 10px;
    position: relative;"><img src="images/icons/icon-72x72.png" class="" style="left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
    box-shadow: 3px 7px 5px rgba(0,0,0,0.5);
    border-radius: 50%;
    padding:0;
    "></a>
          </div>
        </li>
        <!--/. Logo -->
        <!--Social-->
        <li>
          <ul class="social">
            <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
            <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
            <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
            <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
          </ul>
        </li>
        <!--/Social-->
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li><a href="home" class="collapsible-header waves-effect arrow-r">Dashboard</a>
            </li>
            <li class="btndropdown"><a class="collapsible-header waves-effect arrow-r"> Cadastrar<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
                <ul>
                  <li><a href="cadastro" class="waves-effect">
                      <span class="sv-normal">Cadastro</span></a>
                  </li>
                  <li><a href="#" class="waves-effect">
                      <span class="sv-normal">Write a message</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href="receita" class="collapsible-header waves-effect arrow-r"> Receita</a>
            </li>
            <li><a href="despesa" class="collapsible-header waves-effect arrow-r"> Despesa</a>
            </li>
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="web navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar blue text-white double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto LogoTitle">
        <p>Finance</p>
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="receita"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-cash"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
            Minha Conta
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="sair">Sair</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.Navbar -->

<?php

    //include('sidenav.html');

?>

<script>

$(document).ready(function() {
    var drop = 0;
    $('.btndropdown').click(function(){
      if(drop == 0){
      $('.btndropdown').toggleClass('active');
      $('.btndropdown a').toggleClass('active');
      $('.btndropdown div.collapsible-body').css('display','block');
      drop =1;
      }else{
        $('.btndropdown').toggleClass('active');
        $('.btndropdown a').toggleClass('active');
        $('.btndropdown div.collapsible-body').css('display','none');
        drop = 0;
      }
    });

    $(".button-collapse").sideNav();
    // SideNav Button Initialization
    // SideNav Scrollbar Initialization
    // var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    // var ps = new PerfectScrollbar(sideNavScrollbar);




});

</script>
<style>
  
  html[device="mobile"] #slide-out{
    z-index: 999999;
    }
    html[device="mobile"] .web{
      display:none;
      opacity: 0;
    }
    .navbar-nav{
    display:flex;
    flex-direction: row;
    }
    .hamburguer{
        margin-right: 15px;
        margin-top: 5px;

    }


      @media (min-width: 1441px){
        html[device="pc"] #rootContent{
          padding-left: 240px;

        }
      }

</style>
