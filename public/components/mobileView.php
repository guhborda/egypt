<?php
if($auth){
function mobileView($params){
    
    //echo __DIR__;
    include('../public/components/smp_navbar.html');
    include('../public/components/sidenav.php');
    include('../public/view/home.view.php');
    ?>
    <div class="fixed-action-btn">
    <a class="btnFlutuante btn-floating btn-lg btn-default"><i class="fas fa-bolt"></i></a>
      <ul class="list-unstyled">
        <li ><span class="popFloating"> Cartão </span> <a href="papel" id="Papel" class="floatBtn btn-floating purple darken-1"><i class="fas fa-user"></i></a></li>
        <li ><span class="popFloating"> Cartão </span> <a href="cartao" id="Cartao" class="floatBtn btn-floating purple darken-1"><i class="fas fa-user"></i></a></li>
        <li ><span class="popFloating"> Despesa </span><a href="despesa" id="Despesa" class="floatBtn btn-floating red"><i class="fas fa-envelope"></i></a></li>
        <li ><span class="popFloating"> Receita </span><a href="receita" id="Receita" class="floatBtn btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
      </ul>
    </div>
      <script>
        $(document).ready(function(){
            $('body').attr('device','smartphoneview');
            $('body').attr('page','<?=ucfirst($params)?>');
            var page = $('body').attr('page');
            $('.smp_Title').html(page);
            $("#rootContent").load('public/view/<?=ucfirst($params)?>/<?=$params?>.view.php');
            var btnstatus = 0;
          $('.fixed-action-btn').click(function(){
              if(btnstatus == 0){
                $(".fixed-action-btn").css('height','500px');
                  $(".fixed-action-btn").addClass("active");
                  $(".fixed-action-btn ul li a").addClass("shown");
                  btnstatus = 1;
              }else{
                $(".fixed-action-btn").css('height','30px');
                $(".fixed-action-btn").removeClass("active");
                $(".fixed-action-btn ul li a").removeClass("shown");
                btnstatus = 0;
              }
          });
          
          // $('.floatBtn.btn-floating').click(function(e){
          //   e.preventDefault();
          //   var btn = $(this);
          //   //console.log(btn);
          //   var action = btn.attr('id');
          //   switch(action){
          //     case 'Receita':
          //       cadastrarReceita(action).then(()=>{
          //         $('.modal').removeClass('conteudo');
          //         $('.modal-body p').html('');
          //       });
          //     break;
          //     case 'Despesa':
          //       cadastrarDespesa(action).then(()=>{
          //         $('.modal').removeClass('conteudo');
          //         $('.modal-body p').html('');
          //       });
          //     break;
          //     case 'Cartao':
          //       cadastrarCartao(action).then(()=>{
          //         $('.modal').removeClass('conteudo');
          //         $('.modal-body p').html('');
          //       });
          //     break;
          //     case 'Papel':
          //       cadastrarPapel(action).then(()=>{
          //         $('.modal').removeClass('conteudo');
          //         $('.modal-body p').html('');
          //       });
          //     break;
          //     default:
          //     break;
          //   }
          // });
          
        });
        </script>
    <?php
    //var_dump($data);
    //include('public/components/openPost.html');
  }

}else{
  header("location: ../index.php");
}
  ?>