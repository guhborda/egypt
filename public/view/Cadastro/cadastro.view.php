Oi olha como eu estou na Cadastro
<div class="btn" onClick="cadastrar()">Cadastrar</div>
<script>
    function cadastrar(){
        $.ajax({
            url: 'functions/Painel.func.php',
            method: 'POST',
            data:{Painel:'cadastro'},
            dataType: 'JSON',
            beforeSend: function(){
            },
            success: function(response){
                console.log(response)
            }
        });
}

</script>