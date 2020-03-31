<div class="container">
    <div class="card" style="margin-top: 150px;">
            <div class="card-header">Nova Receita</div>
            <form action="" class="receitaForm" >
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
                    <label for="value">Valor</label>
                </div>
                <div class="md-form"><div class="btn btn-primary float-right" style="margin-bottom: 25px;">Salvar</div></div>
                
                </div>
            </form>
        
    </div>    
</div>

<script>

$('#value').mask('#.##0,00', {reverse: true});

</script>