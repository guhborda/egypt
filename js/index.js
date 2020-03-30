    function sleep(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('sw.js').then(function(registration) {
          // Registration was successful
          console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
          // registration failed :(
          console.log('ServiceWorker registration failed: ', err);
        });
      });
    }

    
//Funcionalidades
function cadastrarCartao(data){
  $('.modal-body p').html(data);
  $('.modal').addClass('conteudo');
    $('#frameModalBottom').modal();
}

function cadastrarReceita(data){
  $('.modal-body p').html(data);
  $('.modal').addClass('conteudo');
    $('#frameModalBottom').modal();
}

function cadastrarDespesa(data){
  $('.modal-body p').html(data);
  $('.modal').addClass('conteudo');
    $('#frameModalBottom').modal();
}

function cadastrarPapel(data){
  $('.modal-body p').html(data);
  $('.modal').addClass('conteudo');
    $('#frameModalBottom').modal();
}

