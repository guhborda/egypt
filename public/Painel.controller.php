<?php
$path = "../controller/";
$diretorio = dir($path);
$Routes=array(); 
$Realroutes = array();
while($arquivo = $diretorio -> read()){
    $Routes[]=$arquivo;
}
$diretorio -> close();

//var_dump($Routes);
if(isset($_REQUEST['Painel']['url']) && $_REQUEST['Painel']['url'] != '' ){
    $url = implode($_REQUEST['Painel']['url']);

   //$url = explode('/',$url);
   //var_dump($url);
    for($i=0;$i<count($Routes);$i++){
        if($url.'.controller.php' == $Routes[$i]){
            $Realroutes[] = $url;
        }
    }
    //var_dump($Realroutes);
    die(json_encode($Realroutes));

    
    
    
    //include('./controller/home.controller.php');
}else{
    die(json_encode('home'));
}
?>