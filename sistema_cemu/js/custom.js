$(document).ready(function(){
    $('form[name="form_login"]').submit(function(){
       var forma = $(this);
       var botao = $(this).find(':button');
       var input = $(this).find(':input');

       $.ajax({
           url: "ajax/controller.php",
           type: "POST",
           data: "acao=code&"+forma.serialize(),
           beforeSend: function(){
               botao.attr('disabled', true);
               input.attr('disabled', true);
               $('.loader').fadeIn('slow');
               
           },
           success: function(retorno){
               $('.loader').fadeOut('slow', function(){
                   botao.attr('disabled', false);
                   input.attr('disabled', false);
               });
             
               if (retorno === 'vazio') {
                   msg('Por favor, digite o se código de acesso e senha para continuar','alerta');
               }else if (retorno === 'naoexiste') {
                   msg('O código de acesso ou a senha digitada não foi encontrada em nossos registros','erro');
               }else if (retorno === 'diferentesenha') {
                   msg('A senha digitada não corresponde a este codigo de acesso, verifique e tente novamente','info');
               }else if (retorno === 'painel') {
                   msg('Você não possui permissões para continuar','erro');
               }else if (retorno === 'status') {
                   msg('Você está inativo, por favor, deriga-se a coordenação da escola para que seu acesso seja liberado','erro');
               }else{
                   forma.fadeOut('fast', function(){
                    msg('Login efectuado com sucesso, aguarde...','sucesso');
                    $('#loader').fadeIn('slow');
                   });
                   setTimeout(function() {
                       $(location).attr('href','administrador/administrador.php');
                   }, 3000);
               }
           }
       });
         return false;
    });
    //FUNCOES GERAIS
    function msg(msg, tipo){
       var retorno = $('.retorno');
       var tipo = (tipo === 'sucesso') ? 'success' : (tipo === 'alerta') ? 'warning' : (tipo === 'erro') ? 'danger' : (tipo === 'info') ? 'info' : alert('Informe mensagem de sucesso, alerta, erro, info');

       retorno.empty().fadeOut('fast', function(){
           return $(this).html('<div class="alert alert-'+tipo+'">'+msg+'</div>').fadeIn('slow');
       });

       setTimeout(function(){
           retorno.fadeOut('slow').empty();
       }, 6500);
    }
});