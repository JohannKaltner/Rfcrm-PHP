<div class="container" style="margin-top:35px">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button href="" data-target="#profile" data-toggle="tab" class="nav-link active">Perfil</a>
                </li>
                 <li class="nav-item">
                    <button href="" data-target="#messages" data-toggle="tab" class="nav-link">Ultimos Chamados Realizados</a>
                </li> 
                 <li class="nav-item">
                    <button href="" data-target="#edit" data-toggle="tab" class="nav-link">Editar</a>
                </li> 
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Usuário</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>ID</h6><span>
                                <?php echo $this->session->userdata('usuario_id'); ?>
                            </span>
                            <h6>Nome</h6>
                            <p>
                                <?php echo $this->session->userdata('usuario_nome'); ?>
                            </p>
                            <h6>Setor</h6>
                            <p>
                                <?php echo $this->session->userdata('usuario_setor'); ?>
                            </p>
                         

                         
                            <h6>Privilegio</h6>
                            <p>
                            <?php if($this->session->userdata('usuario_nivel') == 1){ ?>
                                Diretor
                            <?php }elseif($this->session->userdata('usuario_nivel') == 2){ ?>
                                  Gestor  
                            <?php }else{  ?>
                                    Usuario Comum
                            <?php } ?>
                            </p>
                         
                         
                         
                            <!-- <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p> -->
                        </div>
                        <div class="col-md-6" style="border:1px solid grey; border-radius:5px">
                                <!-- <i class="fas fa-archive"></i> -->
                                <span>
                                        <h5 class="mb-3">Baixa de Atividades</h5></span>
                                <!-- <h6>Recent badges</h6>
                            <a href="#" class="badge badge-dark badge-pill">html5</a>
                            <a href="#" class="badge badge-dark badge-pill">react</a>
                            <a href="#" class="badge badge-dark badge-pill">codeply</a>
                            <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="#" class="badge badge-dark badge-pill">css3</a>
                            <a href="#" class="badge badge-dark badge-pill">jquery</a>
                            <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr> -->
                                <span class="badge badge-primary"><i class="fa fa-user"></i><?php
                                                                                            $this->db->select("cliente.cliente_id_usuario");
                                                                                            $this->db->from('cliente');
                                                                                             
                                                                                            $this->db->where(" cliente_id_usuario =" . $this->session->userdata('usuario_id'));
                                                                                             $query = $this->db->get();
                                                                                            $num = $query->num_rows();
                                                                                            ?>
                                    <?php echo $num ?> Clientes Inseridos</span>
                                <span class="badge badge-primary"><i class="fa fa-envelope"></i><?php
                                                                                            $this->db->select("*");
                                                                                            $this->db->from('chamado');
                                                                                            $this->db->where("chamado_id_usuario = " . $this->session->userdata('usuario_id'));
                                                                                             $query = $this->db->get();
                                                                                            $num = $query->num_rows();
                                                                                            ?>
                                    <?php echo $num ?> Chamado Aberto</span>
                                <span class="badge badge-danger"><i class="fa fa-edit"></i> <?php
                                                                                            $this->db->select("*");
                                                                                            $this->db->from('correcao_chamado');
                                                                                            $this->db->where('correcao_usuario_id = ' . $this->session->userdata('usuario_id'));                                                                     $query = $this->db->get();
                                                                                            $num = $query->num_rows();
                                                                                            ?>
                                    <?php echo $num ?> Correções Registradas</span>
                                <span class="badge badge-success"><i class="fa fa-users"></i><?php
                                                                                            $this->db->select("*");
                                                                                            $this->db->from('contato_secundario');
                                                                                            $this->db->where("contato_secundario.contato_id_usuario  = " . $this->session->userdata('usuario_id'));
                                                                                             $query = $this->db->get();
                                                                                            $num = $query->num_rows();
                                                                                            ?>
                                    <?php echo $num ?> Contatos Cadastrados</span>
                        </div>
                        <!-- <div class="col-md-12">
                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <table class="table table-sm table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <!-- <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div> -->
                            <?php if(isset($chamadoPerfil) && !empty($chamadoPerfil)){ ?>
                    <!-- <table class="table table-hover table-striped"> -->
                        <!-- <tbody> -->
                            <?php foreach($chamadoPerfil as $Pchamado){ ?>
                            <!-- <tr>
                                <td style="border:1px solid lightgrey; border-radius: 15px 50px 30px 5px;">
                                    <span class="float-right font-weight-bold"><?php echo $Pchamado->chamado_data;?></span><b>Assunto</b>:&nbsp;<?php echo $Pchamado->chamado_assunto;?> <hr>
                                    <span class="float-right font-weight-bold">Cliente de ID:<?php echo $Pchamado->chamado_id_cliente;?></span><b>Descrição</b>:&nbsp;<?php echo $Pchamado->chamado_obs;?>
                                    <br>
                                </span>
                                </td>
                            </tr> -->
                            <div class="col-md-12">
                                <div class="card border border-secondary">
                                    <div class="card-header">
                                        <strong class="card-title"><?php echo $Pchamado->chamado_assunto;?></strong> <span class="badge badge-primary">CHAMADO DE ID:<?php echo $Pchamado->chamado_id;?></span>
                                    </div>
                                    <div class="card-body">
                                      <small><?php echo $Pchamado->chamado_data;?>   --   <?php echo $Pchamado->chamado_hora;?></small>  
                                        <p class="card-text">
                                            <hr>
                                            <?php echo $Pchamado->chamado_obs;?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                                <?php } ?>
                        <!-- </tbody> -->
                    <!-- </table> -->
                            <?php }?>
                </div>
                        
                                
                                
                                

                <div class="tab-pane" id="edit">
                     <form method='post' action="<?php echo site_url('C_perfil/editaUsuario')?>/<?php echo $this->session->userdata('usuario_id');?>"> 
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="usuario_nome" type="text" value="<?php echo $this->session->userdata('usuario_nome'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="usuario_email" type="email" value="<?php echo $this->session->userdata('usuario_email'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Gmail</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="usuario_gmail" type="email" value="<?php echo $this->session->userdata('usuario_gmail'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Outlook</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="usuario_outlook" type="email" value="<?php echo $this->session->userdata('usuario_outlook'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">WhatsApp</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="usuario_whatsapp" type="text" value="<?php echo $this->session->userdata('usuario_whatsapp'); ?>">
                            </div>
                        </div>
                      <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Senha</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="usuario_senha" type="password" value="<?php echo $this->session->userdata('usuario_senha'); ?>">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-danger" value="Limpar">
                                <!-- <button href="" type="button" class="btn btn-danger" data-target="#profile" data-toggle="tab" > Cancelar </button> -->
                                <button type="submit" class="btn btn-primary" value="save"> Salvar Informações </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.png" class="mx-auto img-fluid img-circle d-block img-responsive" alt="avatar">
            
            <!-- <img class="editable img-responsive" alt=" Avatar" id="avatar2" > -->
                                <form method="POST" enctype="multipart/form-data" action="<?php echo site_url('C_perfil/salvar')?>"> 
            <h6 class="mt-2">Faça upload de uma foto</h6>
            <hr>
            <label class="custom-file">
                <input type="file" name="foto"  id="file" >Inserir Foto</input><br>
                <button class="btn btn-primary" type="submit"  >Concluir</button>
            </label>
        </div>
    </div>
</div>