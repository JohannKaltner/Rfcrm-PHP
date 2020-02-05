<?php
$divChat = "if($msg->mensagem_id_de != $mensagem_id_de){ ?>
						<div class='incoming_msg'>
							<div class='incoming_msg_img'>
							</div>
							<div class='received_msg'>
								<div class='received_withd_msg'>
									<p><?php echo $msg->mensagem;?></p>
									<span class='time_date'> <?php echo $msg->mensagem_hora;?> | <?php echo $msg->mensagem_data;?></span>
								</div>
							</div>
						</div>
					<?php }elseif($msg->mensagem_id_de == $mensagem_id_de){ ?>
						<div class='outgoing_msg'>
							<div class='sent_msg'>
							<p><?php echo $msg->mensagem;?></p>
								<span class='time_date'> <?php echo $msg->mensagem_hora;?> | <?php echo $msg->mensagem_data;?></span>
							</div>

						</div>
							<div id='fim'></div>
						<?php } >"

?>