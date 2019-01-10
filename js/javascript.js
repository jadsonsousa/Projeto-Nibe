$(document).ready( function(){

  //$('#cad_sucesso').show();

  $('#form_usuario').hide();
  $("#form_ponto").hide();
  $('#cad_sucesso').fadeOut(5000);
  $('#mostra_data').hide();
  $('#btn-registar').hide();
  $('#sair').fadeOut(5000);    

  //exibe o formulário usuário
  $('#btn_usuario').click(function(){
    $("#form_usuario").show(1000);
    $("#form_ponto").hide(1000);
  });

  $('#btn-cadastrar').click(function(){
      //alert('funcionando');
  });

  $('#btn-ponto').click(function(){
    //$("input[name=p_nome]").val("Terra");
    $("#p_nome").hide();
    $('#mostra_data').show();
    $('#btn-registar').show();
    $('#btn-ponto').hide();
  });

  $('#btn-registar').click(function(){
    //$('#btn-registar').hide();
    $('#form_ponto').hide(1000);
  });
  
  //exibe o formulário ponto
  $('#btn_ponto').click( function(){
    $("#form_ponto").show(1000);
    $("#form_usuario").hide(1000);
  });



});

