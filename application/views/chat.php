 <style>
 	.container {
 		max-width: 1300px;
 		margin: auto;
 	}

 	img {
 		max-width: 100%;
 	}

 	.inbox_people {
 		background: #f8f8f8 none repeat scroll 0 0;
 		float: left;
 		overflow: hidden;
 		width: 40%;
 		border-right: 1px solid #c4c4c4;
 	}

 	.inbox_msg {
 		border: 1px solid #c4c4c4;
 		border-radius: 10px;
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

 	.srch_bar {
 		display: inline-block;
 		text-align: right;
 		width: 60%;
 		padding:
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
 		height: 550px;
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
 		font-size: 14px;
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
 		width: 60%;
 	}

 	.sent_msg p {
 		background: #05728f none repeat scroll 0 0;
 		border-radius: 3px;
 		font-size: 14px;
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
 		padding: 0 0 0px 0;
 	}

 	.msg_history {
 		height: 516px;
 		overflow-y: auto;
 	}

 </style>
 <div class="page-content">
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
								 <li class="list-inline-item active">
 									<a href="<?php echo base_url(); ?>C_usuario/chat">Usuarios</a>
 								</li>
 								<!-- <li class="list-inline-item" >
								 <a href="<?php echo site_url('C_chat/chat');?>">Usuarios</a>

 								</li> -->
								 <li class="list-inline-item seprate">
 									<span>/</span>
 								</li>
 								<li class="list-inline-item" >Chat

 								</li>
 							</ul>
 						</div>

 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
	 		
 	<div class="container">
 		<h3 class=" text-center"></h3><hr>
 		<div class="messaging"  style="-webkit-box-shadow: 4px 4px 26px -4px rgba(0,0,0,0.63);
	 								    -moz-box-shadow: 4px 4px 26px -4px rgba(0,0,0,0.63);
										box-shadow: 4px 4px 26px -4px rgba(0,0,0,0.63);">
 			<div class="inbox_msg">
 				<div style="margin:10px 10px 10px 10px;">
 					<div class="msg_history">
 						<div style="  text-align: center;">
 							<p> Conversa com <?php echo $usuarioInfo[0]->usuario_nome;?>	<?//php print_r($usuarioInfo);?></p>
							<hr>
						</div>
						<br>
										 
						 		        <?php if (isset($mensagem) && !empty($mensagem)) { ?>  
											 <?php foreach($mensagem as $msg){ ?>  
												
												<?php if($msg->mensagem_destinatario_id == $usuarioInfo[0]->usuario_id ){ ?>
												
													 <!-- <div class="incoming_msg" href="<?php echo base_url(); ?>C_chat/chat/<?php echo $msg->mensagem_id; ?>"> -->
													 <div class="incoming_msg">
														<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png"
																alt="sunil"> </div>
														<div class="received_msg">
															<div class="received_withd_msg">
																<p><?php echo $msg->mensagem_conteudo;?></p>
																<span class="time_date"> <?php echo $msg->mensagem_data_envio;?></span>
															</div>
														</div>
													</div>
												
													
												<?php } ?>
												
												
												<?php if($msg->mensagem_remetente_id == $this->session->userdata('usuario_id')){ ?>
 														<div class="outgoing_msg">
 															<div class="sent_msg">
															 <p><?php echo $msg->mensagem_conteudo;?></p>
																 <span class="time_date"> <?php echo $msg->mensagem_data_envio;?></span>
 															</div>
 														</div>
													 <?php }?>
												
										<?php } ?>
									<?php }else{ echo "<p>O Chat está Vazio.</p>";}  ?>

					 </div>
 					<form method='post' action=<?php echo base_url("C_chat/novaMensagem"); ?>>
 					<div class="type_msg" style="align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
						 <div class="col-md-6">
 						<div class="input_msg_write" style="border:1px solid lightgrey;border-radius:9px; margin:5px 5px 5px 0;">
 							<input type="text" id="mensagem_conteudo" name="mensagem_conteudo" class="write_msg" placeholder="Digite uma Mensagem" style=" padding-left:10px" />
 							<input style="display:none;" type="text" id="mensagem_destinatario_id" name="mensagem_destinatario_id" value=<?php echo $usuarioInfo[0]->usuario_id;?> class="write_msg" placeholder="Digite uma Mensagem" style=" padding-left:10px" />
							<div style=" padding-left:10px"> 
							 <button class="msg_send_btn" type="submit" value="save"><i  class="fas fa-paper-plane"aria-hidden="true"></i></button>
							 </div> 
						 </div>
						 </div>
					 </div>
					 </form>
 				</div>
 			</div>
 		</div>

 	</div>
