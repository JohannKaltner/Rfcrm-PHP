<style>
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
    width: 100%;
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


<script>
$(document).ready(function() {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#fim').offset().top
    }, 'slow');
});
</script>

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
        <script type = "text/javascript" >
            setInterval("my_function();", 5000);

        function my_function() {
            $('#inbox_msg').load(location.href + ' #load_msg');
        }
        </script>


        <div class="messaging">
            <div class="inbox_msg">
                <div class="mesgs">
                    <div id="load_msg" class="msg_history">
                        <?php if(isset($mensagem) && !empty($mensagem)){ ?>
                        <?php foreach($mensagem as $msg){ ?>

                        <!-- MENSAGEM RECEBIDA	 -->
                        <?php if($msg->mensagem_id_de != $mensagem_id_de){ ?>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p><?php echo $msg->mensagem;?></p>
                                    <span class="time_date"> <?php echo $msg->mensagem_hora;?> |
                                        <?php echo $msg->mensagem_data;?></span>
                                </div>
                            </div>
                        </div>
                        <?php }elseif($msg->mensagem_id_de == $mensagem_id_de){ ?>
                        <!-- <div id="fim"></div> -->
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p><?php echo $msg->mensagem;?></p>
                                <span class="time_date"> <?php echo $msg->mensagem_hora;?> |
                                    <?php echo $msg->mensagem_data;?></span>
                            </div>

                        </div>
                        <?php }}}else{
							echo '<div align="center" style="padding-top:10px;"> <code align="center"> Nenhuma mensagem foi enviada, começe dando um Oi!!..</code></div>';

						} ?>


                    </div>
                    <script>
                    $('#form_id').trigger("reset");
                    </script>
                    <form method="post" id="form_id" onsubmit="this.submit(); this.reset(); return false;"
                        action="<?php echo base_url("C_chat/novaMensagem"); ?>">
                        <div class="type_msg">
                            <input style="display:none" name="mensagem_id_para"
                                value="<?php echo $this->uri->segment(3);?>">
                            <div class="input_msg_write">
                                <input type="text" class="write_msg" id="mensagem" name="mensagem"
                                    placeholder="Escreva uma Mensagem.." />
                                <button class="msg_send_btn" id="send" type="submit"><i class="fa fa-paper-plane"
                                        aria-hidden="true"></i></button>
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
      $("#load_msg").load(window.location.href + " #load_msg" );
}, 2000);
});
</script>