<style>
	body {
		width: 100%;
		height: 100%;

	}

</style>
<section class="p-t-20">
	<div class="page-content--bgf7">
		<div class="container">
			<div class="page-content--bgf7">
				<div class="card-body card-block">
					<div class="col-md-10"
						style="margin: auto;width: 80%;background: #fff;border: 1px solid #dddddd; padding: 10px; border-radius:5px; box-shadow: 1px 2px 6px 4px #007bff;">
						<div>

							<!-- PARA DEBUG -->
							<!-- <?php print_r($linha);?> -->
							<!-- PARA DEBUG -->
							<div class="card-body" style=" margin: 0 auto;text-align:center;width: 80%;">
								<div class="mx-auto d-block"  >
									<img class="rounded-circle mx-auto d-block"
										src="<?php echo base_url();?>public/images/perfil/<?php echo $linha['0']->usuario_nome; ?>.jpg"
										alt="SEM FOTO DE PERFIL">

									<form method='post'
										action="<?php echo site_url('C_admin/exibir') ?>/<?php echo $linha['0']->usuario_id; ?>">
										<div class="col-md-4" style="margin: 0 auto; width: 50%; ">
											<div class="form-group justify-content-center">
												<label for="cliente_id" class=" form-control-label">NOME</label>
												<input disabled type="text" id="cliente_id"
													value="<?php echo $linha['0']->usuario_nome; ?>" name="cliente_id"
													placeholder="Id" class="form-control">
											</div>
										</div>
										<div class="col-md-4" style="margin: 0 auto; width: 50%; ">
											<div class="form-group">
												<label for="cliente_id" class=" form-control-label">Codigo do
													Cliente</label>
												<input disabled type="text" id="cliente_id"
													value="<?php echo $linha['0']->usuario_id; ?>" name="cod_cliente"
                                                    placeholder="cod_cliente" class="form-control">

                                                    <hr>
                                                    <div style="   display:inline;">
                                                    <button href="" data-toggle="modal" data-target="#editModal">        
                                                    <i class="fa fa-edit"></i><span>
                                                                    <p>Editar </p></span>
                                                    </div>
											</div>
										</div>
								</div>

								<div class="card-text text-sm-center">
									<a href="#">
										<i class="fab fa-facebook pr-2"></i>
									</a>
									<a href="#">
										<i class="fab fa-twitter pr-2"></i>
									</a>
									<a href="#">
										<i class="fab fa-linkedin pr-2"></i>
									</a>
									<a href="#">
										<i class="fab fa-instagram pr-2"></i>
									</a>
								</div>
							</div>
						</div>
						<div style="margin: auto;width: 61%;background: #fff ">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<a href="#" style="padding-left:5px;">
										<i class="fa fa-envelope"></i>Chamados
										<span class="badge badge-primary pull-right"><?php
                                            $this->db->select('*');
                                            $this->db->where('chamado_id_usuario', $this->uri->segment(3));
											$query = $this->db->get('chamado');
											$num = $query->num_rows();
											?>

											<?php echo $num ?></span>
									</a>
									<a href="#" style="padding-left:5px;">
										<i class="fa fa-edit"></i> Correções
										<span class="badge badge-danger pull-right"><?php
                                            $this->db->select('*');
                                            $this->db->where('correcao_usuario_id', $this->uri->segment(3));
											$query = $this->db->get('correcao');
											$num = $query->num_rows();
											?>

											<?php echo $num ?></span>
									</a>
									<a href="#" style="padding-left:5px;">
										<i class="fa fa-user-circle"></i> Clientes
										<span class="badge badge-success pull-right"><?php
                                            $this->db->select('*');
                                            $this->db->where('cliente_id_usuario', $this->uri->segment(3));
											$query = $this->db->get('cliente');
											$num = $query->num_rows();
											?>

											<?php echo $num ?></span>
									</a>
									<a href="#" style="padding-left:5px;">
										<i class="fa fa-vcard"></i> Contatos
										<span class="badge badge-warning pull-right r-activity"><?php
                                            $this->db->select('*');
                                            $this->db->where('contato_id_usuario', $this->uri->segment(3));
											$query = $this->db->get('contato_secundario');
											$num = $query->num_rows();
											?>

											<?php echo $num ?></span>
									</a>
								</li>
								<li class="list-group-item">
								</li>

							</ul>

                        </div>
                        
                        <!-- <div>
                            <h3> Chamados</h3>
                            <div class="row">
                                             <?php if (!empty($correcoes)) {
                                                foreach ($correcoes as $correcao) { ?>
                                                   <div class="col-md-6">
                                                      <div class="card" href="<?php echo base_url(); ?>C_cliente/exibir/<?php echo $correcao->correcao_id; ?>" id="listgroup" style="position: relative!important;">
                                                         <div class="card-header">
                                                            <strong class="card-title">Corrigindo o Chamado
                                                               <small>
                                                                  <span class="badge badge-danger float-right mt-1">Corrigindo o Chamado de ID: <?php echo $correcao->correcao_id_chamado; ?></span>
                                                               </small>
                                                            </strong>
                                                         </div>
                                                         <div id="card" class="card-body">
                                                            <p class="card-text">
                                                               <h5 onHover onMouseOver="this.style.color='#000000'" onMouseOut="this.style.color='#000000'" id="chamadogroup" class="mb-1">
                                                                  <?php echo $correcao->correcao_atendente_cliente ; ?>,<br>
                                                                  <small class="mb-1">Em nome da(o)</small> <?php echo $chamado->cliente_nome; ?>,
                                                                  <small class="mb-1"> Dia <b style="color:black"> <?php echo $correcao->correcao_data; ?>, </b> as
                                                                     <b style="color:black"><?php echo $correcao->correcao_hora; ?></b></small><br></h5>
                                                            </p>
                                                            <div id="no-display">
                                                               <p class="mb-1">Entrou em contato com
                                                                  <b style="color:black"><?php echo $correcao->correcao_atendente_rf; ?></b> para <b style="color:black"><?php echo $correcao->correcao_atividade; ?></b>em relação a
                                                                  <b style="color:black"> <?php echo $correcao->correcao_assunto; ?></b>, o chamado realizado pelo numero <b><?php echo $correcao->correcao_telefone; ?></b>,
                                                                  teve duração de <small> <b style="color:black"><?php echo $correcao->correcao_duracao_hora; ?></b> Hora e <b style="color:black"><?php echo $correcao->correcao_duracao_minuto; ?></b> Minutos.</small>
                                                               </p>
                                                               <hr>
                                                               <br>
                                                               Observações:<br><b style="color:black"><?php echo $correcao->correcao_obs; ?></b><br>
                                                               <hr>
                                                               <button data-toggle="modal" data-target="#correcaoModal" onMouseOver="this.style.color='#007bff'" onMouseOut="this.style.color='#000000'">
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

                            <hr>
                        </div>
                        <div>
                            <h3> Correções</h3>
                            <hr>
                        </div>
                        <div>
                            <h3> Clientes</h3>
                            <hr>
                        </div>
                        <div>
                            <h3> Contatos</h3>
                            <hr>
                        </div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
