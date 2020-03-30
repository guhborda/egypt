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
  alert(data);
}

function cadastrarReceita(data){
  alert(data);
}

function cadastrarDespesa(data){
  alert(data);
}

function cadastrarPapel(data){
  $('.modal-body p').html(data);
  sleep(1500).then(()=>{
    $('#frameModalBottom').modal();
  });
}

