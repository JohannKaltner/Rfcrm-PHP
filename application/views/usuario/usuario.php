<style>
	body {
		width: 100%;
		height: 100%;


	}

	#cardperfil:hover {
		-webkit-box-shadow: 4px 4px 26px -4px rgba(0, 10, 191, 1);
		-moz-box-shadow: 4px 4px 26px -4px rgba(0, 10, 191, 1);
		box-shadow: 4px 4px 26px -4px rgba(0, 10, 191, 1);
		transition: 0.7s
	}

	#cardperfil {
		-webkit-transition: 1s;
		margin: auto;
		width: 80%;
		background: #fff;
		border: 1px solid #dddddd;
		padding: 10px;
		border-radius: 5px;
		-webkit-box-shadow: 4px 4px 26px -4px rgba(0, 0, 0, 0.63);
		-moz-box-shadow: 4px 4px 26px -4px rgba(0, 0, 0, 0.63);
		box-shadow: 4px 4px 26px -4px rgba(0, 0, 0, 0.63);

	}

	body {
		padding: 1rem;
	}


	#listgroup:hover {

		-moz-transform: scale(1.0);
		-webkit-transform: scale(1.0);
		transform: scale();
		position: absolute;
		transition: 0.7s
	}

	#listgroup {
		-webkit-transition: 1s;

	}


	#no-display {
		display: none;
		-webkit-transition: 1s;
	}

	#card:hover #no-display {
		transition-delay: 0.7s;
		transition: 1s;
		display: block
	}

	.chamadogroup:hover a {
		color: white;
	}

</style>
<section class="p-t-20">
	<div class="page-content--bgf7">
		<div class="container">
			<div class="page-content--bgf7">
				<div class="card-body card-block">

					<div id='cardperfil' class="col-md-12">
						 
						<!-- PARA DEBUG -->
						<!-- PARA DEBUG -->

						<div class="card-body" style=" margin: 0 auto;text-align:center;width: 80%;">
							<div>
								<div class="mx-auto d-block">
									<img class="rounded-circle mx-auto d-block"
										src="<?php echo base_url(); ?>public/images/perfil/<?php echo $linha['0']->usuario_nome; ?>.jpg"
										alt="SEM FOTO DE PERFIL">
									<div class="col-md-12">
										<div class="row">
										<!-- <?php print_r($clientes);?> -->
												<form method='post'
												action="<?php echo site_url('C_admin/exibir') ?>/<?php echo $linha['0']->usuario_id; ?>">


												<div class="col-md-2" style="margin: 0 auto; width: 50%; ">
													<div class="form-group justify-content-center">
														<label for="usuario_id" class=" form-control-label">ID
															do
															Cliente</label>
														<input disabled type="text" id="usuario_id"
															style="text-align: center"
															value="<?php echo $linha[0]->usuario_id; ?>"
															name="cod_cliente" placeholder="cod_cliente"
															class="form-control">
													</div>
												</div>

												<div class="col-md-4" style="margin: 0 auto; width: 50%; ">
													<div class="form-group justify-content-center">
														<label for="usuario_nome"
															class=" form-control-label">NOME</label>
														<input style="text-align: center" disabled type="text"
															id="usuario_nome"
															value="<?php echo $linha[0]->usuario_nome; ?>"
															name="usuario_nome" class="form-control">
													</div>
												</div>

												<div class="col-md-3" style="margin: 0 auto; width: 50%;  float: left;">
													<div class="form-group">
														<label for="usuario_setor"
															class=" form-control-label">Setor</label>
														<input style="text-align: center" disabled type="text"
															id="usuario_setor"
															value="<?php echo $linha[0]->usuario_setor; ?>"
															name="usuario_setor" class="form-control">
													</div>
												</div>


												<div class="col-md-6" style="margin: 0 auto; width: 50%;float:left;   ">
													<div class="form-group justify-content-center">
														<label for="usuario_email" class=" form-control-label">Email do
															Cliente</label>
														<input style="text-align: center" disabled type="text"
															id="usuario_email"
															value="<?php echo $linha[0]->usuario_email; ?>"
															name="usuario_email" placeholder="usuario_email"
															class="form-control">
													</div>
												</div>

												<div class="col-md-2" style="margin: 0 auto; width: 50%;float:left;   ">
													<div class="form-group justify-content-center">
														<label for="usuario_email"
															class=" form-control-label">Nivel</label>
														<input style="text-align: center" disabled type="text"
															id="usuario_email"
															value="<?php echo $linha[0]->usuario_nivel; ?>"
															name="usuario_email" placeholder="usuario_email"
															class="form-control">
													</div>
												</div>
										</div>

									</div>
									<hr>

									<div class="col-md-4" style="margin: 0 auto; width: 50%; ">
										<div class="form-group">
											<div style="   display:inline;">
												<button type="button" data-toggle="modal" data-target="#editModal">
													<i class="fa fa-edit"></i>
													Editar
												</button>

											</div>

										</div>
									</div>


									<div class="col-md-12" style='padding-left:9px;'>
										<div style="margin: auto;width: 100%;background: #fff; padding-left:0; ">
											<ul class="list-group list-group-flush">
												<li class="list-group-item">
													<button type="button" class="btn " data-toggle="modal"
														data-target="#modalChamado" style="padding-left:5px;">

														<i class="fa fa-envelope"></i>Chamados
														<span class="badge badge-primary pull-right"><?php
	$this->db->select('*');
	$this->db->where('chamado_id_usuario', $this->uri->segment(3));
	$query = $this->db->get('chamado');
	$num = $query->num_rows();
	?>

																<?php echo $num ?></span>
														</button>

														<button type="button" class="btn  " data-toggle="modal"
															data-target="#modalCorrecao" style="padding-left:5px;">
															<i class="fa fa-edit"></i> Correções
															<span class="badge badge-danger pull-right"><?php
	$this->db->select('*');
	$this->db->where('correcao_usuario_id', $this->uri->segment(3));
	$query = $this->db->get('correcao_chamado');
	$num = $query->num_rows();
	?>

																<?php echo $num ?></span>
														</button>

														<button type="button" class="btn" data-toggle="modal"
															data-target="#modalCliente" style="padding-left:5px;">
															<i class="fa fa-user-circle"></i> Clientes
															<span class="badge badge-success pull-right"><?php
	$this->db->select('*');
	$this->db->where('cliente_id_usuario', $this->uri->segment(3));
	$query = $this->db->get('cliente');
	$num = $query->num_rows();
	?>

																<?php echo $num ?></span>
														</button>

														<button type="button" class="btn " data-toggle="modal"
															data-target="#modalContato" style="padding-left:5px;">
															<i class="fa fa-vcard"></i> Contatos
															<span class="badge badge-warning pull-right r-activity"><?php
	$this->db->select('*');
	$this->db->where('contato_id_usuario', $this->uri->segment(3));
	$query = $this->db->get('contato_secundario');
	$num = $query->num_rows();
	?>

																<?php echo $num ?></span>
														</button>

													</li>
													<li class="list-group-item">
													</li>

												</ul>

											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</section>






<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edição de Usuario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- <form method='post' action="<?php echo base_url('C_usuario/editarUsuario/'); ?>"
											class="form-horizontal"> -->
				<form method='post'
					action="<?php echo site_url('C_usuario/editarUsuario'); ?>/<?php echo $linha[0]->usuario_id; ?>"
					class="form-horizontal">
					<div class="row form-group">
						<div class="col col-md-3">
							<label for="usuario_email" class=" form-control-label">Email</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="email" id="usuario_email" value="<?php echo $linha[0]->usuario_email; ?>"
								name="usuario_email" placeholder="E-Mail do Usuario..." class="form-control">
							<span class="help-block"> </span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col col-md-3">
							<label for="usuario_nome" class=" form-control-label">Nome</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" id="usuario_nome" value="<?php echo $linha[0]->usuario_nome; ?>"
								name="usuario_nome" placeholder="Nome do Usuario" class="form-control">
							<span class="help-block"> </span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col col-md-3">
							<label for="usuario_setor" class=" form-control-label">Setor</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" id="usuario_setor" value="<?php echo $linha[0]->usuario_setor; ?>"
								name="usuario_setor" placeholder="Setor do Usuario..." class="form-control">
							<span class="help-block"> </span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col col-md-3">
							<label for="usuario_nivel" class=" form-control-label">Nivel</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="text" id="usuario_nivel" value="<?php echo $linha[0]->usuario_nivel; ?>"
								name="usuario_nivel" placeholder="Nivel de Usuario..." class="form-control">
							<span class="help-block"> </span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col col-md-3">
							<label for="usuario_email" class=" form-control-label">Email</label>
						</div>
						<div class="col-12 col-md-9">
							<input type="email" id="usuario_email" value="<?php echo $linha[0]->usuario_email; ?>"
								name="usuario_email" placeholder="Email" class="form-control">
							<span class="help-block"> </span>
						</div>
					</div>


					<hr>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" value="save" class="btn btn-primary">Salvar</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalCorrecao" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<?php if (!empty($correcoes)) {
    				foreach ($correcoes as $correcao) {?>
					<div class="col-md-6">
						<div class="card"
							href="<?php echo base_url(); ?>C_admin/exibir/<?php echo $correcao->correcao_id; ?>"
							id="listgroup" style="position: relative!important;">
							<div class="card-header">
								<strong class="card-title">Corrigindo o Chamado
									<small>
										<span class="badge badge-danger float-right mt-1">Corrigindo
											o Chamado de ID:
											<?php echo $correcao->correcao_id_chamado; ?></span>
									</small>
								</strong>
							</div>
							<div id="card" class="card-body">
								<p class="card-text">
									<h5 onHover onMouseOver="this.style.color='#000000'"
										onMouseOut="this.style.color='#000000'" id="chamadogroup" class="mb-1">
										<?php echo $correcao->correcao_atendente_cliente; ?>,<br>
										
										<small class="mb-1"> Dia <b style="color:black">
												<?php echo $correcao->correcao_data; ?>, </b> as
											<b
												style="color:black"><?php echo $correcao->correcao_hora; ?></b></small><br>
									</h5>
								</p>
								<div id="no-display">
									<p class="mb-1">Entrou em contato com
										<b style="color:black"><?php echo $correcao->correcao_atendente_rf; ?></b>
									 	para <b style="color:black"><?php echo $correcao->correcao_atividade; ?></b> em
										relação a
										<b style="color:black">
											<?php echo $correcao->correcao_assunto; ?></b>, o chamado
										realizado pelo numero
										<b><?php echo $correcao->correcao_telefone; ?></b>,
										teve duração de <small> <b
												style="color:black"><?php echo $correcao->correcao_duracao_hora; ?></b>
											Hora e <b
												style="color:black"><?php echo $correcao->correcao_duracao_minuto; ?></b>
											Minutos.</small>
									</p>
									<hr>
									<br>
									Observações:<br><b
										style="color:black"><?php echo $correcao->correcao_obs; ?></b><br>
									<hr>
									<button data-toggle="modal" data-target="#correcaoModal"
										onMouseOver="this.style.color='#007bff'"
										onMouseOut="this.style.color='#000000'">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										<p>Editar</p>
									</button>
								</div>
							</div>
						</div>
					</div>
					<?php }
					}?>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalChamado" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="largeModalLabel">Chamados registrados pelo Usuario <?php echo $linha[0]->usuario_nome?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<?php if (!empty($chamados)) {
    foreach ($chamados as $chamado) {?>
					<div class="col-md-6">
						<div class="card"
							href="<?php echo base_url(); ?>C_admin/exibir/<?php echo $chamado->chamado_id; ?>"
							id="listgroup" style="position: relative!important;">
							<div class="card-header">
								<strong class="card-title">Chamado
									<small>
										<span class="badge badge-primary float-right mt-1">Chamado
											de ID:<?php echo $chamado->chamado_id; ?></span>
									</small>teste
								</strong>
							</div>
							<div id="card" class="card-body">
								<p class="card-text">
									<h5 onHover onMouseOver="this.style.color='#000000'"
										onMouseOut="this.style.color='#000000'" id="chamadogroup" class="mb-1">
										<?php echo $chamado->chamado_atendente_cliente; ?>,<br>
										<small class="mb-1">Em nome da(o)</small>
										<?php echo $chamado->cliente_nome; ?>,
										<small class="mb-1"> Dia <b style="color:black">
												<?php echo $chamado->chamado_data; ?>, </b> as
											<b style="color:black"><?php echo $chamado->chamado_hora; ?></b></small><br>
									</h5>
								</p>
								<div id="no-display">
									<p class="mb-1">Entrou em contato com
										<b style="color:black"><?php echo $chamado->chamado_atendente_rf; ?></b>
										para <b style="color:black"><?php echo $chamado->chamado_atividade; ?></b>em
										relação a
										<b style="color:black">
											<?php echo $chamado->chamado_assunto; ?></b>, o chamado
										realizado pelo numero
										<b><?php echo $chamado->chamado_telefone; ?></b>,
										teve duração de <small> <b
												style="color:black"><?php echo $chamado->chamado_duracao_hora; ?></b>
											Hora e <b
												style="color:black"><?php echo $chamado->chamado_duracao_minuto; ?></b>
											Minutos.</small>
									</p>
									<hr>
									<br>
									Observações:<br><b style="color:black"><?php echo $chamado->chamado_obs; ?></b><br>
									<hr>
									<button data-toggle="modal" data-target="#correcaoModal"
										onMouseOver="this.style.color='#007bff'"
										onMouseOut="this.style.color='#000000'">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										<p>Editar</p>
									</button>
								</div>
							</div>
						</div>
					</div>
					<?php }
					}?>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<div id="cliente_table">
 					<table class="table table-data2">
 						<thead>
 							<tr>
 								<th>Nº de Identificação</th>
 								<th>Codigo</th>
 								<th>Nome</th>
 								<!-- <th>CPF</th> -->
 								<!-- <th>CNPJ</th> -->
 								<th>TELEFONE</th>
 								<th>CIDADE</th>
  								 
 							</tr>
 						</thead>
 						<tbody>
 							<?php if (isset($clientes) && !empty($clientes)) { ?>
 								<?php foreach ($clientes as  $cliente) { ?>
 									<tr>
 										<td><?php echo $cliente->cliente_id; ?></td>
 										<td><?php echo $cliente->cod_cliente; ?></td>
 										<td><?php echo $cliente->cliente_nome; ?></td>
  										<td><?php echo $cliente->cliente_telefone; ?></td>
 										<td><?php echo $cliente->cliente_cidade; ?></td>	 
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

		</div>
	</div>
</div>

<div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="largeModalLabel">Contatos registrados pelo Usuario <?php echo $linha[0]->usuario_nome?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12">

					<!-- TOP CAMPAIGN-->
					<div class="table-responsive table--no-card m-b-0">
						<table class="table table-borderless table-striped table-earning">
							<thead>
								<tr>
									<th>ID</th>
									<th>ID do Cliente</th>
									<th>Nome</th>
									<th>Telefone</th>
									<th>E-Mail</th>
									<th>Função</th>
									
									<!-- <th>Ferramentas</th> -->

								</tr>
							</thead>
							<tbody>

 								<?php
							if (isset($contatos) && !empty($contatos)) {
    							foreach ($contatos as $contato) {?>
								<tr>
									<td><?php echo $contato->contato_secundario_id; ?></td>
									<td><?php echo $contato->cliente_contato_id; ?></td>
									<td><?php echo $contato->contato_secundario_nome; ?></td>
									<td><?php echo $contato->contato_secundario_telefone; ?></td>
									<td><?php echo $contato->contato_secundario_email; ?></td>
									<td><?php echo $contato->contato_secundario_funcao; ?></td>
									<!-- <td>
										 <div>
											<button style="padding:0px 10px 0 0" data-toggle="modal"
												data-target="#contatoEditModal" type="button"><i
													class="zmdi zmdi-edit"></i> </button>
											<a
												href="<?php echo base_url('C_cliente/deletaContato') ?>/<?php echo $contato->contato_secundario_id; ?>">
												<button><i class="zmdi zmdi-delete"></i> </button></a>
										</div> 
									</td> -->
								</tr>
								<?php }
							}?>

							</tbody>
						</table>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Salvar mudanças</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Salvar mudanças</button>
			</div>
		</div>
	</div>
</div>
