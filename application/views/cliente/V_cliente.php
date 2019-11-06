 <!-- DATA TABLE-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


 <section class="p-t-20">
 	<div class="page-content--bgf7">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="au-breadcrumb-left">
 						<span class="au-breadcrumb-span">Você está aqui:</span>
 						<ul class="list-unstyled list-inline au-breadcrumb__list">
 							<li class="list-inline-item active">
 								<a href="<?php echo base_url();?>Home">Home</a>
 							</li>
 							<li class="list-inline-item seprate">
 								<span>/</span>
 							</li>
 							<li class="list-inline-item">Dashboard</li>
 						</ul>
 					</div>
 					<br>
 					<div>
 						<h3 class="title-5 m-b-35">CLIENTES</h3>
 						<div class="table-data__tool">
 							<div class="table-data__tool-left">
 								<div class="rs-select2--light rs-select2--md">
 									<select class="js-select2" name="property">
 										<option selected="selected">Ordenar por</option>
 										<option value="">Relevância</option>
 										<option value="">Recentes</option>
 									</select>
 									<div class="dropDownSelect2"></div>
 								</div>
 								<div class="rs-select2--light rs-select2--sm">
 									<select class="js-select2" name="time">
 										<option selected="selected">Data</option>
 										<!-- <option value="">Esse Mês</option> -->
 										<option value="">Até 3 Meses</option>
 									</select>
 									<div class="dropDownSelect2"></div>
 								</div>
 								<button class="au-btn-filter">
 									<i class="zmdi zmdi-filter-list"></i>filters</button>
 							</div>
 							<div class="table-data__tool-right">
 								<button class="au-btn au-btn-icon mb-1 au-btn--green au-btn--small" data-toggle="modal"
 									data-target="#largeModal">
 									<i class="zmdi zmdi-plus"></i> Novo</button>

 								<a href="<?php echo base_url('C_export/csv')?>"> <button type="button"
 										class="btn btn-success" data-toggle="tooltip" data-placement="top"
 										title="Recarregue a pagina após o download do arquivo.">
 										<i class="fa fa-file-excel-o"></i>&nbsp; Exportar como CSV</button> </a>
 							</div>
 						</div>
 					</div>
 				</div>



 				<script>
 					$(document).ready(function () {
 						function load_cliente_data(page) {
 							$.ajax({
 								url: "<?php echo base_url(); ?>rfcrm/C_cliente/" + page,
 								method: "GET",
 								dataType: "json",
 								success: function (data) {
 									$('#cliente_table').html(data.cliente_table);
 									$('#pagination_link').html(data.pagination_link);
 								}
 							});
 						}
 						load_country_data(1);
 						$(document).on("click", ".pagination li a", function (event) {
 							event.preventDefault();
 							var page = $(this).data("cliente/V_cliente");
 							load_cliente_data(page);
 						});
 					});

 				</script>

 				<div id="pagination_link" class="table-responsive table-responsive-data2">
 					<div id="cliente_table">
 						<table class="table table-data3">
 							<thead>
 								<tr>
 									<th>.</th>

 									<th>Nome</th>
 									<th>CNPJ/CPF</th>
 									<th>TELEFONE</th>
 									<th>CIDADE</th>
 									<th>ENDEREÇO</th>
 									<th>Bairro</th>
 									<th>Cep</th>
 									<th>Funções</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php if( !empty($result) ) { 
								 foreach($result as $linha) { 
								 
									 ?>
 								<tr class="tr-shadow">
 									<td> <i class='fas fa-user'> </td>

 									<td> <?php echo $linha->cliente_nome; ?> </td>

 									<td><?php echo $linha->cliente_cnpj_cpf; ?></td>

 									<td> <?php echo $linha->cliente_telefone; ?> </td>

 									<td><?php echo $linha->cliente_cidade ?></td>

 									<td><?php echo $linha->cliente_endereco; ?></td>

 									<td><?php echo $linha->cliente_bairro; ?> </td>

 									<td><?php echo $linha->cliente_cep; ?></td>

 									<td>
 										<div class="table-data-feature">
 											<a
 												href="<?php echo site_url('C_Cliente/exibir'); ?>/<?php echo $linha->cliente_id; ?>">
 												<button class="item" data-toggle="tooltip" data-placement="top"
 													title="Visualizar">
 													<i class="zmdi zmdi-view-list-alt"></i>
 												</button>
 											</a>
 											<!-- <a href="<?php echo site_url('C_Cliente/editar'); ?>/<?php echo $linha->cliente_id; ?>">
 												<button class="item" data-toggle="tooltip" data-placement="top"
 													title="Editar">
 													<i class="zmdi zmdi-edit"></i>
 												</button>
 											</a> -->

 											<a
 												href="<?php echo site_url('C_Cliente/delete'); ?>/<?php echo $linha->cliente_id; ?>">
 												<button class="item" data-toggle="tooltip" data-placement="top"
 													title="Deletar">
 													<i class="zmdi zmdi-delete"></i>
 												</button>
 											</a>
 											<a>
 												<div style="padding-left: 10px 10px 10px 10px">
 													<button type="button" class="btn btn-danger btn-sm">
 														<i class="fa fa-file-pdf-o"></i></button> </div>
 											</a>
 											<!-- <script type="text/javascript">
 												var url = "<?php echo base_url();?>";

 												function delete(id) {
 													var r = confirm("Do you want to delete this?")
 													if (r == true)
 														window.location = url + "user/deleteuser/" + id;
 													else
 														return false;
 												}

 											</script> -->




 											<!-- <button class="item" data-toggle="tooltip" data-placement="top"
 												title="More">
 												<i class="zmdi zmdi-more"></i>
 											</button> -->
 										</div>
 									</td>
 								</tr>
 								<?php } }?>
 								<!-- <tr class="tr-shadow">
									 <td> <i class='fas fa-circle'> </td>

									<td>
									<span class="block-email">lori@example.com</span>

 									</td>
 									<td>Lori Lynch</td>
 									<td>
 										<span class="block-email">lori@example.com</span>
 									</td>
 									<td class="desc">Samsung S8 Black</td>
 									<td>2018-09-27 02:12</td>
 									<td>
 										<span class="status--process">Processed</span>
 									</td>
 									<td>$679.00</td>
 									<td>
 										<div class="table-data-feature">
 											<button class="item" data-toggle="tooltip" data-placement="top"
 												title="Send">
 												<i class="zmdi zmdi-mail-send"></i>
 											</button>
 											<button class="item" data-toggle="tooltip" data-placement="top"
 												title="Edit">
 												<i class="zmdi zmdi-edit"></i>
 											</button>
 											<button class="item" data-toggle="tooltip" data-placement="top"
 												title="Delete">
 												<i class="zmdi zmdi-delete"></i>
 											</button>
 										 <button class="item" data-toggle="tooltip" data-placement="top"
 												title="More">
 												<i class="zmdi zmdi-more"></i>
 											</button> 
											 </div>
											</td>
										</tr>
										
									</tr>
								-->
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	</div>
 </section>


 <!-- modal large -->
 <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
 	aria-hidden="true">
 	<div class="modal-dialog modal-lg" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="largeModalLabel"> Registrar novo Cliente</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<div>
 					<form method='post' action=<?php echo base_url("C_Cliente/criar"); ?>>

 						<div class="form-group">
 							<label for="nome" class=" form-control-label">Codigo do Cliente <small>(APENAS CRM
 									ANTIGO)</small></label>
 							<input type="text" id="company" name="cod_cliente"
 								placeholder="Insira o Codigo do Cliente " class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="nome" class=" form-control-label">Nome do Cliente</label>
 							<input type="text" id="company" name="cliente_nome" placeholder="Insira o nome do Cliente"
 								class="form-control">
 						</div>

 						<!-- <div class="row form-group">
 							<div class="col col-md-3">
 								<label class=" form-control-label">Radios</label>
 							</div>
 							<div class="col col-md-9">
 								<div class="form-check">
 									<div class="radio">
 										<label for="radio1" class="form-check-label ">
 											<input type="radio" id="radio1" name="radios" value="option1"
 												class="form-check-input">Option 1
 										</label>
 									</div>
 									<div class="radio">
 										<label for="radio2" class="form-check-label ">
 											<input type="radio" id="radio2" name="radios" value="option2"
 												class="form-check-input">Option 2
 										</label>
 									</div>
 									<div class="radio">
 										<label for="radio3" class="form-check-label ">
 											<input type="radio" id="radio3" name="radios" value="option3"
 												class="form-check-input">Option 3
 										</label>
 									</div>
 								</div>
 							</div>
 						</div> -->

 						<div class="form-group">
 							<label for="cpf/cnpj" class=" form-control-label">CNPJ/CPF</label>
 							<input type="text" id="cliente_cnpj_cpf" name="cliente_cnpj_cpf"
 								placeholder="Insira o CNPJ do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="endereco" class=" form-control-label">Endereço </label>
 							<input type="text" id="vat" name="cliente_endereco"
 								placeholder="Insira o Endereço do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="bairro" class=" form-control-label">Bairro</label>
 							<input type="text" id="street" name="cliente_bairro"
 								placeholder="Insira o Bairro do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="cep" class=" form-control-label">Cep</label>
 							<input type="text" id="cliente_cep" name="cliente_cep"
 								placeholder="Insira o Cep do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="cidade" class=" form-control-label">Cidade</label>
 							<input type="text" id="city" name="cliente_cidade" placeholder="Insira a Cidade do Cliente"
 								class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="estado" class=" form-control-label">Estado</label>
 							<input type="text" id="cliente_estado" name="cliente_estado"
 								placeholder="Insira o Estado do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">País</label>
 							<input type="text" id="postal-code" name="cliente_pais"
 								placeholder="Insira o País do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Insc. Estadual</label>
 							<input type="text" id="cliente_inscricao_estadual" name="cliente_inscricao_estadual"
 								placeholder="Insira a Insc. Estadual do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Categoria</label>
 							<input type="text" id="postal-code" name="cliente_categoria"
 								placeholder="Defina uma Categoria para o Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="vat" class=" form-control-label">E-Mail </label>
 							<input type="email" id="cliente_email" name="cliente_email"
 								placeholder="Insira o Endereço de E-Mail do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Telefone</label>
 							<input type="text" id="cliente_telefone" name="cliente_telefone"
 								placeholder="Insira o Telefone do Cliente" class="form-control">
 						</div>

 						<h4>Outros Contatos </h4>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Nome</label>
 							<small style="color:red"> Opcional</small>
 							<input name="cliente_contatos" type="text" id="cliente_contato_nome"
 								placeholder="Insira o nome do contato secundario" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label"> Numero</label>
 							<input name="cliente_contato_telefone" type="text" id="cliente_contato_telefone"
 								placeholder="Insira o numero do contato secundario" class="form-control">
 						</div>

 				</div>

 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

 				<button type="submit" class="btn btn-primary" value="save">Confirmar</button>
 				</form>
 			</div>

 		</div>
 	</div>
 </div>
 </div>
 <!-- end modal large -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

 <script type="text/javascript">
 	$("#cliente_contato_telefone").mask("(00) 00000-0000");
 	$("#cliente_telefone").mask("(00) 00000-0000");
 	$("#cliente_cep").mask("00000-000");
 	$("#cliente_cnpj_cpf").mask("000.000.000-00");
 	$("#cliente_inscricao_estadual").mask("000.000.000.000");

 </script>
