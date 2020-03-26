<?php
namespace controller;
include '../config.php';
function mobileView(){
  include('../public/components/smp_login.html');
}

function webView(){
  include('../public/components/wb_login.html');
}

if($device == 'mobile'){
  mobileView();
}else{
  webView();
}

?>