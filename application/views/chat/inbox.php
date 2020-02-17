<style>
  body {overflow: hidden; }
  .container{max-width:1500px; margin:auto;}
  img{ max-width:100%;}
  .inbox_people {
    background: #f8f8f8 none repeat scroll 0 0;
    float: left;
    overflow: hidden;
    
    width: 100%; border-right:1px solid #c4c4c4;
  }
  .inbox_msg {
    border: 1px solid #c4c4c4;
    clear: both;
    overflow: hidden;
    
  }
  .top_spac{ margin: 20px 0 0;}
  

  .recent_heading {float: left; width:40%;}
   
  .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

  .recent_heading h4 {
    color: #05728f;
    font-size: 21px;
    margin: auto;
  }
  .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
  .srch_bar .input-group-addon button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    padding: 0;
    color: #707070;
    font-size: 18px;
  }
  .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

  .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
  .chat_ib h5 span{ font-size:13px; float:right;}
  .chat_ib p{ font-size:14px; color:#989898; margin:auto}
  .chat_img {
    float: left;
    width: 11%;
  }
  .chat_ib {
    float: left;
    padding: 0 0 0 15px;
    width: 88%;
  
  }

  .chat_people{ overflow:hidden; clear:both;}
  .chat_list {
    border-bottom: 1px solid #c4c4c4;
    margin: 0;
    padding: 18px 16px 10px;
    
  }
  .inbox_chat { height: 588px; width:1500px; overflow-y: scroll;}

  .active_chat{ background:#ebebeb;}

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
  .received_withd_msg { width: 57%;}
  .mesgs {
    float: left;
    padding: 30px 15px 0 25px;
    width: 0%;
  }

  .sent_msg p {
    background: #05728f none repeat scroll 0 0;
    border-radius: 3px;
    font-size: 17px;
    margin: 0; color:#fff;
    padding: 5px 10px 5px 12px;
    width:100%;
  }
  .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
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

  .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
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
  .messaging { padding: 0 0 50px 0;}
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
	<div class="container">
<h3 class="text-center" > </h3>
<div class="messaging">
      <div class="inbox_msg" >
        <div class="inbox_people" >
          <div class="headind_srch" >
            <div class="recent_heading">
              <h4 style="color:#017cff;">Usuarios</h4>
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
            <!-- <div class="chat_list active_chat"> -->

            <!-- <h2>Comercial</h2>
            <hr>
            <h2>Contabilidade/DP.Pessoal</h2>
            <hr>
            <h2>Financeiro</h2>
            <hr>
            <h2>Juridico</h2>
            <hr> -->
            <?php if(isset($usuarioInfo) && !empty($usuarioInfo)){ ?>
              <?php foreach($usuarioInfo as $usuario){ ?>
           
            <div class="chat_list">
              <div class="chat_people" style="height:90px;">
                <div class="chat_img">
                <a href="<?php echo base_url();?>C_chat/chat/<?php echo $usuario['usuario_id'];?>" style="color:inherit">
                <?php if(empty($usuario['usuario_img'])){ ?>
                  <img style="height:90px; width:100px;" src="<?php echo base_url(); ?>public/images/perfil/0.png">
                <?php }else{ ?>
                   <img style="height:90px; width:100px;" src="<?php echo base_url(); ?>public/images/perfil/<?php echo $usuario['usuario_id']; ?>.png">
                <?php }  ?> 
                  </div>
                <div class="chat_ib">
                  <h5> <?php echo $usuario['usuario_nome']; ?></a> <span class="chat_date"><?php echo $usuario['usuario_setor']?></span></h5>
                  
                  <?php if($usuario['usuario_status'] != "Online"){ ?>
                  <p style="color:red;"> <i class="fas fa-circle"></i> <?php echo $usuario['usuario_status'];?></p>
                  <?php }else{  ?>
                   <p style="color:green;"> <i class="fas fa-circle"></i> <?php echo $usuario['usuario_status'];?></p>
                  <?php } ?>
                </div>
              </div>
            </div>

              <?php }
              } else {
                echo '<div align="center" style="padding-top:10px;"> <code align="center"> Nenhum Usuario Online..</code></div>';
              } ?>

            
          </div>
        </div>

        <!-- <div class="mesgs">
          <div class="msg_history">
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test which is a new approach to have all
                    solutions</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Test which is a new approach to have all
                  solutions</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test, which is a new approach to have</p>
                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Apollo University, Delhi, India Test</p>
                <span class="time_date"> 11:01 AM    |    Today</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>We work directly with our designers and suppliers,
                    and sell direct to you, which means quality, exclusive
                    products, at a price anyone can afford.</p>
                  <span class="time_date"> 11:01 AM    |    Today</span></div>
              </div>
            </div>
          </div>
          <form method="post" action=<?php echo base_url("C_chat/novaMensagem"); ?>>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" name="mensagem_conteudo" placeholder="Escreva uma Mensagem.." />
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
          </div>
          </form>
        </div> -->
      </div>

</div>
