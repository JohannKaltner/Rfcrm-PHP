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
	<link href="<?php echo base_url(); ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="<?php echo base_url(); ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="<?php echo base_url(); ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url(); ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="<?php echo base_url(); ?>public/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
	<?php date_default_timezone_set('America/Sao_Paulo'); ?>
	<div class="page-wrapper">
		<!-- HEADER DESKTOP-->
		<header class="header-desktop3 d-none d-lg-block" >
			<div class="section__content section__content--p35">
				<div class="header3-wrap">
					<div class="header__logo" style="margin-left:110px">
						<!-- <h1 style="color:#2C0CB8"> RF&A </h1>   -->
						<!-- <a href="<?php echo base_url(); ?>home">
							</a> -->
							<img style="width:70px; " src="<?php echo base_url(); ?>public/images/logo_casa-1-.png" alt="" />
					</div>
					<div class="header__navbar" >
						<ul class="list-unstyled" style="padding-top:5px; ">
							<li class="has-sub">
								<a href="<?php echo base_url(); ?>home">
									<i class="fas fa-home"></i>Dashboard
									<span class="bot-line"></span>
								</a>

							</li>
							<li>
								<a href="<?php echo base_url(); ?>C_cliente">
									<i class="fas fa-users"></i>
									<span class="bot-line"></span>Clientes<span class="badge badge-primary" style="margin: 0 0 0 3px;"><?php
																																		$this->db->select('*');
																																		$query = $this->db->get('cliente');
																																		$num = $query->num_rows();
																																		?>

										<?php echo $num ?></span></a>
							</li>
							<!-- 
							<li>
								<a href="<?php echo base_url(); ?>C_email">
									<i class="fas fa-envelope"></i>
									<span class="bot-line"></span>E-Mail</a>
							</li> -->

							<li>
								<a href="<?php echo base_url(); ?>C_chat">
									<i class="fas fa-comments"></i>
									<span class="bot-line"></span>Chat</a>
							</li>
							<!-- <li>
								<a href="<?php echo base_url(); ?>C_email">
									<i class="fas fa-envelope "></i>
									<span class="bot-line"></span>Email</a>
							</li> -->

						</ul>
						</ul>
					</div>
					<div class="header__tool">

						<div class="header-button-item js-item-menu">
						<?php if(!empty($alert)){ ?>
							<div class="header-button-item has-noti js-item-menu">
						<?php } else{?>
							<div class="header-button-item  js-item-menu">
						<?php } ?>
								<i class="zmdi zmdi-notifications"></i>
								<div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
									<?php
									$this->db->select('alerta_mensagem, alerta_usuario, alerta_titulo, alerta_data');;
									$this->db->from('alerta');
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
									<?php } ?>

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
									<?php } ?>

								</div>
								
							</div>
						</div>

						<?php if ($this->session->userdata('usuario_nivel') == '1') { ?>
							<div class="header-button-item js-item-menu">
								<i class="zmdi zmdi-settings"></i>
								<div class="setting-dropdown js-dropdown">
									<div class="account-dropdown__body">
										<div class="account-dropdown__item">
											<a href="<?php echo base_url(); ?>C_Admin">
												<i class="zmdi zmdi-settings"></i>Administração</a>
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
						<?php } ?>

						<div class="account-wrap">
							<div class="account-item account-item--style2 clearfix js-item-menu">
								<div class="image">
									<div>
										<a>
											<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome'); ?>.jpg" alt="John Doe" />
									</div></a>
								</div>
								<div class="content">
									<a class="js-acc-btn" href="<?php echo site_url('C_login') ?>"> <?php echo $this->session->userdata('usuario_nome'); ?> </a>
								</div>
								<div class="account-dropdown js-dropdown">
									<div class="info clearfix">
										<div class="image">
											<a>
												<!-- imagem de perfil, alterar agora-->
												<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome'); ?>.jpg" alt="John Doe" />
											</a>

											<!-- checkpoint -->
										</div>
										<div class="content">
											<h5 class="name">
												<a href=""><?php echo $this->session->userdata('usuario_nome'); ?> </a>
											</h5>
											<span class="email"><?php echo $this->session->userdata('usuario_email'); ?> </span>
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
		<header class="header-mobile header-mobile-2 d-block d-lg-none">
			<div class="header-mobile__bar">
				<div class="container-fluid">
					<div class="header-mobile-inner">
						<a href="<?php echo base_url(); ?>home">
							<!-- <h1 style="color:#2C0CB8"> RF&A </h1> -->
							<img src="<?php echo base_url(); ?>public/images/icon/logo_completa.png" alt="" />
						</a>

						</a>
						<button class="hamburger hamburger--slider" type="button">
							<span class="hamburger-box" ">
								<span class=" hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<nav class="navbar-mobile" style="padding-top:20px;">
				<div class="container-fluid">
					<ul class="navbar-mobile__list list-unstyled">
						<li class="has-sub">
							<a href="<?php echo base_url(); ?>home"><i class="fas fa-tachometer-alt"></i>Dashboard</a>

						</li>
						<!-- <li class="has-sub">
							<a class="js-arrow" style="color:black;" href="#">
								<i class="fas fa-tachometer-alt"></i>Dashboard</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url(); ?>home">Dashboard</a>
								</li>

							</ul> -->
						<li class="has-sub">
							<a href="<?php echo base_url(); ?>C_cliente"><i class="fas fa-user"></i>
								Clientes </a>
						</li>

						<li>
							<a href="<?php echo base_url(); ?>C_Chat"><i class="fas fa-comment"></i>
								Chat</a>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<div class="sub-header-mobile-2 d-block d-lg-none">
			<div class="header__tool">
				<div class="header-button-item has-noti js-item-menu">
					<i class="zmdi zmdi-notifications"></i>
					<div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
						<?php
						//  if (!empty($alerta)) {
						//     foreach ($alerta as $alert) { 
						?>
						<div class="notifi__item" href="<?php echo base_url(); ?>C_admin/exibirAlerta/<?php echo $alerta->alerta_id; ?>">
							<div class="bg-c1 img-cir img-40">
								<i class="zmdi zmdi-email-open"></i>
							</div>
							<div class="content">


								<div>
									<p>Bem vindo ao novo CRM da RF&A!!</p>
									<span class="date"><?php
														date_default_timezone_set('America/Sao_Paulo');
														echo date('H:i:s / d-m-Y '); ?></span>
								</div>
							</div>

						</div>
						<!-- <? //php }
								// } 
								?> -->
					</div>
					<?php if ($this->session->userdata('usuario_nivel') === '1') { ?>
						<div class="header-button-item js-item-menu">
							<i class="zmdi zmdi-settings"></i>
							<div class="setting-dropdown js-dropdown">

								<div class="account-dropdown__body">
									<div class="account-dropdown__item">
										<a href="<?php echo base_url(); ?>C_admin">
											<i class="zmdi zmdi-account"></i>Administração</a>
									</div>

									<!-- <div class="account-dropdown__item">
								<a href="#">
									<i class="zmdi zmdi-settings"></i>Configurações</a>
							</div>

							<div class="account-dropdown__item">
								<a href="#">
									<i class="zmdi zmdi-money-box"></i>Billing</a>
							</div>
						</div>

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
						</div>
					<?php } ?>
					<div class="account-wrap">
						<div class="account-item account-item--style2 clearfix js-item-menu">
							<div class="image">
								<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome'); ?>.jpg" alt="John Doe" />
							</div>
							<div class="content">
								<a class="js-acc-btn" href="#">Johann Kaltner</a>
							</div>
							<div class="account-dropdown js-dropdown">
								<div class="info clearfix">
									<div class="image">
										<a href="#">
											<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome'); ?>.jpg" alt="John Doe" />
										</a>
									</div>
									<div class="content">
										<h5 class="name">
											<a href="#"><?php echo $this->session->userdata('usuario_nome'); ?></a>
										</h5>
										<span class="email"><?php echo $this->session->userdata('usuario_email'); ?> </span>
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