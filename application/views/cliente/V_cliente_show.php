 </section>
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

 										<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
 											href="#nav-home" role="tab" aria-controls="nav-home"
 											aria-selected="true">ÁREA DO
 											CLIENTE</a>

 										<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
 											href="#nav-profile" role="tab" aria-controls="nav-profile"
 											aria-selected="false">CHAMADOS</a>

 										<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
 											href="#nav-contact" role="tab" aria-controls="nav-contact"
 											aria-selected="false">INFORMAÇÕES
 											FINANCEIRAS</a>

 										<a class="nav-item nav-link" id="nav-edit-tab" data-toggle="tab"
 											href="#nav-edit" role="tab" aria-controls="nav-edit"
 											aria-selected="false">EDITAR REGISTRO</a>
 									</div>
 								</nav>

 								<!-- inicio div tabs -->
 								<div class="tab-content pl-3 pt-2" id="nav-tabContent">
 									<!-- inicio tab 1 -->
 									<div class="tab-pane fade show active" id="nav-home" role="tabpanel"
 										aria-labelledby="nav-home-tab">

 										<div>

 											<form method='post'
 												action="<?php echo site_url('C_Cliente/exibir')?>/<?php echo $linha->cliente_id; ?>">

 												<div class="form-group">
 													<label for="nome" class=" form-control-label">Nome do
 														Cliente</label>
 													<input type="text" id="company"
 														value="<?php echo $linha->cliente_nome; ?>" name="cliente_nome"
 														placeholder="Insira o nome do Cliente" disabled=""
 														class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="cpf/cnpj" class=" form-control-label">CNPJ/CPF</label>
 													<input type="text" id="cliente_cnpj_cpf"
 														value="<?php echo $linha->cliente_cnpj_cpf; ?>"
 														name="cliente_cnpj_cpf" placeholder="Insira o CNPJ do Cliente"
 														class="form-control" disabled="">
 												</div>

 												<div class="form-group">
 													<label for="endereco" class=" form-control-label">Endereço </label>
 													<input type="text" id="vat" name="cliente_endereco"
 														value="<?php echo $linha->cliente_endereco; ?>"
 														placeholder="Insira o Endereço do Cliente" class="form-control"
 														disabled="">
 												</div>

 												<div class="form-group">
 													<label for="bairro" class=" form-control-label">Bairro</label>
 													<input type="text" id="street" name="cliente_bairro"
 														value="<?php echo $linha->cliente_bairro; ?>"
 														placeholder="Insira o Bairro do Cliente" class="form-control"
 														disabled="">
 												</div>

 												<div class="form-group">
 													<label for="cep" class=" form-control-label">Cep</label>
 													<input type="text" id="cliente_cep" name="cliente_cep"
 														value="<?php echo $linha->cliente_cep; ?>"
 														placeholder="Insira o Cep do Cliente" class="form-control"
 														disabled="">
 												</div>

 												<div class="form-group">
 													<label for="cidade" class=" form-control-label">Cidade</label>
 													<input type="text" id="city" name="cliente_cidade"
 														value="<?php echo $linha->cliente_cidade; ?>"
 														placeholder="Insira a Cidade do Cliente" class="form-control"
 														disabled="">
 												</div>

 												<div class="form-group">
 													<label for="estado" class=" form-control-label">Estado</label>
 													<input type="text" id="cliente_estado" name="cliente_estado"
 														value="<?php echo $linha->cliente_estado; ?>"
 														placeholder="Insira o Estado do Cliente" class="form-control"
 														disabled="">
 												</div>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">País</label>
 													<input type="text" id="postal-code" name="cliente_pais"
 														value="<?php echo $linha->cliente_pais; ?>"
 														placeholder="Insira o País do Cliente" class="form-control"
 														disabled="">
 												</div>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">Insc.
 														Estadual</label>
 													<input type="text" id="cliente_inscricao_estadual"
 														name="cliente_inscricao_estadual"
 														value="<?php echo $linha->cliente_inscricao_estadual; ?>"
 														placeholder="Insira a Insc. Estadual do Cliente"
 														class="form-control" disabled="">
 												</div>

 												<div class="form-group">
 													<label for="postal-code"
 														class=" form-control-label">Categoria</label>
 													<input type="text" id="postal-code" name="cliente_categoria"
 														value="<?php echo $linha->cliente_categoria; ?>"
 														placeholder="Defina uma Categoria para o Cliente"
 														class="form-control" disabled="">
 												</div>

 												<div class="form-group">
 													<label for="vat" class=" form-control-label">E-Mail </label>
 													<input type="text" id="cliente_email" name="cliente_email"
 														value="<?php echo $linha->cliente_email; ?>"
 														placeholder="Insira o Endereço de E-Mail do Cliente"
 														class="form-control" disabled="">
 												</div>

 												<div class="form-group">
 													<label for="postal-code"
 														class=" form-control-label">Telefone</label>
 													<input type="text" id="cliente_telefone" name="cliente_telefone"
 														value="<?php echo $linha->cliente_telefone; ?>"
 														placeholder="Insira o Telefone do Cliente" class="form-control"
 														disabled="">
 												</div>

 												<h4>Outros Contatos </h4>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">Nome</label>
 													<small style="color:red"> Opcional</small>
 													<input name="cliente_contatos" type="text" id="postal-code"
 														value="<?php echo $linha->cliente_contato_nome; ?>"
 														placeholder="Insira o nome do contato secundario"
 														class="form-control" disabled="">
 												</div>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">
 														Numero</label>
 													<input name="cliente_contatos" type="text"
 														id="cliente_contato_telefone"
 														placeholder="Insira o numero do contato secundario"
 														class="form-control" disabled="">
 												</div>
 											</form>
 										</div>


 									</div>
 									<!-- fim tab 1 -->




 									<!-- inicio tab 2 -->
 									<div class="tab-pane fade" id="nav-profile" role="tabpanel"
 										aria-labelledby="nav-profile-tab">


 										<div class="col-lg-12" style="text-align: right;">
 											<button type="button" class="btn btn-primary" data-toggle="modal"
 												data-target="#exampleModal">
 												Registrar Chamado
 											</button>
 										</div>




 										<div class="row">

 											<!-- <div class="col-md-4" >
 										<div class="card" style="border: 1px solid grey; box-shadow: 2px 1px 1px 2px #62A8ED;">
 											<div class="card-body">
 												<p> o(a) cliente <i> Giselle </i> entrou em contato por <i>Ligação</i>,
 													Dia <i>10/08/2019 </i> as <i>15:30</i> com duração de <i>120 </i>
 													minutos.
 													<br>
 													<b>Atividade:</b> <i><?php echo $linha->chamado_atividade;?></i>
 													<br>
 													<b>Assunto:</b> <i><?php echo $linha->chamado_assunto;?></i>
 													<br>
 													<b>Quem Entrou em contato:</b> <i><?php echo $linha->chamado_atendente_cliente; ?> </i>
 													<br>
 													<b>Pelo numero:</b> <i><?php echo $row->chamado_numero; ?> </i>
 													<br>
 													<b>Quem Atendeu:</b> <i><?php echo $linha->chamado_atendente_rf; ?> </i>
 													<br>

 												</p>
 											</div>
 										</div>
 									</div> -->

									 <?php foreach($result as $linha) { ?>
 											<div class="col-md-4">
 												<div class="card"
 													style="border: 1px solid grey; box-shadow: 2px 1px 1px 2px #62A8ED;">
 													<div class="card-body">
 														<p> o(a) cliente <i> Giselle </i> entrou em contato por
 															<i>Ligação</i>,
 															Dia <i>10/08/2019 </i> as <i>15:30</i> com duração de
 															<i>120 </i>
 															minutos.
 															<br>
 															<b>Atividade:</b> <i> <?php echo $linha->chamado_atividade; ?> </i>
 															<br>
 															<b>Assunto:</b> <i><?php echo $linha->chamado_assunto; ?></i>
 															<br>
 															<b>Quem Entrou em contato:</b> <i><?php echo $linha->chamado_atendete_cliente; ?> </i>
 															<br>
 															<b>Pelo numero:</b> <i><?php echo $linha->chamado_telefone; ?> </i>
 															<br>
 															<b>Quem Atendeu:</b> <i><?php echo $linha->chamado_atendente_rf; ?> </i>
 															<br>
 														</p>
 													</div>
 												</div>
											 </div>
											</div>
											<?php } ?>
 									</div>

 									<!-- fim tab 2  -->


 									<!-- inicio tab 4 -->
 									<div class="tab-pane fade" id="nav-edit" role="tabpanel"
 										aria-labelledby="nav-edit-tab">

 										<div>
 											<form method='post'
 												action="<?php echo site_url('C_cliente/update')?>/<?php echo $linha->cliente_id; ?>">

 												<div class="form-group">
 													<label for="nome" class=" form-control-label">Nome do
 														Cliente</label>
 													<input type="text" id="company"
 														value="<?php echo $linha->cliente_nome; ?>" name="cliente_nome"
 														placeholder="Insira o nome do Cliente" class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="cpf/cnpj" class=" form-control-label">CNPJ/CPF</label>
 													<input type="text" id="cliente_cnpj_cpf"
 														value="<?php echo $linha->cliente_cnpj_cpf; ?>"
 														name="cliente_cnpj_cpf" placeholder="Insira o CNPJ do Cliente"
 														class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="endereco" class=" form-control-label">Endereço </label>
 													<input type="text" id="vat" name="cliente_endereco"
 														value="<?php echo $linha->cliente_endereco; ?>"
 														placeholder="Insira o Endereço do Cliente"
 														class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="bairro" class=" form-control-label">Bairro</label>
 													<input type="text" id="street" name="cliente_bairro"
 														value="<?php echo $linha->cliente_bairro; ?>"
 														placeholder="Insira o Bairro do Cliente" class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="cep" class=" form-control-label">Cep</label>
 													<input type="text" id="cliente_cep" name="cliente_cep"
 														value="<?php echo $linha->cliente_cep; ?>"
 														placeholder="Insira o Cep do Cliente" class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="cidade" class=" form-control-label">Cidade</label>
 													<input type="text" id="city" name="cliente_cidade"
 														value="<?php echo $linha->cliente_cidade; ?>"
 														placeholder="Insira a Cidade do Cliente" class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="estado" class=" form-control-label">Estado</label>
 													<input type="text" id="cliente_estado" name="cliente_estado"
 														value="<?php echo $linha->cliente_estado; ?>"
 														placeholder="Insira o Estado do Cliente" class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">País</label>
 													<input type="text" id="postal-code" name="cliente_pais"
 														value="<?php echo $linha->cliente_pais; ?>"
 														placeholder="Insira o País do Cliente" class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">Insc.
 														Estadual</label>
 													<input type="text" id="cliente_inscricao_estadual"
 														name="cliente_inscricao_estadual"
 														value="<?php echo $linha->cliente_inscricao_estadual; ?>"
 														placeholder="Insira a Insc. Estadual do Cliente"
 														class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="postal-code"
 														class=" form-control-label">Categoria</label>
 													<input type="text" id="postal-code" name="cliente_categoria"
 														value="<?php echo $linha->cliente_categoria; ?>"
 														placeholder="Defina uma Categoria para o Cliente"
 														class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="vat" class=" form-control-label">E-Mail </label>
 													<input type="text" id="cliente_email" name="cliente_email"
 														value="<?php echo $linha->cliente_email; ?>"
 														placeholder="Insira o Endereço de E-Mail do Cliente"
 														class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="postal-code"
 														class=" form-control-label">Telefone</label>
 													<input type="text" id="cliente_telefone" name="cliente_telefone"
 														value="<?php echo $linha->cliente_telefone; ?>"
 														placeholder="Insira o Telefone do Cliente"
 														class="form-control">
 												</div>

 												<h4>Outros Contatos </h4>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">Nome</label>
 													<small style="color:red"> Opcional</small>
 													<input name="cliente_contatos" type="text" id="postal-code"
 														value="<?php echo $linha->cliente_contato_nome; ?>"
 														placeholder="Insira o nome do contato secundario"
 														class="form-control">
 												</div>

 												<div class="form-group">
 													<label for="postal-code" class=" form-control-label">
 														Numero</label>
 													<input name="cliente_contatos" type="text"
 														id="cliente_contato_telefone"
 														placeholder="Insira o numero do contato secundario"
 														class="form-control">
 												</div>


 												<button type="submit" class="btn btn-primary"
 													value="save">Confirmar</button>
 											</form>
 										</div>
 									</div>



 									</form>
 								</div>

 							</div>

 						</div>
 					</div> <!-- fim tab 4 -->

 					<!-- inicio tab 3 -->

 					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

 					</div>
 					<!-- fim tab 3 -->

 				</div>



 			</div>
 			<!-- fim div tabs -->
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
 					<form method='post' action=<?php echo base_url("C_Chamado/criarChamado"); ?> class="form-horizontal">
 					 
						 
						 <div class="row form-group">
 							<div class="col col-md-12">
 								<div class="input-group">
 									<div class="input-group-addon">
 										<i class="fa fa-list-alt"></i>
 									</div>
 									<input type="text" id="chamado_atividade" name="chamado_atividade" placeholder="Atividade"
 										class="form-control">
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
										<input type="text" id="chamado_atendente_cliente" name="chamado_atendente_cliente" placeholder="Quem entrou em contato?"
										 class="form-control">
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
									 <input type="text" id="chamado_atendente_rf" name="chamado_atendente_rf" placeholder="Quem atendeu ao chamado?"
									 class="form-control">
									</div>
								 <small> Quem da RF&A atendeu? </small>  
								</div>
							</div>
							
							<div class="row form-group">
 							<div class="col col-md-12">
 								<div class="input-group">
 									<div class="input-group-addon">
 										<i class="fa  fa-microphone"></i>
 									</div>
									 <input type="text" id="chamado_duracao" name="chamado_duracao" placeholder="Duração do Contato"
									 class="form-control">
									</div>
									<small> Quanto tempo durou o contato? em minutos...</small>										 

								</div>
							</div>

						 <div class="row form-group">
 							<div class="col col-md-6">
 								<div class="input-group">
 									<div class="input-group-addon">
 										<i class="fa fa-calendar"></i>
 									</div>
 									<input type="text" id="chamado_data" name="chamado_data" placeholder="Data"
 										class="form-control">
								 </div>
								 <small>Dia em que foi feito o contato</small>										 

							 </div>
							 
							 <div class="col col-md-6">
 								<div class="input-group">
 									<div class="input-group-addon">
 										<i class="fa fa-clock-o"></i>
 									</div>
 									<input type="text" id="chamado_hora" name="chamado_hora" placeholder="Hora"
 										class="form-control">
								 </div>
								 <small> Hora do contato</small>										 

 							</div>
						 </div>


						 <div class="row form-group">
 							<div class="col col-md-12">
 								<div class="input-group">
 									<div class="input-group-addon">
 										<i class="fa  fa-arrow-circle-left"></i>
 									</div>
									 <input type="text" id="chamado_duracao" name="chamado_duracao" placeholder="Email Usado"
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
										<input type="text" id="chamado_obs" name="chamado_obs" placeholder="Oberservações"
										class="form-control">
									</div>
									<small> Maximo de 200 caracteres, Opcional</small>										 
 							</div>
 						</div>
 						 
						 <div class="modal-footer">
							 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							 <button type="submit" value="save" class="btn btn-primary">Save changes</button>
						 </div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


 <script type="text/javascript">
 	$("#cliente_contato_telefone").mask("(00) 00000-0000");
 	$("#cliente_telefone").mask("(00) 00000-0000");
 	$("#cliente_cep").mask("00000-000");
 	$("#cliente_cnpj_cpf").mask("000.000.000-00");
 	$("#cliente_inscricao_estadual").mask("000.000.000.000");

 </script>
