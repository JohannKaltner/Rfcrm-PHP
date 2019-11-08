<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>RF&A CRM</title>

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

</head>

<body class="animsition">
	<div class="page-wrapper">
		<!-- HEADER DESKTOP-->
		<header class="header-desktop3 d-none d-lg-block">
			<div class="section__content section__content--p35">
				<div class="header3-wrap">
					<div class="header__logo">
						<a href="<?php echo base_url();?>home">
							<!-- <h1 style="color:#2C0CB8"> RF&A </h1> -->
							<img src="<?php echo base_url(); ?>public/images/icon/logo_completa.png" alt="" />
						</a>
					</div>
					<div class="header__navbar">
						<ul class="list-unstyled" style="padding-top:30px;">
							<li class="has-sub">
								<a href="<?php echo base_url(); ?>home">
									<i class="fas fa-home"></i>Dashboard
									<span class="bot-line"></span>
								</a>

							</li>
							<li>
								<a href="<?php echo base_url(); ?>C_cliente">
									<i class="fas fa-users"></i>
									<span class="bot-line"></span>Clientes</a>
							</li>

							<!-- <li>
								<a href="<?php echo base_url(); ?>C_email">
									<i class="fas fa-envelope "></i>
									<span class="bot-line"></span>Email</a>
							</li> -->
							<!-- <li>
                                <a href="table.html">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Features</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Pages</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>UI Elements</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="button.html">Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="card.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="modal.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="switch.html">Switchs</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grids</a>
                                    </li>
                                    <li>
                                        <a href="fontawesome.html">FontAwesome</a>
                                    </li>
                                    <li>
                                        <a href="typo.html">Typography</a>
                                    </li> -->
						</ul>
						</li>
						</ul>
					</div>
					<div class="header__tool">

						<div class="header-button-item js-item-menu">
							  <div class="header-button-item has-noti js-item-menu">  
							<i class="zmdi zmdi-notifications"></i>
							<div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
							 
								<div class="notifi__item">
									<div class="bg-c1 img-cir img-40">
										<i class="zmdi zmdi-email-open"></i>
									</div>
									<div class="content">
										<p>Bem-vindo(a) ao novo CRM da Ricardo Furtado & Associados!</p>
										<span class="date"><?php
								    date_default_timezone_set('America/Sao_Paulo');
								echo date('H:i:s / d-m-Y ');?></span>
									</div>
								</div>
 

							</div>
						</div>

						<div class="header-button-item js-item-menu">
							<!-- <i class="zmdi zmdi-settings"></i>
							<div class="setting-dropdown js-dropdown">
								<div class="account-dropdown__body">
									<div class="account-dropdown__item">
										<a href="#">
											<i class="zmdi zmdi-account"></i>Conta</a>
									</div>
									<div class="account-dropdown__item">
										<a href="#">
											<i class="zmdi zmdi-settings"></i>Configurações</a>
									</div>
								</div><div class="setting-dropdown js-dropdown">
								<div class="account-dropdown__body">
									<div class="account-dropdown__item">
										<a href="#">
											<i class="zmdi zmdi-account"></i>Conta</a>
									</div>
									<div class="account-dropdown__item">
										<a href="#">
											<i class="zmdi zmdi-settings"></i>Configurações</a>
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
								</div> -->
							</div> 
						</div>
						<div class="account-wrap">
							<div class="account-item account-item--style2 clearfix js-item-menu">
								<div class="image">
									<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome');?>.jpg"
										alt="John Doe" />
								</div>
								<div class="content">
									<a class="js-acc-btn" href="<?php echo site_url('C_login')?>"> <?php echo $this->session->userdata('usuario_nome');?> </a>
								</div>
								<div class="account-dropdown js-dropdown">
									<div class="info clearfix">
										<div class="image">
											<a href="#">
												<!-- imagem de perfil, alterar agora-->
												<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome');?>.jpg"
													alt="John Doe" />
											</a>

											<!-- checkpoint -->
										</div>
										<div class="content">
											<h5 class="name">
												<a href="#"><?php echo $this->session->userdata('usuario_nome');?> </a>
											</h5>
											<span class="email"><?php echo $this->session->userdata('usuario_email');?> </span>
										</div>
									</div>
									<div class="account-dropdown__body">
										<!-- <div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-account"></i>Conta</a>
										</div> -->
										<!-- <div class="account-dropdown__item">
											<a href="#">
												<i class="zmdi zmdi-settings"></i>Configurações de Conta</a>
										</div> -->
										<div class="account-dropdown__item" data-toggle="tooltip" data-placement="left" title="Acesse apenas na presença de um Tecnico, por favor!">
											<a href="#">
												<i class="zmdi zmdi-money-box"></i>Historico</a>
                                        </div>
                                        <div class="account-dropdown__footer">
										<a href="<?php echo site_url('C_login/logout');?>">
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
						<a href="<?php echo base_url();?>home">
							<!-- <h1 style="color:#2C0CB8"> RF&A </h1> -->
							<img src="<?php echo base_url(); ?>public/images/icon/logo_completa.png" alt="" />
						</a>
						
						</a>
						<button class="hamburger hamburger--slider"  type="button">
							<span class="hamburger-box" ">
								<span class="hamburger-inner" ></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<nav class="navbar-mobile"  style="padding-top:20px;">
				<div class="container-fluid">
					<ul class="navbar-mobile__list list-unstyled" >
						<li class="has-sub">
							<a class="js-arrow" style="color:black;" href="#">
								<i class="fas fa-tachometer-alt"></i>Dashboard</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url();?>/home">Dashboard</a>
								</li>
								<!-- <li>
									<a href="index2.html">Dashboard 2</a>
								</li>
								<li>
									<a href="index3.html">Dashboard 3</a>
								</li>
								<li>
									<a href="index4.html">Dashboard 4</a>
								</li> -->
							</ul>
						</li>
						<!-- <li>
							<a href="chart.html">
								<i class="fas fa-chart-bar"></i>Charts</a>
						</li>
						<li>
							<a href="table.html">
								<i class="fas fa-table"></i>Tables</a>
						</li>
						<li>
							<a href="form.html">
								<i class="far fa-check-square"></i>Forms</a>
						</li>
						<li>
							<a href="calendar.html">
								<i class="fas fa-calendar-alt"></i>Calendar</a>
						</li>
						<li>
							<a href="map.html">
								<i class="fas fa-map-marker-alt"></i>Maps</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-copy"></i>Pages</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="login.html">Login</a>
								</li>
								<li>
									<a href="register.html">Register</a>
								</li>
								<li>
									<a href="forget-pass.html">Forget Password</a>
								</li>
							</ul>
						</li> -->
						<!-- <li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-desktop"></i>UI Elements</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="button.html">Button</a>
								</li>
								<li>
									<a href="badge.html">Badges</a>
								</li>
								<li>
									<a href="tab.html">Tabs</a>
								</li>
								<li>
									<a href="card.html">Cards</a>
								</li>
								<li>
									<a href="alert.html">Alerts</a>
								</li>
								<li>
									<a href="progress-bar.html">Progress Bars</a>
								</li>
								<li>
									<a href="modal.html">Modals</a>
								</li>
								<li>
									<a href="switch.html">Switchs</a>
								</li>
								<li>
									<a href="grid.html">Grids</a>
								</li>
								<li>
									<a href="fontawesome.html">Fontawesome Icon</a>
								</li>
								<li>
									<a href="typo.html">Typography</a>
								</li> -->
							</ul>
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
					 
						<div class="notifi__item">
							<div class="bg-c1 img-cir img-40">
								<i class="zmdi zmdi-email-open"></i>
							</div>
							<div class="content">
								<p>Bem vindo ao novo CRM da RF&A!!</p>
								<span class="date"><?php
								    date_default_timezone_set('America/Sao_Paulo');
								echo date('H:i:s / d-m-Y ');?></span>
							</div>
						</div>
						 
					</div>
				</div>
				<div class="header-button-item js-item-menu">
					<i class="zmdi zmdi-settings"></i>
					<div class="setting-dropdown js-dropdown">

						<div class="account-dropdown__body">
							<div class="account-dropdown__item">
								<a href="#">
									<i class="zmdi zmdi-account"></i>Conta</a>
							</div>

							<div class="account-dropdown__item">
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
					</div>
				</div>
				<div class="account-wrap">
					<div class="account-item account-item--style2 clearfix js-item-menu">
						<div class="image">
							<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome');?>.jpg" alt="John Doe" />
						</div>
						<div class="content">
							<a class="js-acc-btn" href="#">Johann Kaltner</a>
						</div>
						<div class="account-dropdown js-dropdown">
							<div class="info clearfix">
								<div class="image">
									<a href="#">
										<img src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_nome');?>.jpg"
											alt="John Doe" />
									</a>
								</div>
								<div class="content">
									<h5 class="name">
										<a href="#"><?php echo $this->session->userdata('usuario_nome');?></a>
									</h5>
									<span class="email"><?php echo $this->session->userdata('usuario_email');?> </span>
								</div>
							</div>
							<div class="account-dropdown__body">
								<div class="account-dropdown__item">
									<a href="#">
										<i class="zmdi zmdi-account"></i>Account</a>
								</div>
								<div class="account-dropdown__item">
									<a href="#">
										<i class="zmdi zmdi-settings"></i>Setting</a>
								</div>
								<div class="account-dropdown__item">
									<a href="#">
										<i class="zmdi zmdi-money-box"></i>Billing</a>
								</div>
							</div>
							<div class="account-dropdown__footer">
							<a href="<?php echo site_url('C_login/logout');?>">
									<i class="zmdi zmdi-power"></i>Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
