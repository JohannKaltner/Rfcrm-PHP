<style>
	.ui-state-active {
		display: none
	}

	body {
		overflow: hidden;
	}

	.container {
		max-width: 1500px;
		margin: auto;
	}

	img {
		max-width: 100%;
	}

	.inbox_people {
		background: #f8f8f8 none repeat scroll 0 0;
		float: left;
		overflow: hidden;

		width: 100%;
		border-right: 1px solid #c4c4c4;
	}

	.inbox_msg {
		border: 1px solid #c4c4c4;
		clear: both;
		overflow: hidden;

	}

	.top_spac {
		margin: 20px 0 0;
	}


	.recent_heading {
		float: left;
		width: 40%;
	}

	.headind_srch {
		padding: 10px 29px 10px 20px;
		overflow: hidden;
		border-bottom: 1px solid #c4c4c4;
	}

	.recent_heading h4 {
		color: #05728f;
		font-size: 21px;
		margin: auto;
	}

	.srch_bar input {
		border: 1px solid #cdcdcd;
		border-width: 0 0 1px 0;
		width: 80%;
		padding: 2px 0 4px 6px;
		background: none;
	}

	.srch_bar .input-group-addon button {
		background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		border: medium none;
		padding: 0;
		color: #707070;
		font-size: 18px;
	}

	.srch_bar .input-group-addon {
		margin: 0 0 0 -27px;
	}

	.chat_ib h5 {
		font-size: 15px;
		color: #464646;
		margin: 0 0 8px 0;
	}

	.chat_ib h5 span {
		font-size: 13px;
		float: right;
	}

	.chat_ib p {
		font-size: 14px;
		color: #989898;
		margin: auto
	}

	.chat_img {
		float: left;
		width: 11%;
	}

	.chat_ib {
		float: left;
		padding: 0 0 0 15px;
		width: 88%;

	}

	.chat_people {
		overflow: hidden;
		clear: both;
	}

	.chat_list {
		border-bottom: 1px solid #c4c4c4;
		margin: 0;
		padding: 18px 16px 10px;

	}

	.inbox_chat {
		height: 588px;
		width: 1500px;
		overflow-y: scroll;
	}

	.active_chat {
		background: #ebebeb;
	}

	.incoming_msg_img {
		display: inline-block;
		width: 6%;
	}

	.received_msg {
		display: inline-block;
		padding: 0 0 0 10px;
		vertical-align: top;
		width: 92%;
	}

	.received_withd_msg p {
		background: #ebebeb none repeat scroll 0 0;
		border-radius: 3px;
		color: #646464;
		font-size: 17px;
		margin: 0;
		padding: 5px 10px 5px 12px;
		width: 100%;
	}

	.time_date {
		color: #747474;
		display: block;
		font-size: 12px;
		margin: 8px 0 0;
	}

	.received_withd_msg {
		width: 57%;
	}

	.mesgs {
		float: left;
		padding: 30px 15px 0 25px;
		width: 0%;
	}

	.sent_msg p {
		background: #05728f none repeat scroll 0 0;
		border-radius: 3px;
		font-size: 17px;
		margin: 0;
		color: #fff;
		padding: 5px 10px 5px 12px;
		width: 100%;
	}

	.outgoing_msg {
		overflow: hidden;
		margin: 26px 0 26px;
	}

	.sent_msg {
		float: right;
		width: 46%;
	}

	.input_msg_write input {
		background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		border: medium none;
		color: #4c4c4c;
		font-size: 15px;
		min-height: 48px;
		width: 100%;
	}

	.type_msg {
		border-top: 1px solid #c4c4c4;
		position: relative;
	}

	.msg_send_btn {
		background: #05728f none repeat scroll 0 0;
		border: medium none;
		border-radius: 50%;
		color: #fff;
		cursor: pointer;
		font-size: 17px;
		height: 33px;
		position: absolute;
		right: 0;
		top: 11px;
		width: 33px;
	}

	.messaging {
		padding: 0 0 50px 0;
	}

	.msg_history {
		height: 516px;
		overflow-y: auto;
	}

</style>



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
								<li class="list-inline-item">Email
 								</li>
							</ul>
						</div>
						<?//php var_dump($cliente); ?>

						<!-- <form class="au-form-icon--sm" action="" method="post">
							<input class="au-input--w300 au-input--style2" type="text"
								placeholder="procure por Clientes &amp; Chamados...">
							<button class="au-btn--submit2" type="submit">
								<i class="zmdi zmdi-search"></i>
							</button>
						</form> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END BREADCRUMB-->

	    <!-- WELCOME-->
   

	<div class="container">
		<h3 class="text-center"> </h3>
		<div class="messaging">
			<div class="inbox_msg">
				<div class="inbox_people">
					<div class="headind_srch">
						<div class="recent_heading">
							<h4 style="color: #007bff;">Novo Email</h4>
						</div>
						<!-- <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Procurar" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div> -->
					</div>
					<div class="inbox_chat" style="height:680px;">
						<div style="padding: 0px 10px 10px 0px">
                        <div class="col-md-12">
 						<form method='post' action="<?php echo base_url('C_email/enviar'); ?>/<?php echo $cliente[0]->cliente_id; ?>">
							<div class="form-group">										
 
								<label for="recipient-name" class="col-form-label">Para:</label>
								<select class="form-control" name="email_para" id="contato_list">
												<option value="">Selecione um Contato</option>
												<?php
 												 echo $options_contatos; 
												 ?>
											</select>
								
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Assunto:</label>
									<input class="form-control" name="email_assunto"> 
							</div>			
							<div class="form-group">
								<label for="message-text" class="col-form-label">Algum Anexo?</label>
									<input class="form-control" type="file" name="email_anexo" accept=".doc, .docx, .pdf, .csv, .txt, .png, .jpg"> 
							</div>			

  								<textarea rows="17" class="form-control" name="email_mensagem" id="message-text"></textarea>
 					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" value="save" class="btn btn-primary">Encaminhar Email</button>
					</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- MODAL EMAIL -->
 
		 
