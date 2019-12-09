<style>
body{
width: 100%;
height: 100%;

}</style>
<section class="p-t-20">
    <div class="page-content--bgf7">
        <div class="container">
            <div class="page-content--bgf7">
                <div class="card-body card-block">
                    <div class="col-md-10" style="margin: auto;width: 80%;background: #fff;border: 1px solid #dddddd; padding: 10px; border-radius:5px;">
                        <div>
                            <?php print_r($linha);?>
                            <div class="card-body"style=" margin: 0 auto;text-align:center;width: 80%;" >
                                <div class="mx-auto d-block">  
                                <form method='post' action="<?php echo site_url('C_admin/exibir') ?>/<?php echo $linha['0']->usuario_id; ?>">
                                    <div class="col-md-4" style="margin: 0 auto; width: 50%; ">
                                    <div class="form-group justify-content-center">
                                       <label for="cliente_id" class=" form-control-label">NOME</label>
                                       <input  disabled type="text" id="cliente_id" value="<?php echo $linha['0']->usuario_nome; ?>" name="cliente_id" placeholder="Id" class="form-control"  >
                                    </div>
                                    </div>
                                    <div class="col-md-4" style="margin: 0 auto; width: 50%; ">
                                    <div class="form-group">
                                       <label for="cliente_id" class=" form-control-label">Codigo do Cliente</label>
                                       <input  disabled type="text" id="cliente_id" value="<?php echo $linha['0']->usuario_id; ?>" name="cod_cliente" placeholder="cod_cliente" class="form-control"  >
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
                        <div  style="margin: auto;width: 61%;background: #fff ">
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
                                    <a href="#"style="padding-left:5px;">
                                        <i class="fa fa-tasks"></i> Correções
                                        <span class="badge badge-danger pull-right"><?php
                                            $this->db->select('*');
                                            $this->db->where('correcao_usuario_id', $this->uri->segment(3));
											$query = $this->db->get('correcao');
											$num = $query->num_rows();
											?>

							<?php echo $num ?></span>
                                    </a>
                                    <a href="#" style="padding-left:5px;">
                                        <i class="fa fa-bell"></i> Clientes
                                        <span class="badge badge-success pull-right"><?php
                                            $this->db->select('*');
                                            $this->db->where('cliente_id_usuario', $this->uri->segment(3));
											$query = $this->db->get('cliente');
											$num = $query->num_rows();
											?>

							<?php echo $num ?></span>
                                    </a>
                                    <a href="#"style="padding-left:5px;">
                                        <i class="fa fa-comments"></i> Contatos
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>