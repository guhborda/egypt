<header>
<!-- SideNav slide-out button -->
<!-- SideNav slide-out button -->
 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav blue fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
          <div class="logo-wrapper waves-light">
            <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
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
        <!--Search Form-->
        <li>
          <form class="search-form" role="search">
            <div class="form-group md-form mt-0 pt-1 waves-light">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
        </li>
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li><a href="home" class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Dashboard</a>
            </li>
            <li><a href="cadastro" class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Cadastrar</a>
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
      <div class="breadcrumb-dn mr-auto">
        <p>Material Design for Bootstrap</p>
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
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
</header>