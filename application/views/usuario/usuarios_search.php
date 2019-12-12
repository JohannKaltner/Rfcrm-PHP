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
 								<a href="<?php echo base_url(); ?>C_Usuario">Usuarios </a>
 							</li>
 						</ul>
 					</div>
 					<br>
 					<div>
 						<h3 class="title-5 m-b-5"> </h3>
 						<div class="table-data__tool">
 							<div class="table-data__tool-left">

 							</div>
 							<form class="au-form-icon--sm" action="<?php echo site_url('C_usuario/busca');?>"
 								method="post">
 								<input class="au-input--w300 au-input--style2" name="keyword" type="text"
 									placeholder="procure por Nome ou Codigo...">
 								<button class="au-btn--submit2">
 									<i class="zmdi zmdi-search"></i>
 								</button>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
  			<!-- inicio table -->
 			<div class="col-md-12" style="margin: 0 auto;width: 50%">
 				<div id="pagination_link" class="table-responsive table-responsive-data3" style="border: 1px solid lightgrey; border-radius:8px;">
 					<div id="cliente_table" style="">
 						<table class="table table-top-campaign">
 							<thead>
 								<tr>
 									<th>NOME</th>
 									<th>SETOR</th>
 									<th></th>

 								</tr>
 							</thead>
 							<tbody>
 		    					<?php if (isset($usuarioInfo) && !empty($usuarioInfo)) { ?>
 		    					    	<?php foreach ($usuarioInfo as $key => $element) { ?>
 		    						    <tr>
                                            <td style="color:black"><?php echo $element['usuario_nome']; ?></td>
                                            <td style="color:black"><?php echo $element['usuario_setor']; ?></td>
                                            <td> 
                                                <div class=" table-data-feature">
                                                    <a href="<?php echo site_url('C_admin/exibir'); ?>/<?php echo $element['usuario_id']; ?>">
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
 			      		                        </div>          
 				       	                    </td>
 					                    </tr>
                                         <?php } ?>      
                                         
 					            <?php } else { ?>
                                         
                                    <tr>
 					                	<td colspan="4">O Banco de Clientes está Vazio.</td> 
                                    </tr>
 					            <?php } ?>
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
 	    </div>
 	</div>
</section>



 <!-- end modal large -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
