<?php
namespace controller;
include '../config.php';
if($auth){
include '../public/components/mobileView.php';
include '../public/components/webView.php';

  if($device == 'mobile'){
    mobileView('receita');
  }else{
    webView('receita');
  }
}else{
  header("location: ../index.php");
}

?>