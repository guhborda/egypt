<?php
include "../../../config.php";
if($auth){
?>
<div class="container">
    <div class="card" style="margin-top: 100px;">
            <div class="card-header">Nova Despesa</div>
            <form class="despesaForm" id="despesaForm">
                <div class="card-body">
                <div class="md-form">
                    <input type="text" class="form-control" id="title">
                    <label for="title">Titulo</label>
                </div>
                <div class="md-form">
                    <input type="text" class="form-control" id="description">
                    <label for="description">Descrição</label>
                </div>  
                <div class="md-form">
                    <input type="text" class="form-control" id="value">
                    <label for="value">Valor R$</label>
                </div>
                <div class="md-form"><input type="reset" class="btn" value="Limpar"><input class="btn btn-primary float-right" style="margin-bottom: 25px;" id="cadReceita" type="submit" value="Salvare"></div>
                
                </div>
            </form>
        
    </div>    
</div>

<script>

$('#value').mask('#.##0,00', {reverse: true});

$('#despesaForm').submit(function(e){
    e.preventDefault();
    var titulo = $('#title').val();
    var descricao = $('#description').val();
    var valor = $('#value').val();
    if(titulo == '' || valor  == ''){
        $('.modal').removeClass('conteudo');
        $('.modal-body p').html('Campo Titulo e/ou Valor não podem ser vazios');
        $('.modal').modal();
    }else{
        alert(titulo+descricao+valor);
        $('#receitaForm')[0].reset();
    }
    
});

</script>

<?php
}else{
    header("location: ../index.php");
}
?>