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
 						<h3 class="title-5 m-b-35">CLIENTES</h3>
 						<div class="table-data__tool">
 							<div class="table-data__tool-left">

 							</div>
 							<form class="au-form-icon--sm" action="<?php echo site_url('C_cliente/busca');?>"
 								method="post">
 								<input class="au-input--w300 au-input--style2" name="keyword" type="text"
 									placeholder="procure por Nome ou Codigo...">
 								<button class="au-btn--submit2">
 									<i class="zmdi zmdi-search"></i>
 								</button>
 							</form>
 						</div>
 						<!-- <?php // if($this->session->userdata('usuario_nivel'== '1')) { 
								?> -->
 						<div class="table-data__tool-right">
 							<button class="au-btn au-btn-icon mb-1 au-btn--green au-btn--small" data-toggle="modal"
 								data-target="#largeModal">
 								<i class="zmdi zmdi-plus"></i> Novo</button>


 							<?php if ($this->session->userdata('usuario_nivel') == '1') { ?>

 							<a href="<?php echo base_url('C_export/csv'); ?>" target="_blank" type="button"
 								class="btn btn-success" data-toggle="tooltip" data-placement="top"
 								title="Recarregue a pagina após o download do arquivo.">
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
 			<div id="pagination_link" class="table-responsive table-responsive-data2">

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
 							<?php if (isset($result) && !empty($result)) { ?>
 							<?php foreach ($result as $row) { ?>
 							<tr>
 								<!-- <?php print_r($result); ?> -->
 								<td><?php echo $row->cliente_id; ?></td>
 								<td><?php echo $row->cod_cliente; ?></td>
 								<td><?php echo $row->cliente_nome; ?></td>
 								<td><?php echo $row->cliente_cpf; ?></td>
 								<td><?php echo $row->cliente_cnpj; ?></td> 
 								<td><?php echo $row->cliente_telefone; ?></td>
 								<td><?php echo $row->cliente_cidade; ?></td>
 								<td><?php echo $row->cliente_endereco; ?></td>
 								<td><?php echo $row->cliente_bairro; ?></td>
 								<td><?php echo $row->cliente_cep; ?></td>
 								<td>
 									<div class="table-data-feature">
 										<a
 											href="<?php echo site_url('C_cliente/exibir'); ?>/<?php echo $row->cliente_id; ?>">
 											<button class="item" data-toggle="tooltip" data-placement="top"
 												title="Acessar Cliente">
 												<i class="zmdi zmdi-view-list-alt"></i>
 											</button>
 										</a>

 										<a
 											href="<?php echo site_url('C_cliente/delete'); ?>/<?php echo $row->cliente_id; ?>">
 											<button class="item" data-toggle="tooltip" data-placement="top"
 												title="Deletar">
 												<i class="zmdi zmdi-delete"></i>
 											</button>
 										</a>

 										<!-- <button class="item" data-toggle="modal" data-target="#viewModal">
 														<i class="fas fa-search"  data-toggle="tooltip" data-placement="top" title="Visualizar"></i>
 													</button> -->



 										<?php if ($this->session->userdata('usuario_nivel') == '1') { ?>
 										<a>
 											<div style="padding-left: 10px 10px 10px 10px">
 												<button type="button" class="item" data-toggle="tooltip"
 													data-placement="top" title="Exportar em PDF">
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
 					<?php if (isset($result) && is_array($result)) echo $page_links; ?>
 				</div>
 			</div>
 			<!-- FIM TABLE  -->

 		</div>
 	</div>
 	</div>
 </section>


 <!-- modal large -->

 


 <!-- end modal large -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

  