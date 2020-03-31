<?php

namespace controller;
include '../config.php';
include '../public/components/mobileView.php';
include '../public/components/webView.php';

  if($device == 'mobile'){
    mobileView('receita');
  }else{
    webView('receita');
  }


?>