<div class="card-body">
                                                      <h4>ID: <?php echo $chamado->chamado_id; ?>
                                                         <button data-toggle="modal" data-target="#correcaoModal">
                                                            <i style="color:red" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                         </button>
                                                      </h4>
                                                      <Br>
                                                      <p> o(a) cliente <b> <?php echo $chamado->cliente_nome; ?>
                                                            <Br>
                                                         </b> de Codigo <b> <?php echo $chamado->cod_cliente; ?> </b> <br>entrou em contato por
                                                         <b>Ligação</b>.<br>
                                                         Dia <b> <?php echo $chamado->chamado_data; ?> </b> as
                                                         <b><?php echo $chamado->chamado_hora; ?></b> com
                                                         duração de
                                                         <b><?php echo $chamado->chamado_duracao_hora; ?> Horas
                                                            e <?php echo $chamado->chamado_duracao_minuto; ?>
                                                            Minutos </b>
                                                         <b>Atividade:</b> <i>
                                                            <?php echo $chamado->chamado_atividade; ?>
                                                            </b><span>
                                                               <b>Assunto:</b>
                                                               <i><?php echo $chamado->chamado_assunto; ?></i>
                                                            </span> <br>
                                                            <b>Quem Entrou em contato:</b>
                                                            <i><?php echo $chamado->chamado_atendente_cliente; ?></i>
                                                            <b>Pelo numero:</b>
                                                            <i><?php echo $chamado->chamado_telefone; ?> </i>
                                                            <Br>
                                                            <b>Quem Atendeu:</b>
                                                            <i><?php echo $chamado->chamado_atendente_rf; ?></i>
                                                            <p>
                                                   </div>