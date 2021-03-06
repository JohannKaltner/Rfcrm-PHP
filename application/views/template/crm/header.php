<!DOCTYPE html>
<html lang="en">

<head>

    <!--
	// ─── FAVICONS ───────────────────────────────────────────────────────────────────
-->


    <!-- /favicons-->

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title> <?php echo $page_title ?></title>
    <link rel="icon" href="<?= base_url() ?>/public/images/favicons/apple-touch-icon-60x60.png" type="image/gif">
    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url(); ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url(); ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css"
        rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>public/css/theme.css" rel="stylesheet" media="all">
    <?php setlocale(LC_TIME, 'portuguese'); ?>


</head>

<body class="animsition">


    <script>
    document.body.style.zoom = "90%"
    </script>


    <?php 
if($this->session->userdata('logged_in') == false){
	redirect('C_login');
}
?>
    <?php date_default_timezone_set('America/Sao_Paulo'); ?>
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo" style="margin-left:110px;">

                        <!-- <h1 style="color:#2C0CB8"> RF&A </h1>   -->
                        <!-- <a href="<?php echo base_url(); ?>home">
							</a> -->

                        <img style="width:70px; " src="<?php echo base_url(); ?>public/images/logo_casa-1-.png"
                            alt="" />
                    </div>


                    <div class="header__navbar">
                        <ul class="list-unstyled" style="padding-top:5px; ">
                            <li class="has-sub">
                                <a href="<?php echo base_url(); ?>home">
                                    <i style="color:#00b5e9" class="fas fa-home"></i><span
                                        style="color:# ">Painel</span>
                                    <span class="bot-line"></span>
                                </a>

                            </li>
                            <li class="has-sub">
                                <a href="<?php echo base_url(); ?>C_cliente">
                                    <i style="color:#00b5e9" class="fas fa-users"></i>
                                    <span class="bot-line"></span> <span style="color:# ">Clientes</span>
                                    <!--<span class="badge badge-primary"
										style="margin: 0 0 0 3px;"><?php
										 //$this->db->select('*');$query = $this->db->get('cliente');
										 //$num = $query->num_rows();?>

										<?php// echo $num ?></span> --></a>
                            </li>
                            <?php if($this->session->userdata('usuario_id') == '5'){ ?>
                              <li>
								<a href="<?php echo base_url(); ?>404.php">
								<!-- <a href="<?php echo base_url(); ?>C_nao_cliente"> -->
                                <i style="color:#00b5e9" class="fas fa-user-times"></i>	
                                <span class="bot-line"></span>Não Clientes
                                    </a>
									 
                            </li>  
                            <?php } ?>
                            <li class="has-sub">
                                <a href="<?php echo base_url(); ?>C_chat">
                                    <i style="color:#00b5e9" class="fas fa-comments"></i>
                                    <span class="bot-line"></span> <span style="color:# ">Chat</span>
                                    <!--<span class="badge badge-primary"
										style="margin: 0 0 0 3px;"><?php
										 //$this->db->select('*');$query = $this->db->get('cliente');
										 //$num = $query->num_rows();?>

										<?php// echo $num ?></span> --></a>
                            </li>



                            <!-- <li>
										<a href="http://rfcrm/C_email"><i class="fas fa-envelope"></i>Email</a>
									</li> -->
                            <!-- <li class="has-sub">
								<a href="<?php echo base_url(); ?>plataforma.php">
									<i class="fas fa-envelope"></i>Social
									<span class="bot-line"></span>
								</a>
								<ul class="header3-sub-list list-unstyled">
								<li>
										<a href="http://rfcrm/C_chat">Chat</a>
									</li>
									<li>
										<a href="http://rfcrm/C_email">Email</a>
									</li>
								</ul>
							</li> -->



                        </ul>
                    </div>
                    <div class="header__tool">






                        <!-- <div class="mess__item">
									<div class="image img-cir img-40">
										<img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
									</div>
									<div class="content">
										<h6>Diane Myers</h6>
										<p>You are now connected on message</p>
										<span class="time">Yesterday</span>
									</div>
								</div>
								<div class="mess__footer">
									<a href="#">View all messages</a>
								</div> -->


                        <div class="header-button-item js-item-menu">
                            <?php if(!empty($alert)){ ?>
                            <div class="header-button-item has-noti js-item-menu">
                                <?php } else{?>
                                <div class="header-button-item  js-item-menu">
                                    <?php } ?>
                                    <i style="color:#00b5e9" class="zmdi zmdi-pin-account"></i>
                                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                        <?php $ativo = '1';
									$this->db->select('alerta_mensagem, alerta_usuario, alerta_titulo, alerta_data');;
									$this->db->from('alerta');
									$this->db->where('alerta_status',$ativo);
									$this->db->order_by('alerta_id', 'desc');
									$this->db->limit('3');
									$query = $this->db->get();
									$alert = $query->result();
									?>





                                        <!-- <p><?php print_r($alert); ?> </p> -->
                                        <?php if (!empty($alert[0])) { ?>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p> <b><?php echo $alert[0]->alerta_titulo; ?> </b></p>
                                                <p><?php echo $alert[0]->alerta_mensagem; ?></p>
                                                <span class="date"><?php $alert[0]->alerta_data; ?></span>
                                                <hr>
                                            </div>
                                        </div>

                                        <?php if (!empty($alert[1])) { ?>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p> <b><?php echo $alert[1]->alerta_titulo; ?> </b></p>
                                                <p><?php echo $alert[1]->alerta_mensagem; ?></p>
                                                <span class="date"><?php $alert[1]->alerta_data; ?></span>
                                                <hr>
                                            </div>
                                        </div>
                                        <?php } ?>

                                        <?php if (!empty($alert[2])) { ?>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p> <b><?php echo $alert[2]->alerta_titulo; ?> </b></p>
                                                <p><?php echo $alert[2]->alerta_mensagem; ?></p>
                                                <span class="date"><?php $alert[2]->alerta_data; ?></span> -->
                                            </div>
                                        </div>
                                        <?php }
										} ?>

                                    </div>

                                </div>

                                <?php if(!empty($notification)){?>
                                <div class="header-button-item has-noti js-item-menu">
                                    <?php } else { ?>

                                    <div class="header-button-item js-item-menu">

                                        <?php }    ?>
                                        <script src="http://code.jquery.com/jquery-latest.js"></script>
                                        <script>
                                        $(document).ready(function() {

                                            setInterval(function() {
                                                $("#notifications").load(window.location.href +
                                                    "#notifications");
                                            }, 10000);
                                        });
                                        </script>

                                        <!-- QUERY PARA LISTAGEM DE NOTIFICAÇÕES POR ID_USUARIO -->
                                        <?php 
                                         $this->db->select('*');
                                         $this->db->from('notification');
                                         $this->db->where('notification_status', 'Enviada');
                                         $this->db->where('notification_user_to', $this->session->userdata('usuario_id'));
                                         $this->db->order_by('notification_id', 'DESC');
                                        $query = $this->db->get();
                                        $notification = $query->result();
                                        ?>

                                        <!-- LOGICA PARA EXIBIÇÃO DA NOTIFICAÇÃO -->

                                        <?php if(!empty($notification)){?>
                                        <i style="color:#00b5e9"
                                            class="zmdi zmdi-notifications-active animated infinite headShake delay-5s"></i>
                                        <?php }else{ ?>
                                        <i style="color:#00b5e9" class="zmdi zmdi-notifications"></i>
                                        <?php }?>
                                        <div class="notifi-dropdown js-dropdown">
                                            <?php if(isset($notification) && !empty($notification)){ ?>
                                            <?php foreach($notification as $noti){ ?>
                                            <div class="notifi__item">
                                                <!-- <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div> -->
                                                <div class="content">
                                                    <a
                                                        href="<?php echo base_url('C_chat/chat/' . $noti->notification_id_user); ?>">

                                                        <p> <?php echo $noti->notification_description;?></p>
                                                        <small style="color:black">
                                                            <?php echo $noti->notification_data;?></small>
                                                    </a>
                                                </div>
                                                <a style="color:inherit"
                                                    href="<?php echo site_url('C_notificacao/delete'); ?>/<?php echo $noti->notification_id;?>">
                                                    <i class="zmdi zmdi-tag-close"
                                                        style="font-size:16px;color:red;"></i>
                                                </a>
                                            </div>
                                            <?php }} ?>

                                        </div>
                                    </div>
                                </div>

                                <!-- LOGICA PARA ACESSO AO DASHBOARD ADMIN -->
                                <div class="header-button-item js-item-menu">
                                    <i style="color:#00b5e9" class="zmdi zmdi-settings"></i>
                                    <div class="setting-dropdown js-dropdown">
                                        <div class="account-dropdown__body">
                                            <?php if ($this->session->userdata('usuario_nivel') == '1') { ?>
                                            <div class="account-dropdown__item">
                                                <a href="<?php echo base_url(); ?>C_admin">
                                                    <i class="zmdi zmdi-settings"></i>Administração</a>
                                            </div>
                                            <?php } ?>
                                            <div class="account-dropdown__item">
                                                <a href="<?php echo base_url(); ?>C_historico">
                                                    <i class="zmdi zmdi-phone-paused"></i>Historico de Ligações</a>
                                            </div>

                                        </div>

                                        <!-- <div class="setting-dropdown js-dropdown">
									<div class="account-dropdown__body">
										<div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-account"></i>Conta</a>
										</div>
										<div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-settings"></i>Configurações</a>
										</div>
									</div> -->
                                        <!--
									<div class="account-dropdown__body">
										<div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-globe"></i>Language</a>
										</div>
										<div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-pin"></i>Location</a>
										</div>
										<div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-email"></i>Email</a>
										</div>
										<div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-notifications"></i>Notifications</a>
										</div>
								</div> 
								</div> -->
                                    </div>
                                </div>

                                <div class="account-wrap">
                                    <div class="account-item account-item--style2 clearfix js-item-menu">
                                        <div class="image">
                                            <div>
                                                <a>
                                                    <img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.png"
                                                        alt="" />
                                            </div></a>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="<?php echo site_url('C_login') ?>">
                                                <?php echo $this->session->userdata('usuario_nome'); ?> </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a>
                                                        <!-- imagem de perfil, alterar agora-->
                                                        <img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.png"
                                                            alt="" />
                                                    </a>

                                                    <!-- checkpoint -->
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href=""><?php echo $this->session->userdata('usuario_nome'); ?>
                                                        </a>
                                                    </h5>
                                                    <span
                                                        class="email"><?php echo $this->session->userdata('usuario_email'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <!-- <div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-account"></i>Administração</a>
										</div> -->
                                                <!-- <div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-settings"></i>Configurações de Conta</a>
										</div> -->
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo base_url(); ?>C_perfil/">
                                                        <i class="zmdi zmdi-account"></i>Conta</a>
                                                </div>

                                                <div class="account-dropdown__footer">
                                                    <a href="<?php echo site_url('C_login/logout'); ?>">
                                                        <i class="zmdi zmdi-power"></i>Sair</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->

        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                
                <div class="header-button-item js-item-menu">
                    <i style="color:#017cff" class="zmdi zmdi-home"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="<?php echo base_url(); ?>Home">
                                    <i class="zmdi zmdi-home"></i>Home</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
						  if (!empty($alerta)) {
                              foreach ($alerta as $alert) { 
                                  ?>
                <div class="header-button-item has-noti js-item-menu">
                    <i style="color:#017cff" class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__item"
                            href="<?php echo base_url(); ?>C_admin/exibirAlerta/<?php echo $alerta->alerta_id; ?>">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <div>
                                    <p>Bem vindo ao novo CRM da RF&A!!</p>
                                    <span class="date">
                                        <?php
                                        date_default_timezone_set('America/Fortaleza');
                                        echo date('H:i:s / d-m-Y '); 
                                    ?>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php }
								 } 
								?>
                    <?php if ($this->session->userdata('usuario_nivel') === '1') { ?>
                    <div class="header-button-item js-item-menu">
                        <i style="color:#017cff" class="zmdi zmdi-settings"></i>
                        <div class="setting-dropdown js-dropdown">

                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="<?php echo base_url(); ?>C_admin">
                                        <i class="zmdi zmdi-settings"></i>Administração</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="header-button-item js-item-menu">
                        <i style="color:#017cff" class="zmdi zmdi-account-add"></i>
                        <div class="setting-dropdown js-dropdown">

                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="<?php echo base_url(); ?>C_cliente">
                                        <i class="zmdi zmdi-account-add"></i>Clientes</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="header-button-item js-item-menu">
                        <i style="color:#017cff" class="zmdi zmdi-comment"></i>
                        <div class="setting-dropdown js-dropdown">

                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="<?php echo base_url(); ?>C_chat">
                                        <i class="zmdi zmdi-comment"></i>Chat</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="header-button-item js-item-menu">
                    <i style="color:#017cff" class="zmdi zmdi-search"></i>
                    <div class="setting-dropdown js-dropdown">

                        <div align='center'>
                            <h3 class="title-5"> </h3>

                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <form class="au-form-icon--sm"
                                        action="<?php echo site_url('C_cliente/buscaContatos');?>" method="post">
                                        <label>Contatos</label>
                                        <input class="au-input--w300 au-input--style2" name="keyword" type="text"
                                            placeholder="procure por Nome ou Telefone...">
                                        <button class="au-btn--submit3">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <form class="au-form-icon--sm" action="<?php echo site_url('C_cliente/busca');?>"
                                        method="post">
                                        <label>Clientes</label>
                                        <input class="au-input--w300 au-input--style2" name="keyword" type="text"
                                            placeholder="procure por Nome ou Codigo...">
                                        <button class="au-btn--submit3">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.png"
                                    alt=" " />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn"
                                    href="#"><?php echo $this->session->userdata('usuario_nome'); ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.png"
                                                alt=" " />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $this->session->userdata('usuario_nome'); ?></a>
                                        </h5>
                                        <span class="email"><?php echo $this->session->userdata('usuario_email'); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="<?php echo base_url(); ?>C_perfil">
                                            <i class="zmdi zmdi-account"></i>Conta</a>
                                    </div>


                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="<?php echo site_url('C_login/logout'); ?>">
                                        <i class="zmdi zmdi-power"></i>Sair</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>