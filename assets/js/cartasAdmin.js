$(document).ready(function() {

//Alterna o estado do input de altera��o do nome do projeto
  $("#txtNomeProjeto").keypress(function() {
    if ($(this).val().length > 0) {
      $(this).parent().removeClass('has-error');
    } else {
      $('#txtNomeSetor').parent().addClass('has-error');
    }
  });
//Adiciona novo projeto na tabela
  $('#buscarTexto').click(function() {
    var selectedTopico = document.getElementById("select-topico");
    var id = selectedTopico.options[selectedTopico.selectedIndex].value;
//    var url = 'localhost/sites/pppg.dev/pppg_carta_CI/';
    url = 'getTxtTituloTopico';

    $.post(url, {idTopico: id}, function(response) {
//      alert("response: " + response);
      if (response !== null) {
        console.log("antes: ");
        var data = $.parseJSON(response);
        console.log("data: " + data);
        if (data.success) {
          console.log("T�tulo: " + data.resposta);
          console.log("Texto: " + data.resposta);
          console.log("id: " + id);
          alert("ok");

          $.find('#tituloTop').val(data.resposta['titulo']);
          $.find('#texTop').val(data.resposta['texto']);
          $.find('#txtIdAtual').val(id);


        }
      }
    });
  });
});
//
//
////          'titulo' => $arrayTopicoInternEscolhido[`TituloTopico`], 'texto' => $arrayTopicoInternEscolhido[`TextoTopico`]          
////          id="textTop" txtIdAtual="" id="tituloTop"
//
//      }
//    });
//  });
//
//
//  function initDropdownToggle(selector) {
//    selector.on("click", function() {
//      ID_ultimoProjetoSelecionado = $(this).parents('tr').attr("data-tr");
//      TEXT_ultimoProjetoSelecionado = $(this).parents('tr').find('.projname').text();
//      modalAction = 'alterar';
//      $('#modalNewEdit').find('.modal-title').text('Alterar Projeto');
//      $('#txtNomeProjeto').val(TEXT_ultimoProjetoSelecionado);
//    });
//  }
//
////Alterna o estado do input de alteração do nome do projeto
//  $("#txtNomeProjeto").keypress(function() {
//    if ($(this).val().length > 0) {
//      $(this).parent().removeClass('has-error');
//    } else {
//      $('#txtNomeSetor').parent().addClass('has-error');
//    }
//  });
//  //Carrega notificações para o usuário            
//  function initNotification(data) {
//    if (data.success) {
//      var p = new PNotify({
//        title: 'Sucesso!',
//        text: data.msg,
//        type: 'success',
//        icon: 'glyphicon glyphicon-ok-circle',
//        buttons: {
//          sticker: false
//        }
//      });
//    } else {
//      var p = new PNotify({
//        title: 'Erro!',
//        text: data.msg,
//        type: 'error',
//        icon: 'glyphicon glyphicon-remove-circle',
//        buttons: {
//          sticker: false
//        }
//      });
//    }
//  }
//
//  //Adiciona novo projeto na tabela
//  $(document).on('click', '#btnAdicionarProjeto', function() {
//    modalAction = 'adicionar';
//    $('#modalNewEdit').find('.modal-title').text('Cadastrar Projeto');
//    $('#txtNomeProjeto').val('');
//  });
//  //Captura que tipo de ação será executada e
//  //Leva o nome do projeto selecionado para edição ao input do modal
//  $('*[data-target="#modalNewEdit"],*[data-target="#modalDelete"]').on('click', function() {
//    if (($(this).attr('data-target') === '#modalNewEdit') && $(this).is('button')) {
//      modalAction = 'adicionar';
//    } else if ($(this).attr('data-target') === '#modalDelete') {
//      modalAction = 'delete';
//    } else {
//      modalAction = 'alterar';
//    }
//
//  });
//  function atualizarNomeProjeto(idProjeto, newName) {
//    $("tr[data-tr=" + idProjeto + "]").find(".projname").text(newName);
//  }
//
////realiza a busca por algum Projeto da tabela
//  function pesquisarProjeto() {
//    var searchString = removeAccents($("#txtFindProjeto").val());
//    console.log("pesquisa_search string_: " + searchString);
//    $('#tbProjetos').find('.projname').each(function() {
//      console.log("pesquisa_this text_: " + $(this).text());
//      var nomeProjeto = removeAccents($(this).text());
//      if (nomeProjeto.indexOf(searchString) >= 0) {
//        $(this).parents('tr').show();
//      } else {
//        console.log("Nao e'!!: " + $(this).text());
//        $(this).parents('tr').hide();
//      }
//    });
//    console.log("pesquisa_fim_");
//  }
//
//  $("#btnBuscarProjeto").on('click', function() {
//    pesquisarProjeto();
//  });
//  $("#txtFindProjeto").keyup(function() {
//    pesquisarProjeto();
//  });
//  //Limpa input do modal de criação e alteração de projetos ao clicar em FECHAR
//  $('#btnSalvarAlterarNao').on('click', function() {
//    $('#txtNomeProjeto').val('');
//  });
//  //Cria um novo projeto ou Altera o nome de algum projeto já existente
//  $("#btnSalvarAlteracao").on('click', function() {
//    var newName = $('#txtNomeProjeto').val();
//    //Adiciona Projeto
//    if (modalAction === 'adicionar') {
//      if (newName !== '') {
//        var htmlTable = '';
//        var url = js_site_url('index.php/projetos/salvar');
//        $.post(url, {projeto: newName}, function(response) {
//          if (response !== null) {
//            var data = $.parseJSON(response);
//            if (data.success) {
//              htmlTable = htmlTable + '   <tr data-tr="' + data.idProjeto + '">';
//              htmlTable = htmlTable + '       <td>';
//              htmlTable = htmlTable + '           <p class="projname"><span>' + newName + '</span></p>';
//              htmlTable = htmlTable + '       </td>';
//              htmlTable = htmlTable + '       <td>';
//              htmlTable = htmlTable + '            <div class="btn-group action">';
//              htmlTable = htmlTable + '               <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">';
//              htmlTable = htmlTable + '                   Ação&nbsp';
//              htmlTable = htmlTable + '                   &nbsp';
//              htmlTable = htmlTable + '                   &nbsp';
//              htmlTable = htmlTable + '                   <span class="caret"></span>';
//              htmlTable = htmlTable + '               </button>';
//              htmlTable = htmlTable + '               <ul class="dropdown-menu" role="menu">';
//              htmlTable = htmlTable + '                   <li> <a href="#" data-toggle="modal" data-target="#modalNewEdit"> <span class="glyphicon glyphicon-pencil"></span>Editar</a> </li>';
//              htmlTable = htmlTable + '                   <li> <a href="#" data-toggle="modal" data-target="#modalDelete"><span class="glyphicon glyphicon-remove-circle"> </span> Excluir</a> </li>';
//              htmlTable = htmlTable + '               </ul>';
//              htmlTable = htmlTable + '           </div>';
//              htmlTable = htmlTable + '       </td>';
//              htmlTable = htmlTable + '   </tr>';
//              $('#tbProjetos').append(htmlTable);
//              initDropdownToggle($(".dropdown-toggle"));
//            }
//            initNotification(data);
//            $('#txtNomeProjeto').val('');
//          }
//        }
//        );
//        $("#modalNewEdit").modal('toggle');
//      } else {
//        $('#txtNomeProjeto').parent().addClass('has-error');
//        //Altera nome de um projeto    
//      }
//    } else {
//      if (newName !== '') {
//        $.post(js_site_url('index.php/projetos/alterar'), {idProjeto: ID_ultimoProjetoSelecionado, newName: newName}, function(response) {
//          if (response !== null) {
//            var data = $.parseJSON(response);
//            if (data['success'] === true) {
//              $('#txtNomeProjeto').val('');
//              atualizarNomeProjeto(ID_ultimoProjetoSelecionado, newName);
//            }
//            initNotification(data);
//          }
//        });
//        $("#modalNewEdit").modal('toggle');
//      } else {
//        $('#txtNomeProjeto').parent().addClass('has-error');
//      }
//    }
//  });
//  //Remove um projeto da table
//  $(document).on('click', '#btnExcluirSim', function() {
//    $.post(js_site_url('index.php/projetos/excluir'),
//            {projetoId: ID_ultimoProjetoSelecionado},
//    function(response) {
//      var data = $.parseJSON(response);
//      if (data.success) {
//        htmlTable = $("tr[data-tr=" + ID_ultimoProjetoSelecionado + "]");
//        $(htmlTable).remove();
//      }
//      initNotification(data);
//    });
//    $("#modalDelete").modal('toggle');
//  });
//});