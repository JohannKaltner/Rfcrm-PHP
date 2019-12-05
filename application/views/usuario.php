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
                                    <div class="form-group">
                                       <label for="cliente_id" class=" form-control-label">NUMERO DO ID</label>
                                       <input type="text" id="cliente_id" value="<?php echo $linha['0']->usuario_nome; ?>" name="cliente_id" placeholder="Id" class="form-control"  >
                                    </div>
                                    <div class="form-group">
                                       <label for="cliente_id" class=" form-control-label">Codigo do Cliente</label>
                                       <input type="text" id="cliente_id" value="<?php echo $linha['0']->usuario_id; ?>" name="cod_cliente" placeholder="cod_cliente" class="form-control"  >
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
                                        <i class="fa fa-envelope-o"></i>Chamados
                                        <span class="badge badge-primary pull-right"><?php
											$this->db->select('*');
											$query = $this->db->get('cliente');
											$num = $query->num_rows();
											?>

							<?php echo $num ?></span>
                                    </a>
                                    <a href="#"style="padding-left:5px;">
                                        <i class="fa fa-tasks"></i> Correções
                                        <span class="badge badge-danger pull-right">15</span>
                                    </a>
                                    <a href="#" style="padding-left:5px;">
                                        <i class="fa fa-bell-o"></i> Clientes
                                        <span class="badge badge-success pull-right">11</span>
                                    </a>
                                    <a href="#"style="padding-left:5px;">
                                        <i class="fa fa-comments-o"></i> Contatos
                                        <span class="badge badge-warning pull-right r-activity">03</span>
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