/*$(".login-form").submit(function(event) {
  event.preventDefault();
  var status = $('#status');
 setTimeout(function(){
            window.location.href = 'views/home.php';
          },1000);
});


 //função para buscar no controle e validar login

$(".login-cadastro").submit(function(event) {
  event.preventDefault();
  var status = $('#status');
 setTimeout(function(){
            window.location.href = '../index.php';
          },1000);
  
  $.post("../controllers/avaliador_controll.php",$(this).serialize(),
    function(resposta){
      if(resposta){
        status.slideDown();

        if(resposta == "ok"){
          status.removeClass('alert alert-danger');
          status.addClass('alert alert-success');
          status.html('<strong> Login com sucesso...</strong>');
          setTimeout(function(){
            window.location.href = 'home.php';
          },1000);
        }
        else if(resposta == "erro"){
          status.removeClass('alert alert-success');
          status.addClass('alert alert-danger');
          status.html('<strong>  Login Errado :( </strong> </br> confira suas informações de login');
        }
        else{
          status.removeClass('alert alert-success');
          status.addClass('alert alert-danger');
          status.html(resposta);
        }
      }
    });
});*/
