<style>
	body {
		overflow: hidden;
		background-color:;
	}

	.container {
		
		max-width: 1000px;
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
		background: #017cff none repeat scroll 0 0;

 		border-radius: 3px;
		color: white;
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
		padding: 30px 15px 10px 25px;
		width: 100%;
	}

	.sent_msg p {
		background: #017cff none repeat scroll 0 0;
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
		background: #017cff none repeat scroll 0 0;
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

	.load_msg{
	overflow:hidden
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
                                <li class="list-inline-item">Chat

                                </li>
                            </ul>
                        </div>
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
    <?php if(isset($usuarioInfo) && !empty($usuarioInfo)){ ?>
    <div class="container" style="height:1500px;">
        <?php
		$mensagem_id_de = $this->session->userdata('usuario_id');
		$mensagem_id_para = $this->uri->segment(3);
		//print_r($mensagem_id_para); 
		?>

        <script src="http://code.jquery.com/jquery-latest.js">
        </script>


<div class="messaging">
<div class="col-md-12">
	
 	<!-- <img style="height:50px; width:50px;" src="<?php echo base_url(); ?>public/images/perfil/<?php echo $usuarioInfo[0]->usuario_id; ?>.png"> -->
</div>
			<div class="inbox_msg" style="-webkit-box-shadow: 11px 7px 25px 1px rgba(0,0,0,0.4);
-moz-box-shadow: 11px 7px 25px 1px rgba(0,0,0,0.4);
box-shadow: 11px 7px 25px 1px rgba(0,0,0,0.4);">
				<div style="border:1px solid lightgray">
				<!-- <img style="height:70px; width:70px;" src="<?php echo base_url(); ?>public/images/perfil/<?php echo $usuarioInfo[0]->usuario_id; ?>.png"> -->
				<div align="center">
				<?php echo $usuarioInfo[0]->usuario_nome; ?>
				  <?php if($usuarioInfo[0]->usuario_status!= "Online"){ ?>
                  <p style="color:red;font-size:15px;margin:0 0 0px; 55px;"> <i class="fas fa-circle"></i> <?php echo $usuarioInfo[0]->usuario_status;?></p>
                  <?php }else{  ?>
                   <p style="color:green;font-size:15px;margin:0 0 0 55px;"> <i class="fas fa-circle"></i> <?php echo $usuarioInfo[0]->usuario_status;?></p>
                  <?php } ?>
				</div>
				</div>
				<div class="mesgs"> 
                    <div id="load_msg" class="msg_history">
 						<div id="chat">
						<?php if(isset($mensagem) && !empty($mensagem)){ ?>
                        <?php foreach($mensagem as $msg){ ?>
							
						<!-- MENSAGEM RECEBIDA	 -->
                        <?php if($msg->mensagem_id_de != $mensagem_id_de){ ?>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
							<img style="height:50px; width:50px;" src="<?php echo base_url(); ?>public/images/perfil/<?php echo $usuarioInfo[0]->usuario_img; ?>.png">

								</div>
                            <div class="received_msg">
								<div id="fim"></div>
								<div class="received_withd_msg">
									<p><?php echo $msg->mensagem;?></p>
                                    <span class="time_date"> <?php echo $msg->mensagem_hora;?> |
									<?php echo $msg->mensagem_data;?></span>
                                </div>
                            </div>
                        </div>
                        <?php }elseif($msg->mensagem_id_de == $mensagem_id_de){ ?>
 							<div class="outgoing_msg">
								<div class="sent_msg">
									<p><?php echo $msg->mensagem;?></p>
                                <span class="time_date"> <?php echo $msg->mensagem_hora;?> |
								<?php echo $msg->mensagem_data;?></span>
								
                            </div>
						</div>
						
                        <?php }}}else{	
						echo '<div align="center" style="padding-top:10px;"> <p align="center"> Nenhuma mensagem foi enviada, começe dando um Oi!!..</p></div>';
						} ?>
						</div>				
								<div id="fim"></div>

                    </div>
                     
                    <form method="POST" id="form_id" action=""> 
                    <!-- <form method="post" id="form_id" onsubmit="this.submit(); this.reset(); return false;"
                        action="<?//php echo base_url('C_chat/novaMensagem/'); ?>">  -->
                        <div class="type_msg">
                            <input style="display:none" id="mensagem_id_para" name="mensagem_id_para" value="<?php echo $this->uri->segment(3);?>">
                            <div class="input_msg_write">
                                <input type="text" class="write_msg" id="mensagem" name="mensagem"
                                    placeholder="Escreva uma Mensagem.." />
                                <button class="msg_send_btn" id="send" type="submit"><i class="fa fa-paper-plane"
										aria-hidden="true"></i></button>
								
<script>
    $(document).ready(function(){
        $("#form_id").submit(function(e){
            e.preventDefault();
            var mensagem = $("#mensagem").val();
            var mensagem_id_para= $("#mensagem_id_para").val();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>C_chat/novaMensagem',
                data: {mensagem:mensagem, mensagem_id_para:mensagem_id_para},
                success:function(data)
                {
                  //  alert('SUCCESS!!');
				$('#form_id').trigger("reset");
 
                },
                error:function()
                {
                    //alert('fail');
                }
            });
        });
    });
</script>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } else {
						$link = base_url('C_login/logout');
						echo "
						<hr> <br>
						<div align='center'>
							<code> Ocorreu algum erro, entre novamente no sistema...</code>
							<br> <Br>	
						</div>
						 <hr>
						";}?>
</div>

<script> 
$(document).ready(function(){

 setInterval(function(){
       $("#chat").load(window.location.href + " #chat" );
 }, 1000);
 });
</script>



