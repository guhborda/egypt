<?php
namespace controller;
include '../config.php';
if($auth){
include '../public/components/mobileView.php';
include '../public/components/webView.php';

  if($device == 'mobile'){
    mobileView('home');
  }else{
    webView('home');
  }
}else{
  header("location: ../index.php");
}
?>
