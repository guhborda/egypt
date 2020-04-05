<?php

include "../../../config.php";
if($auth){
?>
<div class="container">
    <div class="card" style="margin-top: 100px;">
            <div class="card-header">Nova Receita</div>
            <form class="receitaForm" id="receitaForm">
                <div class="card-body">
                <div class="md-form">
                    <input type="text" class="form-control" id="title">
                    <label for="title">Titulo</label>
                </div>
                <div class="md-form">
                    <input type="text" class="form-control" id="description">
                    <label for="description">Descrição</label>
                </div>

                <!-- checkbox recorrencia -->
                    <div class="form-check ">
                        <input type="checkbox" class="form-check-input chk_recorrencia" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Material unchecked</label>
                    </div>
                
                <!-- dataPicker -->

                <div class="md-form dtpickhide" id="datapicker">
                    <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
                </div>
                <!-- datapicker -->
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

$('.datepicker').pickadate();
$('.chk_recorrencia').on('change',function(){
    var recorrencia = $('.chk_recorrencia');
    console.log(recorrencia[0].checked);
if(recorrencia[0].checked == true){
    $('#datapicker').removeClass('dtpickerhide');
    $('#datapicker').addClass('datapicker');
}else{
    $('#datapicker').addClass('dtpickerhide');
    $('#datapicker').removeClass('datapicker');
}
});


$('#value').mask('#.##0,00', {reverse: true});
$('#data-picker-example').mask('00/00/0000');
$('#receitaForm').submit(function(e){
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