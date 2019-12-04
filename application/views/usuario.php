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
                            <div class="card-body"style=" margin: 0 auto;text-align:center;width: 80%;" >
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url(); ?>public/images/perfil/<?php echo $linha['usuario_nome']; ?>.jpg" alt="Card image cap">
                                    <h3 class="text-sm-center mt-2 mb-1"><?php echo $linha['usuario_nome']; ?></h3>
                                    <div class="location text-sm-center">
                                        <i class="fa fa-university" aria-hidden="true"></i> <?php echo $linha->usuario_setor; ?></div>
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