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
    <div class="tab-content pl-3 p-1" id="myTabContent" style="border-left:1px solid #e0e0e0; border-right:1px solid #e0e0e0; border-bottom:1px solid #e0e0e0; border-radius:6px" >
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
      <div id="pagination_link" class="table-responsive table-responsive-data2" >

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
             
            <td  ">
              <div class="table-data-feature">
                
                <!-- <a href="<?php echo site_url('C_Usuario/exibir'); ?>/<?php echo $element['usuario_id']; ?>"> -->
                  <button data-toggle="modal" data-target="#exampleModal" class="item" data-toggle="tooltip" data-placement="top" title="Acessar Usuario">
                    <i class="zmdi zmdi-view-list-alt"></i>
                  </button>
                </a>

                <a href="<?php echo site_url('C_Cliente/delete'); ?>/<?php echo $element['usuario_id']; ?>">
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


    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <h3>Menu 1</h3>
      <p>Some content here.</p>
    </div>

    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <h3>Menu 2</h3>
      <p>Some content here.</p>
    </div>

  </div>
</div>
</div>

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