<div class="container">
  <div class="flex home">
</div>
<script>

    var cotacoes = {tag:'vvar3',variation:'+5%',cotacao:'55,98',lucro:'+500,00'};
    var newcotacoes = [cotacoes,cotacoes,cotacoes,cotacoes,cotacoes,cotacoes,cotacoes];
    console.log(newcotacoes);
    for(i = 0; i < newcotacoes.length; i++){
        $(".flex.home").append('<div class="col-item col-md-3 col-12"><div class="tag">'+newcotacoes[i].tag+'</div><div class="variation">'+newcotacoes[i].variation+'</div><div class="price">R$<div class="cotacao">'+newcotacoes[i].cotacao+'</div></div><div class="lucro">'+newcotacoes[i].lucro+'</div></div>');
        }
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
            console.log(response.dados.length);
        }




    })
</script>