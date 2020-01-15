<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style>
	body {
		padding: 1rem;
	}

	#listgroup:hover {

		-moz-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		transform: scale(1.1);
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
<?php
date_default_timezone_set('America/Sao_Paulo'); ?>
<section class="p-t-20">
	<div class="page-content--bgf7">
		<div class="container">
			<div class="row ">
				<div class="col-lg-12">
					<div>
						<div class="container">
							<div class="default-tab">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<!-- AREAS -->
										<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
											role="tab" aria-controls="nav-home" aria-selected="true" style="color:#2C0CB8;">ÁREA DO
											CLIENTE</a>

										<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
											role="tab" aria-controls="nav-profile" aria-selected="false"
											style="color:#2C0CB8;">CHAMADOS & CORREÇÕES</a>

										<a class="nav-item nav-link" id="nav-contato-tab" data-toggle="tab" href="#nav-contato"
											role="tab" aria-controls="nav-contato" aria-selected="false"
											style="color:#2C0CB8;">CONTATOS</a>

										<!-- FIM AREAS  -->

									</div>
								</nav>


								<div class="tab-content pl-3 pt-2" id="nav-tabContent">

									<!-- NAV HOME   -->
									<div class="tab-pane fade show active" id="nav-home" role="tabpanel"
										aria-labelledby="nav-home-tab">
										<div>
											<hr>
											<button data-toggle="modal" data-target="#editModal"
												onMouseOver="this.style.color='#007bff'" onMouseOut="this.style.color='#000000'">
												<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												<p>Editar Cliente</p>
											</button>

											<button onclick="aguarde()" style="padding-left:10px" data-toggle="modal"
												data-target="# " onMouseOver="this.style.color='#007bff'"
												onMouseOut="this.style.color='#000000'">
												<i class="fas fa-file-pdf" style='color:Red;' aria-hidden="true"></i>
												<p>Exportar como PDF</p>
											</button>

											<!-- <a>
 													<div style="padding-left: 10px 10px 10px 10px">
 														<button type="button" class="item" data-toggle="tooltip" data-placement="top" title="Exportar em PDF">
 															<i class="fas fa-file-pdf"></i></button> </div>
 												</a> --><br>
											<?php if(!empty($linha['0']->cliente_ultima_alteracao)){ ?>
											<small> atualizado pela ultima vez em:
												<?php echo $linha['0']->cliente_ultima_alteracao; ?>
												<?php } ?></small>
												<hr>

												<!-- PARA DEBUGAR A VARIAVEL -->
												<!-- <?php print_r($linha);?>   -->
												<!-- PARA DEBUGAR A VARIAVEL  -->

												<form method='post' action="<?php echo site_url('C_cliente/exibir') ?>/<?php echo $linha['0']->cliente_id; ?>">


													<div class="form-group">
														<label for="cliente_id" class=" form-control-label">NUMERO DO ID</label>
														<input type="text" id="cliente_id"
															value="<?php echo $linha['0']->cliente_id; ?>" name="cliente_id"
															placeholder="Id" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="cliente_id" class=" form-control-label">Codigo do Cliente</label>
														<input type="text" id="cliente_id"
															value="<?php echo $linha['0']->cod_cliente; ?>" name="cod_cliente"
															placeholder="NULO" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="nome" class=" form-control-label">Nome do
															Cliente</label>
														<input type="text" id="company"
															value="<?php echo $linha['0']->cliente_nome; ?>" name="cliente_nome"
															placeholder="Insira o nome do Cliente" disabled="" class="form-control">
													</div>
													<div class="form-group">
														<label for="cpf/cnpj" class=" form-control-label">CPF</label>
														<input type="text" id="cliente_cpf"
															value="<?php echo $linha['0']->cliente_cpf; ?>" name="cliente_cpf"
															placeholder="Insira o CNPJ do Cliente" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="cpf/cnpj" class=" form-control-label">CNPJ</label>
														<input type="text" id="cliente_cnpj"
															value="<?php echo $linha['0']->cliente_cnpj; ?>" name="cliente_cnpj"
															placeholder="Insira o CNPJ do Cliente" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="endereco" class=" form-control-label">Endereço </label>
														<input type="text" id="vat" name="cliente_endereco"
															value="<?php echo $linha['0']->cliente_endereco; ?>"
															placeholder="Insira o Endereço do Cliente" class="form-control"
															disabled="">
													</div>
													<div class="form-group">
														<label for="bairro" class=" form-control-label">Bairro</label>
														<input type="text" id="street" name="cliente_bairro"
															value="<?php echo $linha['0']->cliente_bairro; ?>"
															placeholder="Insira o Bairro do Cliente" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="cep" class=" form-control-label">Cep</label>
														<input type="text" id="cliente_cep" name="cliente_cep"
															value="<?php echo $linha['0']->cliente_cep; ?>"
															placeholder="Insira o Cep do Cliente" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="cidade" class=" form-control-label">Cidade</label>
														<input type="text" id="city" name="cliente_cidade"
															value="<?php echo $linha['0']->cliente_cidade; ?>"
															placeholder="Insira a Cidade do Cliente" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="estado" class=" form-control-label">Estado</label>
														<input type="text" id="cliente_estado" name="cliente_estado"
															value="<?php echo $linha['0']->cliente_estado; ?>"
															placeholder="Insira o Estado do Cliente" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="postal-code" class=" form-control-label">País</label>
														<input type="text" id="postal-code" name="cliente_pais"
															value="<?php echo $linha['0']->cliente_pais; ?>"
															placeholder="Insira o País do Cliente" class="form-control" disabled="">
													</div>
													<div class="form-group">
														<label for="postal-code" class=" form-control-label">Insc.
															Estadual</label>
														<input type="text" id="cliente_inscricao_estadual"
															name="cliente_inscricao_estadual"
															value="<?php echo $linha['0']->cliente_inscricao_estadual; ?>"
															placeholder="Insira a Insc. Estadual do Cliente" class="form-control"
															disabled="">
													</div>
													<div class="form-group">
														<label for="postal-code" class=" form-control-label">Categoria</label>
														<input type="text" id="postal-code" name="cliente_categoria"
															value="<?php echo $linha['0']->cliente_categoria; ?>"
															placeholder="Defina uma Categoria para o Cliente" class="form-control"
															disabled="">
													</div>
													<div class="form-group">
														<label for="vat" class=" form-control-label">E-Mail </label>
														<input type="email" id="cliente_email" name="cliente_email"
															value="<?php echo $linha['0']->cliente_email; ?>"
															placeholder="Insira o Endereço de E-Mail do Cliente" class="form-control"
															disabled="">
													</div>
													<div class="form-group">
														<label for="postal-code" class=" form-control-label">Telefone</label>
														<input type="text" id="cliente_telefone" name="cliente_telefone"
															value="<?php echo $linha['0']->cliente_telefone; ?>"
															placeholder="Insira o Telefone do Cliente" class="form-control"
															disabled="">
													</div>
														<!-- <?php print_r($linha);?> -->
												</form>
										</div>
									</div>
									<!-- FIM NAV HOME -->



									<!-- NAV CONTATO -->
									<div class="tab-pane fade" id="nav-contato" role="tabpanel"
										aria-labelledby="nav-contato-tab">
										<div style="align-items: center;">
											<div class='row'>
												<div class="col-md-12">

													<!-- TOP CAMPAIGN-->
													<div class="table-responsive table--no-card m-b-30">
														<table class="table table-borderless table-striped table-earning">
															<thead>
																<tr>
																	<th>ID</th>
																	<th>Nome</th>
																	<th>Telefone</th>
																	<th>E-Mail</th>
																	<th>Função</th>
																	<th>Ferramentas</th>

																</tr>
															</thead>
															<tbody>
																<button type="button" class="btn btn-primary" data-toggle="modal"
																	data-target="#contatoModal" style="  font-size:18px;">Novo Contato
																</button>
																<hr>
																<?php
                                                if (isset($contatos) && !empty($contatos)) {
                                                   foreach ($contatos as $contato) { ?>
																<tr>
																	<td><?php echo $contato->contato_secundario_id; ?></td>
																	<td><?php echo $contato->contato_secundario_nome; ?></td>
																	<td><?php echo $contato->contato_secundario_telefone; ?></td>
																	<td><?php echo $contato->contato_secundario_email; ?></td>
																	<td><?php echo $contato->contato_secundario_funcao; ?></td>
																	<td>
																		<div>
																			<button style="padding:0px 10px 0 0" data-toggle="modal"
																				data-target="#contatoEditModal" type="button"><i
																					class="zmdi zmdi-edit"></i> </button>
																			<a
																				href="<?php echo base_url('C_cliente/deletaContato') ?>/<?php echo $contato->contato_secundario_id; ?>">
																				<button><i class="zmdi zmdi-delete"></i> </button></a>
																		</div>
																	</td>
																</tr>
																<?php }
                                                } ?>

															</tbody>
														</table>
													</div>

												</div>
											</div>
										</div>
									</div>
									<!-- FIM NAV CONTATO -->



									<!-- NAV CHAMADOS/CORRECAO -->
									<div class="tab-pane fade" id="nav-profile" role="tabpanel"
										aria-labelledby="nav-profile-tab">
										<div style="align-items: center;">

											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
														href="#tab_chamados" role="tab" aria-controls="tab_chamados"
														aria-selected="true">Chamados</a>
													<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
														href="#tab_correcao" role="tab" aria-controls="tab_correcao"
														aria-selected="false">Correções</a>

												</div>
											</nav>

											<br>

											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<!-- TAB CHAMADO -->
												<div class="tab-pane fade show active" id="tab_chamados" role="tabpanel"
													aria-labelledby="tab_chamados">
													<button type="button" class="btn btn-primary" data-toggle="modal"
														data-target="#exampleModal" style="font-size:18px;">Abrir Chamado
													</button>
													<hr>
													<div class="col-lg-12">
														<div class="row">
															<?php if (!empty($chamados)) {
                                                foreach ($chamados as $chamado) { ?>
															<div class="col-md-6">
																<div class="card"
																	href="<?php echo base_url(); ?>C_cliente/exibir/<?php echo $chamado->chamado_id; ?>"
																	id="listgroup" style="position: relative!important;">
																	<div class="card-header">
																		<strong class="card-title">Chamado
																			<small>
																				<span class="badge badge-primary float-right mt-1">Chamado
																					de ID:<?php echo $chamado->chamado_id; ?></span>
																			</small>
																		</strong>
																	</div>
																	<div id="card" class="card-body">
																		<p class="card-text">
																			<h5 onHover onMouseOver="this.style.color='#000000'"
																				onMouseOut="this.style.color='#000000'" id="chamadogroup"
																				class="mb-1">
																				<?php echo $chamado->chamado_atendente_cliente; ?>,<br>
																				<small class="mb-1">Em nome da(o)</small>
																				<?php echo $chamado->cliente_nome; ?>,
																				<small class="mb-1"> Dia <b style="color:black">
																						<?php echo $chamado->chamado_data; ?>, </b> as
																					<b
																						style="color:black"><?php echo $chamado->chamado_hora; ?></b></small><br>
																			</h5>
																		</p>
																		<div id="no-display">
																			<p class="mb-1">Entrou em contato com
																				<b
																					style="color:black"><?php echo $chamado->chamado_atendente_rf; ?></b>
																				para <b
																					style="color:black"><?php echo $chamado->chamado_atividade; ?></b>em
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
																			Observações:<br><b
																				style="color:black"><?php echo $chamado->chamado_obs; ?></b><br>
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
                                             } ?>
														</div>
													</div>
												</div>
												<!-- FIM TAB CHAMADO -->

												<!-- INICIO TAB CORRECAO -->
												<div class="tab-pane fade" id="tab_correcao" role="tabpanel"
													aria-labelledby="tab_correcao">
													<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#correcaoModal" style="font-size:18px;">Abrir Correção
                                       </button> -->
													<hr>
													<div class="col-lg-12">
														<div class="row">
															<?php if (!empty($correcoes)) {
                                                foreach ($correcoes as $correcao) { ?>
															<div class="col-md-6">
																<div class="card"
																	href="<?php echo base_url(); ?>C_cliente/exibir/<?php echo $correcao->correcao_id; ?>"
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
																				onMouseOut="this.style.color='#000000'" id="chamadogroup"
																				class="mb-1">
																				<?php echo $correcao->correcao_atendente_cliente ; ?>,<br>
																				<small class="mb-1">Em nome da(o)</small>
																				<?php echo $correcao->correcao_nome_cliente; ?>,
																				<small class="mb-1"> Dia <b style="color:black">
																						<?php echo $correcao->correcao_data; ?>, </b> as
																					<b
																						style="color:black"><?php echo $correcao->correcao_hora; ?></b></small><br>
																			</h5>
																		</p>
																		<div id="no-display">
																			<p class="mb-1">Entrou em contato com
																				<b
																					style="color:black"><?php echo $correcao->correcao_atendente_rf; ?></b>
																				para&nbsp;  <b
																					style="color:black"><?php echo $correcao->correcao_atividade; ?></b>&nbsp;em
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
                                             } ?>
														</div>
													</div>
												</div>
												<!-- FIM TAB CORRECAO -->

											</div>
										</div>
									</div>
									<!-- FIM NAV CHAMADOS/CORRECAO  -->





								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="card-body">
					<div class="card-title">
						<h3 class="text-center title-2">Registrar um novo Chamado</h3>
					</div>
					<hr>
					<!-- <form method='post' action="<?php echo base_url('C_Chamado/criarChamado/' . $chamado->chamado_id); ?>" -->
					<form method='post' action="<?php echo base_url('C_chamado/criarChamado/'); ?>" class="form-horizontal">
						<div class="row form-group" style="display:none;">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-address-card "></i>
									</div>
									<input type="text" id="chamado_id_cliente" value="<?php echo $linha['0']->cliente_id; ?>"
										name="chamado_id_cliente" placeholder="Id do Cliente" class="form-control">
								</div>
								<small>Qual o ID do cliente? </small>
							</div>
						</div>
						<div class="row form-group" style="display:none">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-address-card "></i>
									</div>
									<input type="text" id="chamado_id_usuario"
										value="<?php echo $this->session->userdata('usuario_id'); ?>" name="chamado_id_usuario"
										placeholder="Id do Cliente" class="form-control">
								</div>
								<small>Qual o ID do usuario? </small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-list-alt"></i>
									</div>
									<!--    <input type="text" id="chamado_atividade" name="chamado_atividade" placeholder="Atividade" class="form-control"> -->

									<select name="chamado_atividade" id="chamado_atividade">
										<option value="Não Selecionado.">Selecione uma Atividade</option>
										<option value="Tirar duvida(s)">Tirar duvida(s)</option>
										<option value="(por) Ligação">Ligação</option>
										<option value="Recebimento de Documentos">Recebimento de Documentos</option>
										<option value="Envio de Documentos">Envio de Documentos</option>
										<option value="Pedir informação(ões)">Pedir informação(ões)</option>
									</select>
								</div>
								<small>Atividade exercida no Chamado (Duvidas, Informações) </small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-tag"></i>
									</div>
									<input type="text" id="chamado_assunto" name="chamado_assunto" placeholder="Assunto"
										class="form-control">
								</div>
								<small>Qual o motivo do contato? </small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-arrow-circle-right"></i>
									</div>
									<!-- <input type="text" id="chamado_atendente_cliente" name="chamado_atendente_cliente" placeholder="Quem entrou em contato?" class="form-control"> -->
									<!-- <script>
                              function busca_contato(contato_secundario_id) {
                                 <?php echo "Selecionado contato de ID:" ?>alert(contato_secundario_id);
                              }
                           </script> -->
									<!-- <select name="contato_list" id="contato_list" onchange='busca_contato($(this).val())'> -->
									<select name="chamado_atendente_cliente" id="contato_list">
										<option value="">Selecione um Contato</option>
										<?php echo $options_contatos; ?>
										<!-- <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option> -->
									</select>

								</div>
								<small> Quem falava em nome da empresa?</small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa  fa-arrow-circle-left"></i>
									</div>
									<input type="text" id="chamado_atendente_rf"
										value="<?php echo $this->session->userdata('usuario_nome'); ?>"
										name="chamado_atendente_rf" placeholder="Quem atendeu ao chamado?" class="form-control">
								</div>
								<small> Quem da RF&A atendeu? </small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa  fa-microphone"></i>
									</div>
									<input type="text" id="chamado_duracao" name="chamado_duracao_hora"
										placeholder="Duração  /Horas" class="form-control">
								</div>
								<small> Quanto tempo durou o contato? Horas...</small>
							</div>
							<div class="col col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa  fa-microphone"></i>
									</div>
									<input type="text" id="chamado_duracao" name="chamado_duracao_minuto"
										placeholder="Duração /Minutos" class="form-control">
								</div>
								<small>e quantos minutos? ...</small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" id="chamado_data" value="<?php
                            date_default_timezone_set('America/Sao_Paulo');
                             echo date('d/m/Y'); ?>" name="chamado_data" placeholder="Data" class="form-control">
								</div>
								<small>Dia em que foi feito o contato</small>
							</div>
							<div class="col col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</div>
									<input type="text" id="chamado_hora" value="<?php
                            date_default_timezone_set('America/Sao_Paulo');
                            echo date('H:i:s'); ?>" name="chamado_hora" placeholder="Hora" class="form-control">
								</div>
								<small> Hora do contato</small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</div>
									<input type="email" id="chamado_duracao" name="chamado_email" placeholder="Email Usado"
										class="form-control">
								</div>
								<small> Opcional</small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-phone"></i>
									</div>
									<input type="text" id="chamado_telefone" name="chamado_telefone" placeholder="Telefone usado"
										class="form-control chamado_telefone">
								</div>
								<small>Opcional</small>
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input type="text" id="chamado_obs" name="chamado_obs" placeholder="Oberservações"
										class="form-control">
								</div>
								<small> Maximo de 200 caracteres, Opcional</small>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							<button type="submit" value="save" class="btn btn-primary">Salvar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="card-body">
				<div class="card-title">
					<h3 class="text-center title-2">Editar Cliente</h3>
				</div>
				<hr>
				<form method='post'
					action="<?php echo site_url('C_cliente/update'); ?>/<?php echo $linha[0]->cliente_id; ?>"
					class="form-horizontal">
					<div class="form-group">
						<label for="cpf/cnpj" class=" form-control-label">Codigo do Cliente</label>
						<input type="text" id="cod_cliente" value="<?php echo $linha[0]->cod_cliente; ?>" name="cod_cliente"
							placeholder="Insira o Codigo do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="nome" class=" form-control-label">Nome do Cliente</label>
						<input type="text" id="company" value="<?php echo $linha[0]->cliente_nome;?>" name="cliente_nome"
							placeholder="Insira o nome do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="cpf/cnpj" class=" form-control-label">CPF</label>
						<input type="text" id="cpf" maxlength="14" value="<?php echo $linha[0]->cliente_cpf; ?>"
							name="cliente_cpf" placeholder="Insira o CNPJ do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="cpf/cnpj" class=" form-control-label">CNPJ</label>
						<input type="text" id="cnpj" maxlength="18" value="<?php echo $linha[0]->cliente_cnpj; ?>"
							name="cliente_cnpj" placeholder="Insira o CNPJ do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="endereco" class=" form-control-label">Endereço
						</label>
						<input type="text" id="vat" name="cliente_endereco" value="<?php echo $linha[0]->cliente_endereco; ?>"
							placeholder="Insira o Endereço do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="bairro" class=" form-control-label">Bairro</label>
						<input type="text" id="street" name="cliente_bairro" value="<?php echo $linha[0]->cliente_bairro; ?>"
							placeholder="Insira o Bairro do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="cep" class=" form-control-label">Cep</label>
						<input type="text" id="cliente_cep" name="cliente_cep" value="<?php echo $linha[0]->cliente_cep; ?>"
							placeholder="Insira o Cep do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="cidade" class=" form-control-label">Cidade</label>
						<input type="text" id="city" name="cliente_cidade" value="<?php echo $linha[0]->cliente_cidade; ?>"
							placeholder="Insira a Cidade do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="estado" class=" form-control-label">Estado</label>
						<input type="text" id="cliente_estado" name="cliente_estado"
							value="<?php $linha[0]->cliente_estado; ?>" placeholder="Insira o Estado do Cliente"
							class="form-control">
					</div>
					<div class="form-group">
						<label for="postal-code" class=" form-control-label">País</label>
						<input type="text" id="postal-code" name="cliente_pais" value="<?php echo $linha[0]->cliente_pais; ?>"
							placeholder="Insira o País do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="postal-code" class=" form-control-label">Insc.
							Estadual</label>
						<input type="text" id="cliente_inscricao_estadual" name="cliente_inscricao_estadual"
							value="<?php echo $linha['0']->cliente_inscricao_estadual; ?>"
							placeholder="Insira a Insc. Estadual do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="postal-code" class=" form-control-label">Categoria</label>
						<input type="text" id="postal-code" name="cliente_categoria"
							value="<?php echo $linha[0]->cliente_categoria; ?>"
							placeholder="Defina uma Categoria para o Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="vat" class=" form-control-label">E-Mail
						</label>
						<input type="email" id="cliente_email" name="cliente_email"
							value="<?php echo $linha[0]->cliente_email; ?>"
							placeholder="Insira o Endereço de E-Mail do Cliente" class="form-control">
					</div>
					<div class="form-group">
						<label for="postal-code" class=" form-control-label">Telefone</label>
						<input type="text" id="cliente_telefone" name="cliente_telefone"
							value="<?php $linha[0]->cliente_telefone; ?>" placeholder="Insira o Telefone do Cliente"
							class="form-control">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" value="save" class="btn btn-primary">Salvar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="correcaoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Registrar Correção</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method='post' action="<?php echo base_url('C_cliente/criarCorrecao/'); ?>" class="form-horizontal">
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="zmdi zmdi-account-box-mail"></i>
								</div>
								<input value="<?php echo $linha['0']->cliente_id; ?>" type="text" id="correcao_id_cliente"
									name="correcao_id_cliente" placeholder="Id do Cliente" class="form-control">
							</div>
							<small>Qual o ID do cliente? </small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-address-card "></i>
								</div>
								<input value="<?php echo $chamado->chamado_id; ?>" type="text" id="correcao_id_chamado"
									name="correcao_id_chamado" placeholder="Id do Cliente" class="form-control">
							</div>
							<small>Qual o ID do chamado a ser corrigido? </small>
						</div>
					</div>
					<div class="row form-group" style="display:none">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-address-card "></i>
								</div>
								<input value="<?php echo $this->session->userdata('usuario_id'); ?>" type="text"
									id="correcao_usuario_id " name="correcao_usuario_id " placeholder="Id do Usuario"
									class="form-control">
							</div>
							<small>Qual o ID do usuario que corrigiu? </small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-list-alt"></i>
								</div>
								<input type="text" id="chamado_atividade" name="correcao_atividade" placeholder="Atividade"
									class="form-control">
							</div>
							<small>Atividade exercida no Chamado (Duvidas, Informações) </small>
						</div>
					</div>

					<div class="row form-group">
							<div class="col col-md-12">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-list-alt"></i>
									</div>
									<!--    <input type="text" id="chamado_atividade" name="chamado_atividade" placeholder="Atividade" class="form-control"> -->

									<select name="correcao_atividade" id="correcao_atividade">
										<option value="Não Selecionado.">Selecione uma Atividade</option>
										<option value="Tirar duvida(s)">Tirar duvida(s)</option>
										<option value="(por) Ligação">Ligação</option>
										<option value="Recebimento de Documentos">Recebimento de Documentos</option>
										<option value="Envio de Documentos">Envio de Documentos</option>
										<option value="Pedir informação(ões)">Pedir informação(ões)</option>
									</select>
								</div>
								<small>Atividade exercida no Chamado (Duvidas, Informações) </small>
							</div>
						</div>		  	

					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-tag"></i>
								</div>
								<input type="text" id="chamado_assunto" name="correcao_assunto" placeholder="Assunto"
									class="form-control">
							</div>
							<small>Qual o motivo do contato? </small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-arrow-circle-right"></i>
								</div>
								<!-- <input type="text" id="chamado_atendente_cliente" name="chamado_atendente_cliente" placeholder="Quem entrou em contato?" class="form-control"> -->
								<!-- <script>
                              function busca_contato(contato_secundario_id) {
                                 <?php echo "Selecionado contato de ID:" ?>alert(contato_secundario_id);
                              }
                           </script> -->
								<!-- <select name="contato_list" id="contato_list" onchange='busca_contato($(this).val())'> -->
								<select name="correcao_atendente_cliente" id="contato_list">
									<option value="">Selecione um Contato</option>
									<?php echo $options_contatos; ?>
									<!-- <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option> -->
								</select>

							</div>
							<small> Quem falava em nome da empresa?</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa  fa-arrow-circle-left"></i>
								</div>
								<input type="text" id="chamado_atendente_rf"
									value="<?php echo $this->session->userdata('usuario_nome'); ?>" name="correcao_atendente_rf"
									placeholder="Quem atendeu ao chamado?" class="form-control">
							</div>
							<small> Quem da RF&A atendeu? </small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-6">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa  fa-microphone"></i>
								</div>
								<input type="text" id="chamado_duracao" name="correcao_duracao_hora"
									placeholder="Duração  /Horas" class="form-control">
							</div>
							<small> Quanto tempo durou o contato? Horas...</small>
						</div>
						<div class="col col-md-6">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa  fa-microphone"></i>
								</div>
								<input type="text" id="chamado_duracao" name="correcao_duracao_minuto"
									placeholder="Duração /Minutos" class="form-control">
							</div>
							<small>e quantos minutos? ...</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-6">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" id="chamado_data" name="correcao_data" value="<?php 
                         date_default_timezone_set('America/Sao_Paulo');
                         echo date('d/m/Y'); ?>" placeholder="Data" class="form-control">
							</div>
							<small>Dia em que foi feito o contato</small>
						</div>
						<div class="col col-md-6">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
								<input type="text" id="chamado_hora" name="correcao_hora" value="<?php
                         date_default_timezone_set('America/Sao_Paulo');
                          echo date('H:i:s'); ?>" placeholder="Hora" class="form-control">
							</div>
							<small> Hora do contato</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</div>
								<input type="email" id="chamado_duracao" name="correcao_email" placeholder="Email Usado"
									class="form-control">
							</div>
							<small> Opcional</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-phone"></i>
								</div>
								<input type="text" id="chamado_telefone" name="correcao_telefone" placeholder="Telefone usado"
									class="form-control">
							</div>
							<small>Opcional</small>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-md-12">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
								<input type="text" id="chamado_obs" name="correcao_obs" placeholder="Oberservações"
									class="form-control">
							</div>
							<small> Maximo de 200 caracteres, Opcional</small>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" value="save" class="btn btn-primary">Salvar</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="contatoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Registrar Contato</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method='post' action="<?php echo base_url('C_cliente/criarContato/'); ?>" class="horizontal-form">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
							<input value="<?php echo $linha['0']->cliente_id; ?>" type="text" id="cliente_contato_id"
								name="cliente_contato_id" placeholder="Id do Cliente" class="form-control">
						</div>
					</div>
					<div class="form-group" style="display:none">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
							<input value="<?php echo $this->session->userdata('usuario_id'); ?>" type="text" id="username"
								name="contato_id_usuario" placeholder="Id do usuario" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input type="text" id="username" name="contato_secundario_nome" placeholder="Nome"
								class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope"></i>
							</div>
							<input type="email" id="email" name="contato_secundario_email" placeholder="E-mail"
								class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-phone"></i>
							</div>
							<input type="text" id="contato_secundario_telefone" name="contato_secundario_telefone"
								placeholder="Telefone" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope"></i>
							</div>
							<input type="text" id="funcao" name="contato_secundario_funcao" placeholder="Função"
								class="form-control">
						</div>
					</div>
					<div class="form-actions modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" value="save" class="btn btn-primary">Salvar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="contatoEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Contato</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php if (isset($contatos) && !empty($contatos)) { ?>
				<form method='post'
					action="<?php echo site_url('C_cliente/editaContato'); ?>/<?php echo $contatos['0']->contato_secundario_id; ?>"
					class="horizontal-form">

					<div class="form-group" style="display:none;">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</div>
							<input " type=" text" class="form-control" id="cliente_contato_id" name="cliente_contato_id"
								value="<?php echo $linha['0']->cliente_id; ?>" placeholder="Id do Cliente">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input type="text" id="contato_secundario_nome" name="contato_secundario_nome"
								value="<?php echo $contato->contato_secundario_nome; ?>" placeholder="Nome"
								class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope"></i>
							</div>
							<input type="email" id="contato_secundario_email" name="contato_secundario_email"
								value="<?php echo $contato->contato_secundario_email; ?>" placeholder="E-mail"
								class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-phone"></i>
							</div>
							<input type="text" id="contato_secundario_telefone" name="contato_secundario_telefone"
								value="<?php echo $contato->contato_secundario_telefone; ?>" placeholder="Telefone"
								class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope"></i>
							</div>
							<input type="text" id="contato_secundario_funcao" name="contato_secundario_funcao"
								value="<?php echo $contato->contato_secundario_email; ?>" placeholder="Função"
								class="form-control">
						</div>
					</div>

					<div class="form-actions modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" value="save" class="btn btn-primary">Salvar</button>
					</div>

				</form>
				<?php } ?>
			</div>
		</div>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
	$(".chamado_telefone").mask("(00) 00000-0000");
	$("#cliente_telefone").mask("(00) 00000-0000");
	$("#cliente_cep").mask("00000-000");
	$("#cliente_cpf").mask("000.000.000-00");
	$("#cliente_cnpj").mask("000.000.000-00");
	$("#cliente_inscricao_estadual").mask("000.000.000.000");
	$("#contato_secundario_telefone").mask("(00) 00000-0000");

</script>
<script>
	var options = {
		onKeyPress: function (cnpj, ev, el, op) {
			var masks = ['000.000.000-000'];
			$('#cnpj').mask((cnpj.length > 18) ? masks[1] : masks[0], op);
		}
	}
	$('#cnpj').length > 11 ? $('#cnpj').mask('00.000.000/0000-00', options) : $('#cnpj').mask("00.000.000/0000-00#",
		options);

	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['000.000.000-00'];
			$('#cpf').mask((cpf.length > 14) ? masks[1] : masks[0], op);
		}
	}
	$('#cpf').length > 11 ? $('#cpf').mask('000.000.000-00', options) : $('#cpf').mask("000.000.000-00#", options);

</script>
<script>
	function aguarde() {
		alert("Esta função ainda está sendo Habilitada, por favor aguarde!");
	}

</script>
