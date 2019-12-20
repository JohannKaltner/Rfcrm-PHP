<!-- <div class='page-container'> -->
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
							<input class="au-input--w300 au-input--style2" type="text" placeholder="procure por Clientes &amp; Chamados...">
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
	</section>
	<!-- END STATISTIC-->