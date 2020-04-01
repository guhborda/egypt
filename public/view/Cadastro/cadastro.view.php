<?php
include "../../../config.php";
if($auth){
?>
Oi olha como eu estou na Cadastro
<div class="btn" onClick="cadastrar('oloco')">Cadastrar</div>
<script>

    function cadastrar(params){
        $.ajax({
            url: 'functions/Painel.func.php',
            method: 'POST',
            data:{Painel:'cadastro',Params: params},
            dataType: 'JSON',
            beforeSend: function(){
            },
            success: function(response){
                console.log(response);
            }
        });
}

</script>

<?php
}else{
    header("location: ../../../index.php");
}
?>