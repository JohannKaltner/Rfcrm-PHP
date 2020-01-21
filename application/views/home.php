<!-- <div class='page-container'> -->
<?php 
if($this->session->userdata('logged_in') == false){
	redirect('C_login');
}?>
<div class="page-content--bgf7">
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">Você está aqui:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="<?php echo base_url(); ?>Home">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                        <form class="au-form-icon--sm" action="<?php echo site_url('C_cliente/busca');?>" method="post">
                            <input class="au-input--w300 au-input--style2" type="text"
                                placeholder="procure por Clientes &amp; Chamados...">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Bem-vindo,

                        <!-- ADICIONAR O GET_NOME / GET_SETOR-->
                        <span><?php echo $this->session->userdata('usuario_nome'); ?>!</span>
                        <!-- <small> do Setor :<?php echo $this->session->userdata('usuario_setor'); ?></small> -->
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->
    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number"><?php
											$this->db->select('*');
											$query = $this->db->get('cliente');
											$num = $query->num_rows();
											?>

                            <?php echo $num ?> </h2>

                        <span class="desc">Clientes Cadastrados</span>
                        <h2 class="number"><?php
											$this->db->select('*');
											$query = $this->db->get('contato_secundario');
											$num = $query->num_rows();
											?>

                            <?php echo $num ?> </h2>

                        <span class="desc">Contatos Cadastrados</span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number"><?php
											$this->db->select('*');
											$query = $this->db->get('chamado');
											$num = $query->num_rows();
											?>

                            <?php echo $num ?> </h2>
                        <span class="desc">Chamados Realizados</span>
                        <h2 class="number"><?php
											$this->db->select('*');
											$query = $this->db->get('correcao_chamado');
											$num = $query->num_rows();
											?>

                            <?php echo $num ?> </h2>
                        <span class="desc">Correções Realizadas </span>
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">
                            <h2 class="number"><?php
												$this->db->select('*');
												$query = $this->db->get('cliente');
												$this->db->where("DATEDIFF(NOW(), date_and_time) BETWEEN 30 AND 60");
												$num = $query->num_rows();
												?>

                                <?php echo $num ?> </h2>
                        </h2>
                        <span class="desc">Cadastrados esse Mês</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">0</h2>
                        <span class="desc">Horas de ligação</span>
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>
    <!-- SECTION FEED -->
    <!-- STYLE FEED -->
    <style>
    .post {
        border: 1px solid lightgrey;
        border-radius: 5px;
    }

    #circle {
        background-color: #aaa;
        border-radius: 50%;
        width: 90px;
        height: 90px;
        overflow: hidden;
        position: relative;
    }

    #circle img {
        /* position: absolute; */
        bottom: 0;
        width: 100%;
    }
    </style>
    <!-- FIM STYLE FEED -->
    <section class="statistic statistic2">
        <div class="container">
            <div align="center">
                <section class="welcome p-t-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="title-4">Feed Interno

                                    <!-- ADICIONAR O GET_NOME / GET_SETOR-->
                                    <!-- <span><?php echo $this->session->userdata('usuario_nome'); ?></span> -->
                                    <!-- <small> do Setor :<?php echo $this->session->userdata('usuario_setor'); ?></small> -->
                                </h1>
                                <hr class="line-seprate">
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <aside class="profile-nav alt" style="padding:10px 10px 10px 10px; -webkit-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    -moz-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56); border-radius: 7px;">
                    <div class="card-header user-header alt" style="border: 0px;margin: 10px 10px 10px 10px">
                        <div class="media">
                            <div style="  padding-bottom: 15px;">
                                <div id="circle" style="border:1px solid lightblack">
                                    <img
                                        src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.jpg">
                                </div>
                            </div>
                            <div class="media-body" style="padding-top: 25px; padding-right:50px;">
                                <!-- <?php echo $this->session->userdata('usuario_nome');?></h2>
										 <?php echo $this->session->userdata('usuario_setor');?></p>   -->
                                <form method="post" action="<?php echo base_url("C_publicacao/criarPost"); ?>">
                                    <div class="col-md-12 col-md-9">

                                        <textarea name="post_conteudo" id="textarea-input" rows="4"
                                            placeholder="Compartilhe alguma informação..."
                                            class="form-control"></textarea>
                                    </div>

                                    <div align="right" style="padding-left:15px;  padding-top:11px;">
                                        <div class="row form-group" style="padding-right:535px;">
                                            <!-- <i class="fas fa-image"></i> -->

                                            <div class="col-md-4">
                                                <select name="post_categoria" id="select" class="form-control">
                                                    <option value="0">Categoria</option>
                                                    <option value="Noticia"> Noticia </option>
                                                    <option value="Alerta"> Alerta </option>
                                                    <option value="Informação"> Informação </option>
                                                    <option value="Duvida"> Duvida </option>
                                                    <option value="Social"> Social </option>
                                                    <option value="Processos"> Processos </option>
                                                </select>
                                            </div>

                                            <div>
                                                <button type="submit" value="save" style="float:right;"
                                                    class="btn btn-primary">Publicar.</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
                <br>
                <hr><br>

                <?php if(isset($posts) && !empty($posts)) {  ?>
                <!--    FEED    	-->
                <aside class="profile-nav alt" style="padding:10px 10px 10px 10px; -webkit-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    -moz-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56); border-radius: 7px;">



                    <!--	PUBLICAÇÃO  -->
                    <?php foreach($posts as $key => $post){ ?>
                    <div class="card-header user-header alt"
                        style="border: 0px;margin: 10px 10px 10px 10px; padding-bottom:25px;">
                        <div class="media">
                            <div style="  padding-bottom: 15px;">
                                <div id="circle" style="border:1px solid lightblack">
                                    <img
                                        src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.jpg">
                                </div>
                            </div>
                            <div class="media-body" style="padding-top: 25px; padding-right:50px;">
                                <div class="col-md-12 col-md-9">
                                    <p disabled="" style="float:left; font-size:20px; padding-bottom: 10px;">
										<?php echo $post->post_usuario_nome?>
										
										
										
										<?php if($post->post_categoria === "Alerta" ){ ?>
										<small style="color:red"> 

										<?php } elseif($post->post_categoria === "Noticia"){ ?>
										<small style="color:#007bff"> 

										<?php } elseif($post->post_categoria === "Informação"){ ?>
										<small style="color:#27b14d"> 

										<?php } elseif($post->post_categoria === "Duvida"){ ?>
										<small style="color:#ff9912"> 

										<?php } elseif($post->post_categoria === "Social"){ ?>
										<small style="color:#007bff"> 

										<?php } elseif($post->post_categoria === "Processos"){ ?>
										<small style="color:#b80000">
										
										<?php }else{ 
											
										}  ?>

										
										<?php echo $post->post_categoria;?>
										</small></p>
										<div classs="col-sm-12">
											 
                                        <div class="col-sm-4" style="float:right; padding-left:220px;">
                                            <?php if(!empty($post->post_usuario_id) && $post->post_usuario_id === $this->session->userdata("usuario_id")){   ?>
												<div class="btn-group dropright ">
                                                <button type="button" class="btn  dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Operações
                                                </button>

                                                    <div class="dropdown-menu">

                                                        <p align="center">
                                                            <!-- <button href="#" style="color:#212529;">
                                                                <i class="fas fa-edit"></i> Editar</p>
                                                            </button> 
                                                            <hr>-->

                                                            <p align="center" style="color:inherit;"><a href="<?php echo site_url('Home/deletaPost'); ?>/<?php echo $post->post_id; ?>"
                                                                style="color:inherit;">
                                                            <i class="fas fa-trash-alt"></i> Excluir</p></a>
                                                  
                                                    </div>
                                            </div>
                                            <?php } ?>
                                        </div>
									</div>
                                    <textarea disabled="" name="textarea-input" id="textarea-input" rows="4"
                                        placeholder="<?php echo $post->post_conteudo?>" class="form-control"></textarea>
                                </div>
                                <div align="left" style="padding-left:15px;">
                                    <p>
                                        <?php echo $post->post_hora;?> / <?php echo $post->post_data;?>
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }  ?>
                    <?php }else{ ?>
                    <code>Nenhuma publicação foi feita. </code>
                    <?php } ?>

                    <!-- FIM PUBLICAÇÕES  -->
                </aside>
            </div>
        </div>

    </section>