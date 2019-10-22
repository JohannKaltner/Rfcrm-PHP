<section class="p-t-20">
 	<div class="page-content--bgf7">
 		<div class="container">
<div>

					 <form method='post' action="<?php echo site_url('C_cliente/update')?>/<?php echo $row->cliente_id; ?>" >
					 
 						<div class="form-group">
 							<label for="nome" class=" form-control-label">Nome do Cliente</label>
							 <input type="text" id="company" value="<?php echo $row->cliente_nome; ?>"
							  name="cliente_nome" placeholder="Insira o nome do Cliente"
 								class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="cpf/cnpj" class=" form-control-label">CNPJ/CPF</label>
 							<input type="text" id="cliente_cnpj_cpf" value="<?php echo $row->cliente_cnpj_cpf; ?>" name="cliente_cnpj_cpf"
 								placeholder="Insira o CNPJ do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="endereco" class=" form-control-label">Endereço </label>
 							<input type="text" id="vat" name="cliente_endereco" value="<?php echo $row->cliente_endereco; ?>"
 								placeholder="Insira o Endereço do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="bairro" class=" form-control-label">Bairro</label>
 							<input type="text" id="street" name="cliente_bairro" value="<?php echo $row->cliente_bairro; ?>"
 								placeholder="Insira o Bairro do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="cep" class=" form-control-label">Cep</label>
 							<input type="text" id="cliente_cep" name="cliente_cep" value="<?php echo $row->cliente_cep; ?>"
 								placeholder="Insira o Cep do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="cidade" class=" form-control-label">Cidade</label>
 							<input type="text" id="city" name="cliente_cidade" value="<?php echo $row->cliente_cidade; ?>" placeholder="Insira a Cidade do Cliente"
 								class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="estado" class=" form-control-label">Estado</label>
 							<input type="text" id="cliente_estado" name="cliente_estado" value="<?php echo $row->cliente_estado; ?>"
 								placeholder="Insira o Estado do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">País</label>
 							<input type="text" id="postal-code" name="cliente_pais" value="<?php echo $row->cliente_pais; ?>"
 								placeholder="Insira o País do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Insc. Estadual</label>
 							<input type="text" id="cliente_inscricao_estadual" name="cliente_inscricao_estadual" value="<?php echo $row->cliente_inscricao_estadual; ?>"
 								placeholder="Insira a Insc. Estadual do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Categoria</label>
 							<input type="text" id="postal-code" name="cliente_categoria" value="<?php echo $row->cliente_categoria; ?>"
 								placeholder="Defina uma Categoria para o Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="vat" class=" form-control-label">E-Mail </label>
 							<input type="text" id="cliente_email" name="cliente_email" value="<?php echo $row->cliente_email; ?>"
 								placeholder="Insira o Endereço de E-Mail do Cliente" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Telefone</label>
 							<input type="text" id="cliente_telefone" name="cliente_telefone" value="<?php echo $row->cliente_telefone; ?>"
 								placeholder="Insira o Telefone do Cliente" class="form-control">
 						</div>

 						<h4>Outros Contatos </h4>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label">Nome</label>
 							<small style="color:red"> Opcional</small>
 							<input name="cliente_contatos" type="text" id="postal-code" value="<?php echo $row->cliente_contato_nome; ?>"
 								placeholder="Insira o nome do contato secundario" class="form-control">
 						</div>

 						<div class="form-group">
 							<label for="postal-code" class=" form-control-label"> Numero</label>
 							<input name="cliente_contatos" type="text" id="cliente_contato_telefone" 
 								placeholder="Insira o numero do contato secundario" class="form-control">
 						</div>

				 </div>
				 
				 <a href= "cliente/V_cliente">  
				 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				 </a>
 				<button type="submit" class="btn btn-primary" value="save">Confirmar</button>
 				</form>
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
</div>
</div>
</section>

