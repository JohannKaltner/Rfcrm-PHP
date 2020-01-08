 <!-- DATA TABLE-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


 <section class="p-t-">
 	<div class="page-content--bgf7">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="au-breadcrumb-left">
 						<span class="au-breadcrumb-span">Você está aqui:</span>
 						<ul class="list-unstyled list-inline au-breadcrumb__list">
 							<li class="list-inline-item active">
 								<a href="<?php echo base_url(); ?>Home">Home</a>
 							</li>
 							<li class="list-inline-item seprate">
 								<span>/</span>
 							</li>
 							<li class="list-inline-item active">
 								<a href="<?php echo base_url(); ?>C_Cliente">Clientes </a>
 							</li>
 						</ul>
 					</div>
 					<br>
 					<div>
 						<h3 class="title-5">CLIENTES</h3>
 						<div class="table-data__tool">
 							<div class="table-data__tool-left">

 							</div>
 							<form class="au-form-icon--sm" action="<?php echo site_url('C_cliente/busca');?>" method="post">
 								<input class="au-input--w300 au-input--style2" name="keyword" type="text" placeholder="procure por Nome ou Codigo...">
 								<button class="au-btn--submit2"  >
 									<i class="zmdi zmdi-search"></i>
 								</button>
 							</form>
 						</div>
 						<!-- <?php // if($this->session->userdata('usuario_nivel'== '1')) { 
								?> -->
 						<div class="table-data__tool-right">
 							<button class="au-btn au-btn-icon mb-1 au-btn--green au-btn--small" data-toggle="modal" data-target="#largeModal">
 								<i class="zmdi zmdi-plus"></i> Novo</button>


								 <?php if ($this->session->userdata('usuario_nivel') == '1') { ?>

 							<a href="<?php echo base_url('C_export/csv'); ?>"  target="_blank" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Recarregue a pagina após o download do arquivo.">
								 <i class="fa fa-file-excel-o"></i>&nbsp; Exportar como CSV</a>
								 <?php } ?>
 						</div>

 						<!-- <?php //} else { 
								?> -->

 						<!-- <?php // } 
								?> -->

 					</div>
 				</div>
 			</div>




 			<!-- inicio table -->
 			<div id="pagination_link" class="table-responsive table-responsive-data2"  style="border:1px solid lightgrey;-webkit-box-shadow: 4px 4px 26px -4px rgba(0,0,0,0.63);
	-moz-box-shadow: 4px 4px 26px -4px rgba(0,0,0,0.63);
	box-shadow: 4px 4px 26px -4px rgba(0,0,0,0.63);
">

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
 								<th>ENDEREÇO</th>
 								<th>BAIRRO</th>
 								<th>CEP</th>
 								<th>FUNÇÕES</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php if (isset($clienteInfo) && !empty($clienteInfo)) { ?>
 								<?php foreach ($clienteInfo as $key => $element) { ?>
 									<tr>

 										<td><?php echo $element['cliente_id']; ?></td>
 										<td><?php echo $element['cod_cliente']; ?></td>
										 <td>
 										<a style="color: inherit;" href="<?php echo site_url('C_cliente/exibir'); ?>/<?php echo $element['cliente_id']; ?>">
										 <?php echo $element['cliente_nome']; ?>
 										</a>
										 </td>
										 <!-- <td><?php echo $element['cliente_cpf']; ?></td>
 										<td><?php echo $element['cliente_cnpj']; ?></td> -->
 										<td><?php echo $element['cliente_telefone']; ?></td>
 										<td><?php echo $element['cliente_cidade']; ?></td>
 										<td><?php echo $element['cliente_endereco']; ?></td>
 										<td><?php echo $element['cliente_bairro']; ?></td>
 										<td><?php echo $element['cliente_cep']; ?></td>
 										<td>
 											<div class="table-data-feature">
 												<a href="<?php echo site_url('C_cliente/exibir'); ?>/<?php echo $element['cliente_id']; ?>">
 													<button class="item" data-toggle="tooltip" data-placement="top" title="Acessar Cliente">
 														<i class="zmdi zmdi-view-list-alt"></i>
 													</button>
 												</a>

 												<a href="<?php echo site_url('C_cliente/delete'); ?>/<?php echo $element['cliente_id']; ?>">
 													<button class="item" data-toggle="tooltip" data-placement="top" title="Deletar">
 														<i class="zmdi zmdi-delete"></i>
 													</button>
 												</a>

 												<!-- <button class="item" data-toggle="modal" data-target="#viewModal">
 														<i class="fas fa-search"  data-toggle="tooltip" data-placement="top" title="Visualizar"></i>
 													</button> -->



 												<?php if ($this->session->userdata('usuario_nivel') == '3') { ?>
 													<a>
 														<div style="padding-left: 10px 10px 10px 10px">
 															<button type="button" class="item" data-toggle="tooltip" data-placement="top" title="Exportar em PDF">
 																<i class="fas fa-file-pdf"></i></button> </div>
 													</a>

 												<?php } ?>
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
 					<?php if (isset($clienteInfo) && is_array($clienteInfo)) echo $page_links; ?>
 				</div>
 			</div>

 			<!-- FIM TABLE  -->

 		</div>
 	</div>
 	</div>
 </section>


 <!-- modal large -->
 <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
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
 					<form method='post' action=<?php echo base_url("C_cliente/criar"); ?>>
 						<script type="text/javascript">
 							function evento(obj) {
 								obj.value = obj.value.toUpperCase();
 							}
 						</script>

 						<div class="form-group">
 							<label for="nome" class=" form-control-label">Codigo do Cliente <small>(APENAS CRM
 									ANTIGO)</small></label>
 							<input type="text" id="cod_cliente" name="cod_cliente" placeholder="Insira o Codigo do Cliente " class="form-control">
 						</div>
 						<div class="form-group" style="display:none">
 							<label for="nome" class=" form-control-label">ID do Usuario </label>
 							<input type="text" id="cliente_id_usuario" value="<?php echo $this->session->userdata('usuario_id'); ?>" name="cliente_id_usuario" placeholder="Insira o nome do Cliente" class="form-control" onblur="evento(this);">
 						</div>
 						<div class="form-group">
 							<label for="nome" class=" form-control-label">Nome do Cliente</label>
 							<input type="text" id="cliente_nome" name="cliente_nome" placeholder="Insira o nome do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="cpf/cnpj" class=" form-control-label">CNPJ</label>
 							<input type="text" id="cnpj" name="cliente_cnpj" maxlength="18" placeholder="Insira o CNPJ do Cliente (se tiver)" class="form-control" onblur="evento(this);">
 						</div>
 						<div class="form-group">
 							<label for="cpf" class=" form-control-label">CPF</label>
 							<input type="text" id="cpf" name="cliente_cpf" maxlength="14" placeholder="Insira o CPF do Cliente (se tiver)" class="form-control" onblur="evento(this);">
 						</div>


 						<div class="form-group">
 							<label for="endereco" class=" form-control-label">Endereço </label>
 							<input type="text" id="vat" name="cliente_endereco" placeholder="Insira o Endereço do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="bairro" class=" form-control-label">Bairro</label>
 							<input type="text" id="street" name="cliente_bairro" placeholder="Insira o Bairro do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="cep" class=" form-control-label">Cep</label>
 							<input type="text" id="cliente_cep" name="cliente_cep" placeholder="Insira o Cep do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="cidade" class=" form-control-label">Cidade</label>
 							<input type="text" id="city" name="cliente_cidade" placeholder="Insira a Cidade do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="estado" class=" form-control-label">Estado</label>
 							<input type="text" id="cliente_estado" name="cliente_estado" placeholder="Insira o Estado do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">País</label>
 							<input type="text" id="postal-code" name="cliente_pais" placeholder="Insira o País do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Insc. Estadual</label>
 							<input type="text" id="cliente_inscricao_estadual" name="cliente_inscricao_estadual" placeholder="Insira a Insc. Estadual do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="row form-group">

 							<div class="col-12 col-md-9">
 								<label for="postal-code" class=" form-control-label">Categoria</label>

 								<select name="cliente_categoria" id="cliente_categoria" class="form-control">
 									<option value="Não Selecionado...">Selecione uma Categoria..</option>
 									<option value="ASSINANTES SITE">ASSINANTES SITE</option>registroModal
 									<option value="ASS.EDUC./CONTÁBIL">ASS.EDUC./CONTÁBIL</option>
									 <option value="ASS.EDUC./JURÍDICO">ASS.EDUC./JURÍDICO</option>
									 <option value="ASS.EDUC./JURÍDICO/CONTÁBIL">ASS.EDUC./JURÍDICO/CONTÁBIL</option>
 									<option value="CONS.JURÍDICO/COBRANÇA">CONS.JURÍDICO/COBRANÇA</option>
 									<option value="FORNECEDORES/ESCOLAS">FORNECEDORES/ESCOLAS</option>
 									<option value="CLIENTES INATIVOS">CLIENTES INATIVOS</option>
 									<option value="TELEMARKETING/FILANTRÓPICAS">TELEMARKETING/FILANTRÓPICAS </option>
 									<option value="ASS-JURÍDICA/COBRANÇA">ASS-JURÍDICA/COBRANÇA</option>
 									<option value="IRREGULARES">IRREGULARES</option>
 								</select>
 							</div>
 						</div>
 						<div class="form-group">
 							<label for="vat" class=" form-control-label">E-Mail </label>
 							<input type="email" id="cliente_email" name="cliente_email" placeholder="Insira o Endereço de E-Mail do Cliente" class="form-control" onblur="evento(this);">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Telefone</label>
 							<input type="text" id="cliente_telefone" name="cliente_telefone" placeholder="Insira o Telefone do Cliente" class="form-control" onblur="evento(this);">
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

 <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalLabel">Resultado da Pesquisa</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">

 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button type="button" class="btn btn-primary">Save changes</button>
 			</div>
 		</div>
 	</div>
 </div>

 <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalLabel">Informações do Cliente</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">Nome</span>
 					</div>
 					<input type="text" value=" <?php echo $element['cliente_nome']; ?>" aria-label="First name" class="form-control" disabled>
 				</div>
 				<br>
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">Número</span>
 					</div>
 					<input type="text" value="<?php echo $element['cliente_telefone']; ?>" aria-label="First name" class="form-control" disabled>
 				</div>
 				<Br>
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">Bairro</span>
 					</div>
 					<input type="text" value="<?php echo $element['cliente_cidade']; ?>" aria-label="First name" class="form-control" disabled>
 				</div>

 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button type="button" class="btn btn-primary">Save changes</button>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- end modal large -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

 <script type="text/javascript">
 	$("#cliente_contato_telefone").mask("(00) 00000-0000");
 	$("#cliente_telefone").mask("(00) 00000-0000");
 	$("#cliente_cep").mask("00000-000");
 	$("#cliente_inscricao_estadual").mask("000.000.000.000");


 	var options = {
 		onKeyPress: function(cnpj, ev, el, op) {
 			var masks = ['000.000.000-000'];
 			$('#cnpj').mask((cnpj.length > 18) ? masks[1] : masks[0], op);
 		}
 	}
 	$('#cnpj').length > 11 ? $('#cnpj').mask('00.000.000/0000-00', options) : $('#cnpj').mask("00.000.000/0000-00#", options);

 	var options = {
 		onKeyPress: function(cpf, ev, el, op) {
 			var masks = ['000.000.000-00'];
 			$('#cpf').mask((cpf.length > 14) ? masks[1] : masks[0], op);
 		}
 	}
 	$('#cpf').length > 11 ? $('#cpf').mask('000.000.000-00', options) : $('#cpf').mask("000.000.000-00#", options);
 </script>