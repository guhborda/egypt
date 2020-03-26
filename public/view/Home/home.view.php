<script>
    $.ajax({
        url:'api/estoque/mostrar',
        method:'GET',
        dataType:'JSON',
        beforeSend: function(){
            console.log('loading api');
        },
        success: function(response){
            console.log('era pra mostrar a api');
            console.log(response);
        }
    })
</script>