$(document).ready(function() {

  var idAtual = '';

  window.onload = function() {
    CKEDITOR.replace('editorCKEditor');
  };



//Cria um novo projeto ou Altera o nome de algum projeto j√° existente
  $('#buscarTexto').bind('click', function() {
    var selectedTopico = document.getElementById("select-topico");
    var id = selectedTopico.options[selectedTopico.selectedIndex].value;

    $.post("../dao/postTopicoData.php",
            {idTopico: id}, function(response) {
      if (response !== null) {
        var data = response;
        var titulo, texto;

        var stringParts = data.split('9------------------9', 2);
        titulo = stringParts[0];
        texto = stringParts[1];

        $('#tituloTop').val(titulo);
        CKEDITOR.instances.editorCKEditor.setData(texto);
        idAtual = id;
      } else {
        alert("problem");
      }
    });
  });

  $('#salvarTexto').bind('click', function() {
//    var selectedTopico = document.getElementById("select-topico");
//    var id = selectedTopico.options[selectedTopico.selectedIndex].value;
    novoTitulo = $('#tituloTop').val();
    novoTexto = CKEDITOR.instances.editorCKEditor.getData();
    $.post("../dao/postSaveTopicoData.php",
            {idTopico: idAtual,
              titulo: novoTitulo,
              texto: novoTexto}, function(response) {
      if (response !== -1) {
        alert("AlteraÁ„o salva com sucesso!");

      } else {
        alert("Ocorreu um problema durante a alteraÁ„o do tÛpico");
      }
//      if (response !== null) {
//        alert("ok");
//      } else {
//        alert("problem");
//      }
    });
  });


//BOT’ES INDEX
// Gabinete PPPG - Seleciona o bot„o no momento em que o CÌrculo for selecionado
  $("a.cdsGabPPPGCirc")
          .mouseover(function() {
            $("a.cdsBtnGabPPPG").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsGabPPPGCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnGabPPPG").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsGabPPPGCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });
// Gabinete PPPG - Seleciona o bot„o CIRCULAR no momento em que obot„o for selecionado
  $("a.cdsBtnGabPPPG")
          .mouseover(function() {
            $("a.cdsBtnGabPPPG").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsGabPPPGCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnGabPPPG").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsGabPPPGCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });

// PÛs - GraduaÁ„o - Seleciona o bot„o no momento em que o CÌrculo for selecionado
  $("a.cdsBtnPosGradCirc")
          .mouseover(function() {
            $("a.cdsBtnPosGrad").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnPosGradCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnPosGrad").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnPosGradCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });
// PÛs - GraduaÁ„o - Seleciona o bot„o CIRCULAR no momento em que obot„o for selecionado
  $("a.cdsBtnPosGrad")
          .mouseover(function() {
            $("a.cdsBtnPosGrad").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnPosGradCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnPosGrad").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnPosGradCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });

// InovaÁ„o - Seleciona o bot„o no momento em que o CÌrculo for selecionado
  $("a.cdsBtnInovaCirc")
          .mouseover(function() {
            $("a.cdsBtnInova").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnInovaCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnInova").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnInovaCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });
// InovaÁ„o - Seleciona o bot„o CIRCULAR no momento em que obot„o for selecionado
  $("a.cdsBtnInova")
          .mouseover(function() {
            $("a.cdsBtnInova").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnInovaCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnInova").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnInovaCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });

  // Pesquisa - Seleciona o bot„o no momento em que o CÌrculo for selecionado
  $("a.cdsBtnPesqGradCirc")
          .mouseover(function() {
            $("a.cdsBtnPesqGrad").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnPesqGradCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnPesqGrad").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnPesqGradCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });
// Pesquisa - Seleciona o bot„o CIRCULAR no momento em que obot„o for selecionado
  $("a.cdsBtnPesqGrad")
          .mouseover(function() {
            $("a.cdsBtnPesqGrad").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnPesqGradCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnPesqGrad").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnPesqGradCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });

// Proquali - Seleciona o bot„o no momento em que o CÌrculo for selecionado
  $("a.cdsBtnProqualiCirc")
          .mouseover(function() {
            $("a.cdsBtnProquali").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnProqualiCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnProquali").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnProqualiCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });
// Proquali - Seleciona o bot„o CIRCULAR no momento em que obot„o for selecionado
  $("a.cdsBtnProquali")
          .mouseover(function() {
            $("a.cdsBtnProquali").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'color': '#b54242'
            });
            $("a.cdsBtnProqualiCirc").css({
              'border-color': 'transparent',
              'background-color': '#b54242'
            });
          })
          .mouseout(function() {
            $("a.cdsBtnProquali").css({
              'border': 'none',
              'background-color': 'transparent',
              'font-weight': 'bolder',
              'box-shadow': 0,
              'color': '#333'
            });
            $("a.cdsBtnProqualiCirc").css({
              'border-color': 'transparent',
              'background-color': 'transparent',
              'font-weight': 'bolder'
            });
          });
});








//$("div.overout")
//        .mouseover(function() {
//          i += 1;
//          $(this).find("span").text("mouse over x " + i);
//        })
//        .mouseout(function() {
//          $(this).find("span").text("mouse out ");
//        });
// 
// 
//
//
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
////Alterna o estado do input de altera√ß√£o do nome do projeto
//  $("#txtNomeProjeto").keypress(function() {
//    if ($(this).val().length > 0) {
//      $(this).parent().removeClass('has-error');
//    } else {
//      $('#txtNomeSetor').parent().addClass('has-error');
//    }
//  });
//  //Carrega notifica√ß√µes para o usu√°rio            
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
//  //Captura que tipo de a√ß√£o ser√° executada e
//  //Leva o nome do projeto selecionado para edi√ß√£o ao input do modal
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
//  //Limpa input do modal de cria√ß√£o e altera√ß√£o de projetos ao clicar em FECHAR
//  $('#btnSalvarAlterarNao').on('click', function() {
//    $('#txtNomeProjeto').val('');
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