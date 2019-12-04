<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <div class='page-container'> -->
<div class="page-content--bgf7">
  <!-- BREADCRUMB-->
  <section class="au-breadcrumb2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="au-breadcrumb-content">
            <div class="au-breadcrumb-left">
              <span class="au-breadcrumb-span">Você está aqui:</span>
              <ul class="list-unstyled list-inline au-breadcrumb__list">
                <li class="list-inline-item active">
                  <a href="<?php echo base_url(); ?>home">Home</a>
                </li>
                /
                <li class="list-inline-item active">
                  <a href="<?php echo base_url(); ?>C_Admin">Administração</a>
                </li>

              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END BREADCRUMB-->


  <!-- END WELCOME-->

  <!-- STATISTIC-->

  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados de Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registro de Atividade</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Configurações do Sistema</a>
      </li>
    </ul>
    <div class="tab-content pl-3 p-1" id="myTabContent" style="border-left:1px solid #e0e0e0; border-right:1px solid #e0e0e0; border-bottom:1px solid #e0e0e0; border-radius:6px">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div id="pagination_link" class="table-responsive table-responsive-data2">

          <div id="cliente_table">
            <table class="table table-top-campaign">
              <thead>
                <tr>
                  <th>Nº de Identificação</th>
                  <th>NOME</th>
                  <th>SETOR</th>
                  <th>NIVEL</th>
                  <th>DATA DE INICIO</th>
                  <th></th>

                </tr>
              </thead>
              <tbody>
                <?php if (isset($usuarioInfo) && !empty($usuarioInfo)) { ?>
                  <?php foreach ($usuarioInfo as $key => $element) { ?>
                    <tr>

                      <td><?php echo $element['usuario_id']; ?></td>
                      <td><?php echo $element['usuario_nome']; ?></td>
                      <td><?php echo $element['usuario_setor']; ?></td>
                      <td><?php echo $element['usuario_nivel']; ?></td>
                      <td><?php echo $element['usuario_data_inicio']; ?></td>

                      <td ">
              <div class=" table-data-feature">

                        <!-- <a href="<?php echo site_url('C_admin/exibir'); ?>/<?php echo $usuarios['usuario_id']; ?>">  -->
                        <!-- <button data-toggle="modal" id="usuarioView" data-codigo="<?php echo $usuarios['usuario_id']; ?>" data-target="#usuariosViewModal" class="item" data-toggle="tooltip" data-placement="top" title="Acessar Usuario">
                          <i class="zmdi zmdi-view-list-alt"></i>
                        </button> </a> -->
                        <a href="<?php echo site_url('C_admin/exibir'); ?>/<?php echo $linha->usuario_id; ?>">
                        <button class="item visualizar" >
                          <i class="zmdi zmdi-view-list-alt"></i>
                        </button> </a>


                        <a onclick="return confirm('Tem certeza que deseja deletar este registro?')" href="<?php echo site_url('C_Admin/deletaUsuario'); ?>/<?php echo $element['usuario_id']; ?>">
                          <button class="item" data-toggle="tooltip" data-placement="top" title="Deletar Usuario">
                            <i class="zmdi zmdi-delete"></i>
                          </button>
                        </a>

                        <!-- <button class="item" data-toggle="modal" data-target="#viewModal">
                    <i class="fas fa-search"  data-toggle="tooltip" data-placement="top" title="Visualizar"></i>
                  </button> -->

                        <a>
                          <div style="padding-left: 10px 10px 10px 10px">
                            <button type="button" class="item" data-toggle="tooltip" data-placement="top" title="Exportar em PDF">
                              <i class="fas fa-file-pdf"></i></button> </div>
                        </a>
          </div>
          </td>
          </tr>
        <?php } ?>
      <?php } else { ?>
        <tr>
          <td colspan="4">O Banco de Clientes está Vazio.</td>
        </tr>
      <?php } ?>
      <!-- insira aqui o BACKUP DA TABLE   -->
      <!-- até aqui -->

      </tbody>
      </table>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 text-right">
          <?php if (isset($usuarioInfo) && is_array($usuarioInfo)) echo $page_links; ?>
        </div>
      </div>


    </div>

    <!--
//
// ─── TAB REGISTRO DE ATIVIDADE ──────────────────────────────────────────────────
// -->


    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <h3>Registro de Atividades</h3>
    </div>

    <!-- //
    // ───────────────────────────── FIM TAB REGISTRO DE ATIVIDADE ─────
    // -->


    <!-- //
    // ─── TAB CONFIGURACOES DO SISTEMA ────────────────────────────────
    // -->


    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <Br>
      <div class="container-fluid">
        <h3>Configurações do Sistema</h3>
        <ul class="list-unstyled" style="padding: 30px 10px 10px 10px">
          <li class="has-sub" style="padding: 5px 10px 10px px">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-bell"></i></i>&nbsp; Novo Alerta</button>

            <!-- //
              // MODAL ───────────────────────────────────────────────────────────────────
              // -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enviar Alerta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form method='post' action=<?php echo base_url("C_Admin/novaAlerta"); ?>>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label for="disabled-input" class=" form-control-label">Usuario</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" id="alerta_usuario" value="<?php echo $this->session->userdata('usuario_nome'); ?>" name="alerta_usuario" placeholder="Usuario" class="form-control">
                          <input style="display:none;" type='text' id="alerta_data" value="<?php echo date('d-m-Y H:i'); ?>" name="alerta_data" placeholder="DATA" class="form-control">
                        </div>
                      </div>
                      <hr>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label for="disabled-input" class=" form-control-label">Titulo da Alerta</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <input type="text" id="alerta_titulo" name="alerta_titulo" placeholder="Titulo" class="form-control">

                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col col-md-3">
                          <label for="textarea-input" class=" form-control-label">Mensagem</label>
                        </div>
                        <div class="col-12 col-md-9">
                          <textarea name="alerta_mensagem" id="alerta_mensagem" rows="9" placeholder="Conteudo..." class="form-control"></textarea>
                        </div>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" value="save" class="btn btn-primary">Enviar Alerta</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- //
// ──────────────────────────────────────────────────────────────────── MODAL ─────
// -->



          </li>
          <hr>
          <li style="padding: 5px 10px 10px 0" class="has-sub">
            <button type="button" class="btn btn-danger" href="<?php echo site_url('C_Admin/resetarClientes'); ?>" data-toggle="modal" data-target="#confirma-deletar">
              <i class="fas fa-exclamation-triangle"></i>&nbsp;Resetar TODOS os Clientes</button>
          </li>
          <li style="padding: 5px 10px 10px 0" class="has-sub">
            <button type="button" class="btn btn-danger" href="<?php echo site_url('C_Admin/resetarChamados'); ?>" data-toggle="modal" data-target="#confirma-deletar">
              <i class="fas fa-exclamation-triangle"></i>&nbsp;Resetar TODOS os Chamados</button>
          </li>
          <li style="padding: 5px 10px 10px 0" class="has-sub">
            <button type="button" class="btn btn-danger" href="<?php echo site_url('C_Admin/resetarCorrecoes'); ?>" data-toggle="modal" data-target="#confirma-deletar">
              <i class="fas fa-exclamation-triangle"></i>&nbsp;Resetar TODAS as Correções</button>
          </li>
          <li style="padding: 5px 10px 10px 0" class="has-sub">
            <button type="button" class="btn btn-danger" href="<?php echo site_url('C_Admin/resetarContatos'); ?>" data-toggle="modal" data-target="#confirma-deletar">
              <i class="fas fa-exclamation-triangle"></i>&nbsp;Resetar TODOS os Contatos</button>
          </li>
          <ul>

      </div>
    </div>
    <script>
      $('#confirma-deletar').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
      });
    </script>

    <div class="modal fade" id="confirma-deletar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Alerta</h4>
          </div>

          <div class="modal-body">
            <p>Você realmente deseja deletar Todos os registros?</p>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-danger btn-ok"><span style="color:white;">Sim, quero deletar!</span></a>
          </div>
        </div>
      </div>
    </div>
    <!--//
    // ────────────────────────────── FIM TAB CONFIGURACOES DO SISTEMA ─────>
    // -->


  </div>
</div>
</div>


<!-- //
// ─── MODAL PARA ADMINISTRACAO DE USUARIOS ───────────────────────────────────── // -->

<!-- Modal -->
<div class="modal fade" id="usuariosViewModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Analise do Usuario <?php echo $element['usuario_nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="card">
          <form method='post'>
            <div class="card-header user-header alt bg-dark">
              <div class="media">
                <a href="#">
                  <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/icon/avatar-01.jpg">
                </a>
                <div class="media-body">
                  <h2 class="text-light display-6"><?php echo $element['usuario_nome']; ?></h2>
                  <p>Project Manager</p>
                </div>
              </div>
            </div>


            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="#">
                  <i class="fa fa-envelope-o"></i> Mail Inbox
                  <span class="badge badge-primary pull-right">10</span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fa fa-tasks"></i> Recent Activity
                  <span class="badge badge-danger pull-right">15</span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fa fa-bell-o"></i> Notification
                  <span class="badge badge-success pull-right">11</span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#">
                  <i class="fa fa-comments-o"></i> Message
                  <span class="badge badge-warning pull-right r-activity">03</span>
                </a>
              </li>
            </ul>
          </form>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //
// ────────────────────────────────────────── FIM DO MODAL DE ADM DE USUARIOS ─── // -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- END STATISTIC-->

<script>
  //Quando clicar em visualizar:
  $('.visualizar').click(function() {
    //Os dados
    let data = JSON.parse($(this).attr('data-usuario'));

    //Veja o código no console
    console.log(data);

    //#IdModal: Id do seu modal.
    //Show: abre o modal.
    $('#usuariosViewModal').modal('show');

    /*O elemento em que você queira mostrar os dados,
    ao clicar no botão de visualizar. 
    Aqui, você poder fazer qualquer coisa:*/
    $('#modal-content').html(JSON.stringify(data));
  })
</script>