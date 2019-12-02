<div class="container" style="margin-top:35px">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button href="" data-target="#profile" data-toggle="tab" class="nav-link active">Perfil</a>
                </li>
                <li class="nav-item">
                    <button href="" data-target="#messages" data-toggle="tab" class="nav-link">Chamados Registrados</a>
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
                                                                                            $this->db->join('usuario', 'cliente.cliente_id_usuario = usuario.usuario_id');
                                                                                            $this->db->where("cliente.cliente_id_usuario = usuario.usuario_id");
                                                                                            $this->db->order_by('usuario_nome desc');
                                                                                            $query = $this->db->get();
                                                                                            $num = $query->num_rows();
                                                                                            ?>
                                    <?php echo $num ?> Clientes Inseridos</span>
                                <span class="badge badge-primary"><i class="fa fa-user"></i><?php
                                                                                            $this->db->select("chamado.chamado_id_usuario");
                                                                                            $this->db->from('chamado');
                                                                                            $this->db->join('usuario', 'chamado.chamado_id_usuario = usuario.usuario_id');
                                                                                            $this->db->where("chamado.chamado_id_usuario = usuario_id");
                                                                                            $this->db->order_by('usuario_nome desc');
                                                                                            $query = $this->db->get();
                                                                                            $num = $query->num_rows();
                                                                                            ?>
                                    <?php echo $num ?> Chamado Aberto</span>
                                <span class="badge badge-danger"><i class="fa fa-eye"></i> <?php
                                                                                            $this->db->select("correcao.correcao_usuario_id");
                                                                                            $this->db->from('correcao');
                                                                                            $this->db->join('usuario', 'correcao.correcao_usuario_id = usuario.usuario_id');
                                                                                            $this->db->where("correcao.correcao_usuario_id = usuario.usuario_id");
                                                                                            $this->db->order_by('usuario_nome desc');
                                                                                            $query = $this->db->get();
                                                                                            $num = $query->num_rows();
                                                                                            ?>
                                    <?php echo $num ?> Correções Registradas</span>
                                <span class="badge badge-success"><i class="fa fa-cog"></i><?php
                                                                                            $this->db->select("contato_secundario.contato_id_usuario");
                                                                                            $this->db->from('contato_secundario');
                                                                                            $this->db->where("contato_secundario.contato_id_usuario  = usuario.usuario_id");
                                                                                            $this->db->join('usuario', 'contato_secundario.contato_id_usuario = usuario.usuario_id');
                                                                                            $this->db->order_by('usuario_nome desc');
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
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <!-- <form method='post' action="<?php echo site_url('C_login/editaUsuario')?>/<?php echo $result['usuario_id']; ?>" > -->
                    <form >
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $this->session->userdata('usuario_nome'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="<?php echo $this->session->userdata('usuario_email'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Setor</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $this->session->userdata('usuario_setor'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Data de Inicio</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        
                        <!-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                            <div class="col-lg-9">
                                <select id="user_time_zone" class="form-control" size="0">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                        </div> -->
                      <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Senha</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="senha" value="<?php echo $this->session->userdata('usuario_senha'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirmação de Senha</label>
                            <div class="col-lg-9">  
                                <input class="form-control" type="password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-danger" value="Limpar">
                                <!-- <button href="" type="button" class="btn btn-danger" data-target="#profile" data-toggle="tab" > Cancelar </button> -->
                                <button type="button" class="btn btn-primary" value="Save Changes"> Salvar Informações </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome'); ?>.jpg" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <!-- <img class="editable img-responsive" alt=" Avatar" id="avatar2" > -->

            <h6 class="mt-2">Faça upload de uma foto</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Inserir Foto</span>
            </label>
        </div>
    </div>
</div>