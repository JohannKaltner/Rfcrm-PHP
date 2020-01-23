<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <div class='page-container'> -->
<div class="page-content--bgf7">

<?php 
if($this->session->userdata('logged_in') == false && $this->session->userdata('usuario_nivel') == 1){
	redirect('C_login');
} 
?>

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
									<a href="<?php echo base_url(); ?>C_admin">Administração</a>
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
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
					aria-selected="true">Dados de Usuarios</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
					aria-controls="profile" aria-selected="false">Registro de Atividade</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
					aria-controls="contact" aria-selected="false">Configurações do Sistema</a>
			</li>
		</ul>
		<div class="tab-content pl-3 p-1" id="myTabContent"
			style="border-left:1px solid #e0e0e0; border-right:1px solid #e0e0e0; border-bottom:1px solid #e0e0e0; border-radius:6px">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<div id="pagination_link" class="table-responsive table-responsive-data2">




					<hr>


					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroModal"
						style="font-size:15px;">Registrar Usuario
					</button><br>
					<hr>
					<div id="cliente_table">
						<table class="table table-top-campaign">
							<thead>
								<tr>
								<th>Foto</th>

									<th>Nº de Identificação <i class="fa fa-info-circle" data-toggle="tooltip"
											data-placement="top"
											title="Nº de Indentificação do Usuario no Banco de dados"
											aria-hidden="true"></i></th>
									<th>NOME</th>
									<th>SETOR</th>
									<th>NIVEL <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top"
											title="Nivel 1 = Administrador. Nivel 2 = Usuario Comum. Nivel 0 = Pendente"
											aria-hidden="true"></i></th>
									<th>DATA DE INICIO <i class="fa fa-info-circle" data-toggle="tooltip"
											data-placement="top"
											title="Data em que o Usuario foi Cadastrado no Sistema."
											aria-hidden="true"></i></th>
									<th></th>

								</tr>
							</thead>
							<tbody>
								<?php if (isset($usuarioInfo) && !empty($usuarioInfo)) { ?>
								<?php foreach ($usuarioInfo as $key => $element) { ?>
								<tr>

									<td><img style="width:90px;" src="<?php echo base_url();?>public/images/perfil/<?php echo $element['usuario_img']; ?>.png"></td>
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
                                                     <a href="<?php echo site_url('C_chat/chat'); ?>/<?php echo $element['usuario_id']; ?>">
                                                        <button class="item visualizar">
														<i class="fas fa-comments"></i></button> </a>
                                                     
 			      		                     


										<a
											href="<?php echo site_url('C_admin/exibir'); ?>/<?php echo $element['usuario_id']; ?>">
											<button class="item visualizar">
												<i class="zmdi zmdi-view-list-alt"></i>
											</button> </a>


										<a onclick="return confirm('Tem certeza que deseja deletar este registro?')"
											href="<?php echo site_url('C_admin/deletaUsuario'); ?>/<?php echo $element['usuario_id']; ?>">
											<button class="item" data-toggle="tooltip" data-placement="top"
												title="Deletar Usuario">
												<i class="zmdi zmdi-delete"></i>
											</button>
										</a>

										<!-- <button class="item" data-toggle="modal" data-target="#viewModal">
                    <i class="fas fa-search"  data-toggle="tooltip" data-placement="top" title="Visualizar"></i>
                  </button> -->

										<a>
											<div style="padding-left: 10px 10px 10px 10px">
												<button type="button" class="item" data-toggle="tooltip"
													data-placement="top" title="Exportar em PDF">
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
			<Br>
			<div class="container-fluid">
				<div><a href="<?php echo base_url('C_export/csv_log'); ?>" target="_blank" type="button" class="btn btn-success"
						data-toggle="tooltip" data-placement="top"
						title="Recarregue a pagina após o download do arquivo.">
						<i class="fa fa-file-excel-o"></i>&nbsp; Exportar como CSV</a>
					<hr>
					<h3>Registro de Atividades</h3>
				</div>
				<div>

					<div id="cliente_table">

						<table class="table table-top-campaign">
							<thead>
								<tr>
									<th> </th>
									<th> </th>
									<th> </th>
									<th> </th>
									<th> </th>
									<th></th>

								</tr>
							</thead>
							<tbody>

								<?php if (isset($logInfo) && !empty($logInfo)) { ?>
								<?php foreach ($logInfo as $key => $log) { ?>
								<tr>

									<?php if ($log['log_tipo'] == '1') { ?>
									<li class="list-group-item list-group-item-primary"><i>
											[<?php echo $log['log_data']; ?>]
											Logs <?php
                                  if ($log['log_tipo'] == '1') {
                                    echo '(Criação)';
                                  } elseif ($log['log_tipo'] == '2') {
                                    echo '(Alteração)';
                                  } else {
                                    echo '(Exclusão)';
                                  } ?>
											<?php echo $log['log_usuario_nome']; ?> <?php echo $log['log_atividade']; ?>
										</i>
									</li>


									<?php  } elseif ($log['log_tipo'] == '2') { ?>
									<li class="list-group-item list-group-item-warning">
										[<?php echo $log['log_data']; ?>]
										<?php
                                  if ($log['log_tipo'] == '1') {
                                    echo '(Criação)';
                                  } elseif ($log['log_tipo'] == '2') {
                                    echo '(Alteração)';
                                  } else {
                                    echo '(Exclusão)';
                                  } ?>
										<?php echo $log['log_usuario_nome']; ?> <?php echo $log['log_atividade']; ?>
										</i>
									</li>

									<?php } else { ?>
									<li class="list-group-item list-group-item-danger">
										[<?php echo $log['log_data']; ?>]
										<?php
                                  if ($log['log_tipo'] == '1') {
                                    echo '(Criação)';
                                  } elseif ($log['log_tipo'] == '2') {
                                    echo '(Alteração)';
                                  } else {
                                    echo '(Exclusão)';
                                  } ?>
										<?php echo $log['log_usuario_nome']; ?> <?php echo $log['log_atividade']; ?>
										</i>
									</li><?php }  ?>


								<tr>
									<?php }
               ?>
									<?php } else { ?>
								<tr>
									<td colspan="4">O Banco de LOGS está Vazio.</td>
								</tr>
								<?php } ?>

							</tbody>
						</table>
						<div class="row">
							<?php if (isset($logInfo) && is_array($logInfo)) echo $page_links; ?>
							<div class="col-lg-12 text-right">
							</div>
						</div>
					</div>
				</div>
			</div>
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
						<button type="button" class="btn  btn-sm btn-primary" data-toggle="modal"
							data-target="#exampleModal">
							<i class="fas fa-bell"></i></i>&nbsp; Novo Alerta</button>

						<!-- //
              // MODAL ───────────────────────────────────────────────────────────────────
              // -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
							aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Enviar Alerta</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<div class="modal-body">
										<form method='post' action=<?php echo base_url("C_admin/novaAlerta"); ?>>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="disabled-input"
														class=" form-control-label">Usuario</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" id="alerta_usuario"
														value="<?php echo $this->session->userdata('usuario_nome'); ?>"
														name="alerta_usuario" placeholder="Usuario"
														class="form-control">
													<input style="display:none;" type='text' id="alerta_data"
														value="<?php echo date('d-m-Y H:i'); ?>" name="alerta_data"
														placeholder="DATA" class="form-control">
												</div>
											</div>
											<hr>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="disabled-input" class=" form-control-label">Titulo da
														Alerta</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" id="alerta_titulo" name="alerta_titulo"
														placeholder="Titulo" class="form-control">

												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="textarea-input"
														class=" form-control-label">Mensagem</label>
												</div>
												<div class="col-12 col-md-9">
													<textarea name="alerta_mensagem" id="alerta_mensagem" rows="9"
														placeholder="Conteudo..." class="form-control"></textarea>
												</div>
											</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Cancelar</button>
										<button type="submit" value="save" class="btn btn-primary">Enviar
											Alerta</button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</li>
					<!-- //
// ──────────────────────────────────────────────────────────────────── MODAL ─────
// -->



					<hr>
					<li>
						<h4>Operações do Sistema </h4>
						<br>
					<li style="padding: 0 10px 10px 0" class="has-sub">
						<a type="button" href="<?php echo base_url(); ?>C_admin/backup_database" target="_blank">
							<!-- < type="button" class="btn btn-warning btn-sm"   > -->
							<i class="fa fa-database" aria-hidden="true"></i>&nbsp;Realizar Backup
						</a>
					</li>
					<li style="padding: 0 10px 10px 0" class="has-sub">
						<a type="button" href="<?php echo site_url('C_admin/resetarClientes'); ?>" data-toggle="modal"
							data-target="#confirma-deletar">
							<i class="fas fa-exclamation-triangle"></i>&nbsp;Reseta os Clientes</a>

					</li>

					<li style="padding: 0 10px 10px 0" class="has-sub">
						<a type="button" href=" <?php echo site_url('C_admin/resetarChamados'); ?>" data-toggle="modal"
							data-target="#confirma-deletar">
							<i class="fas fa-exclamation-triangle"></i>&nbsp;Resetar Chamados</a>
					</li>

					<li style="padding: 0 10px 10px 0" class="has-sub">
						<a type="button" href=" <?php echo site_url('C_admin/resetarCorrecoes'); ?>" data-toggle="modal"
							data-target="#confirma-deletar">
							<i class="fas fa-exclamation-triangle"></i>&nbsp;Resetar as Correções</a>
					</li>

					<li style="padding:0 10px 10px 0" class="has-sub">
						<a type="button" href=" <?php echo site_url('C_admin/resetarContatos'); ?>" data-toggle="modal"
							data-target="#confirma-deletar">
							<i class="fas fa-exclamation-triangle"></i>&nbsp;Resetar os Contatos</a>
					</li>
					<ul>

			</div>
		</div>
		<script>
			$('#confirma-deletar').on('show.bs.modal', function (e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
			});

		</script>

		<div class="modal fade" id="confirma-deletar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			aria-hidden="true">
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
<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo site_url('C_login/criarUsuarioAdmin') ?>">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" placeholder="Nome" name="usuario_nome"
							aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
						</div>
						<input type="email" class="form-control" value="seu_email@rfcrm.com" placeholder="E-mail"
							name="usuario_email" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Senha" aria-label="Username"
							name="usuario_senha" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-gavel" aria-hidden="true"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="SETOR" name="usuario_setor"
							aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-calendar" aria-hidden="true"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Data de Inicio" name="usuario_data_inicio"
							value="<?php date_default_timezone_set('America/Sao_Paulo');
                                                                                                                    echo date('d/m/Y'); ?>"
							aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3" style="display:none;">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-gear" aria-hidden="true"></i></span>
						</div>
						<input type="text" value="" class="form-control" placeholder="NIVEL" name="usuario_nivel"
							aria-label="Username" aria-describedby="basic-addon1">
						<small style="color:red"> *padrão, não alterar* </small>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-round btn-default" data-dismiss="modal">Cancelar</button>
				<button type="submit" value="save" class="btn btn-round btn-primary">Concluir Cadastro</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- //
// ────────────────────────────────────────── FIM DO MODAL DE ADM DE USUARIOS ─── // -->




<!-- Modal -->

<!-- END STATISTIC-->

<!-- <script>
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
</script> -->
