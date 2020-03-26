<?php
    include('config.php');
    include('autoload.php');
    //echo __DIR__;
    //include_once('config.php');
    //include_once($path.'sys/Conexao.class.php');
    //getLoginToken
    
    include ('structure/head.html');
    include ('structure/body.html');
    //include('public/components/CardPost.html');
    // if($_REQUEST){
    //     $request = $_REQUEST;
    //     $url = explode('/',$_REQUEST['url']);
    //     //var_dump($url);
    //     // if($url == 'app'){
            
    //     //     include($path.'app/index.php');
    //  // }
    // }else{
    //     //echo 'urlvazia';
    //     //echo __DIR__;
    //     include('public/view/home.view.php');
    // }
    include './public/components/modal.html';
    include './public/components/loading.html';
     ?>
        </div>
    </div>

        <script>
                    <?php 
                        if($_REQUEST){

                            //$friendlyurl = json_encode(explode('/',$_REQUEST['url'])); 
                            $url = explode('/',$_REQUEST['url']);
                            if(count($url)> 0){
                                $controllers = $url[0];
                                //$controllers = implode('/',$url);
                                $newurl[] = ["$controllers"];
                                if(count($url) >1){
                                $params = $url[1];
                                $newurl[] = $params;
                                }
                            }else{
                                $newurl[] = ['home'];
                            }
                            echo " var friendlyurl = ['".$controllers."']";
                            
                        }else{
                            $newurl[] = ['home'];
                            echo " var friendlyurl = ['home']";
                        };
                        
                    ?>;
                        $(document).ready(function(){
                        $('html').attr('device','<?php echo $device ?>');
                        //console.log(friendlyurl);
                        $.ajax({
                            url:'public/Painel.controller.php',
                            method: 'POST',
                            dataType: 'JSON',
                            data: {
                                Painel:{url:friendlyurl}
                            },
                            beforeSend: function(){
                           
                                
                                $('.loading-overlay').addClass('Abrir');
                            
                              
                            },
                            success: function(response){
                                
                                $('.loading-overlay').removeClass('Abrir');
                                
                                //console.log(response);
                                if(response != false){
                                    
                                    <?php
                                       if(isset($_SESSION['user'])){
                                    ?>
                                    
                                        $("#rootApp").empty();
                                        $("#rootApp").load('controller/'+response+'.controller.php');
                                
                                        <?php
                                            }else{
                                                ?>
                                                $("#rootApp").empty();
                                                $("#rootApp").load('controller/login.controller.php');
                                                <?php
                                            }
                                        ?>
                                 }else{
                                    $("#rootApp").empty();
                                    $("#rootApp").load('public/404.html');
                                    
                                }
                                
                        }
                        });
                        // $(".MASTER_SECTION").load('public/view/home.view.php');
                    });
                    
        </script>
    </body>
</html>