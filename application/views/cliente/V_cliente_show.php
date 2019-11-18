<?php
date_default_timezone_set('America/Sao_Paulo'); ?>
<section class="p-t-20">
   <div class="page-content--bgf7">
      <div class="container">
         <div class="row ">
            <div class="col-lg-12">
               <div>
                  <div class="container">
                     <div class="default-tab">
                        <nav>
                           <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <!-- AREAS -->
                              <a class="nav-item nav-link active"    
                              id="nav-home-tab"
                              data-toggle="tab"
                              href="#nav-home"
                              role="tab"
                              aria-controls="nav-home"
                              aria-selected="true"
                              style="color:#2C0CB8;">ÁREA DO CLIENTE</a>

                              <a
                              class="nav-item nav-link"
                              id="nav-contato-tab"
                              data-toggle="tab"
                              href="#nav-contato"
                              role="tab"
                              aria-controls="nav-contato"
                              aria-selected="false"
                              style="color:#2C0CB8;"
                              >CONTATOS</a>

                              <a
                              class="nav-item nav-link"
                              id="nav-profile-tab"
                              data-toggle="tab"
                              href="#nav-profile"
                              role="tab"
                              aria-controls="nav-profile"
                              aria-selected="false"
                              style="color:#2C0CB8;"
                              >CHAMADOS</a>

                              <a
                              class="nav-item nav-link"
                              id="nav-correcao-tab"
                              data-toggle="tab"
                              href="#nav-correcao"
                              role="tab"
                              aria-controls="nav-correcao"
                              aria-selected="false"
                              style="color:#2C0CB8;"
                              >CORREÇÕES</a>
                              <!-- FIM AREAS  -->

                              <!-- MODAIS -->
                              <button
                              type="button"
                              class="btn btn-light"
                              data-toggle="modal"
                              data-target="#exampleModal"
                              style="color:#2C0CB8;
                              font-size:18px;"
                              >REGISTRAR CHAMADO
                              </button>

                              <button
                              type="button"
                              class="btn btn-light"
                              data-toggle="modal"
                              data-target="#contatoModal"
                              style="color:#2C0CB8; font-size:18px;"
                              >REGISTRAR CONTATO
                              </button>

                              <button
                              type="button"
                              class="btn btn-light"
                              data-toggle="modal"
                              data-target="#editModal"
                              style="color:#2C0CB8; font-size:18px; "
                              >EDITAR CLIENTE
                              </button>
                              <!-- <button id="correct" type="button" class="btn btn-light" data-toggle="modal" data-target="#correcaoModal" style="color:red; font-size:18px; ">REGISTRAR CORREÇÃO</button> -->

                              <!-- FIM MODAIS  -->

                           </div>
                        </nav>
                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">

                           <!-- NAV HOME   -->
                           <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div>
                                 <form method='post' action="<?php echo site_url('C_Cliente/exibir') ?>/<?php echo $linha->cliente_id; ?>">
                                    <div class="form-group">
                                       <label for="cliente_id" class=" form-control-label">NUMERO DO ID</label>
                                       <input type="text" id="cliente_id" value="<?php echo $linha->cliente_id; ?>" name="cliente_id" placeholder="Id" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="cliente_id" class=" form-control-label">Codigo do Cliente</label>
                                       <input type="text" id="cliente_id" value="<?php echo $linha->cod_cliente; ?>" name="cod_cliente" placeholder="cod_cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="nome" class=" form-control-label">Nome do
                                          Cliente</label>
                                       <input type="text" id="company" value="<?php echo $linha->cliente_nome; ?>" name="cliente_nome" placeholder="Insira o nome do Cliente" disabled="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                       <label for="cpf/cnpj" class=" form-control-label">CNPJ/CPF</label>
                                       <input type="text" id="cliente_cnpj_cpf" value="<?php echo $linha->cliente_cnpj_cpf; ?>" name="cliente_cnpj_cpf" placeholder="Insira o CNPJ do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="endereco" class=" form-control-label">Endereço </label>
                                       <input type="text" id="vat" name="cliente_endereco" value="<?php echo $linha->cliente_endereco; ?>" placeholder="Insira o Endereço do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="bairro" class=" form-control-label">Bairro</label>
                                       <input type="text" id="street" name="cliente_bairro" value="<?php echo $linha->cliente_bairro; ?>" placeholder="Insira o Bairro do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="cep" class=" form-control-label">Cep</label>
                                       <input type="text" id="cliente_cep" name="cliente_cep" value="<?php echo $linha->cliente_cep; ?>" placeholder="Insira o Cep do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="cidade" class=" form-control-label">Cidade</label>
                                       <input type="text" id="city" name="cliente_cidade" value="<?php echo $linha->cliente_cidade; ?>" placeholder="Insira a Cidade do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="estado" class=" form-control-label">Estado</label>
                                       <input type="text" id="cliente_estado" name="cliente_estado" value="<?php echo $linha->cliente_estado; ?>" placeholder="Insira o Estado do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="postal-code" class=" form-control-label">País</label>
                                       <input type="text" id="postal-code" name="cliente_pais" value="<?php echo $linha->cliente_pais; ?>" placeholder="Insira o País do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="postal-code" class=" form-control-label">Insc.
                                          Estadual</label>
                                       <input type="text" id="cliente_inscricao_estadual" name="cliente_inscricao_estadual" value="<?php echo $linha->cliente_inscricao_estadual; ?>" placeholder="Insira a Insc. Estadual do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="postal-code" class=" form-control-label">Categoria</label>
                                       <input type="text" id="postal-code" name="cliente_categoria" value="<?php echo $linha->cliente_categoria; ?>" placeholder="Defina uma Categoria para o Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="vat" class=" form-control-label">E-Mail </label>
                                       <input type="text" id="cliente_email" name="cliente_email" value="<?php echo $linha->cliente_email; ?>" placeholder="Insira o Endereço de E-Mail do Cliente" class="form-control" disabled="">
                                    </div>
                                    <div class="form-group">
                                       <label for="postal-code" class=" form-control-label">Telefone</label>
                                       <input type="text" id="cliente_telefone" name="cliente_telefone" value="<?php echo $linha->cliente_telefone; ?>" placeholder="Insira o Telefone do Cliente" class="form-control" disabled="">
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <!-- FIM NAV HOME -->

                           <!-- NAV CONTATO -->
                           <div class="tab-pane fade" id="nav-contato" role="tabpanel" aria-labelledby="nav-contato-tab">
                              <div style="align-items: center;">
                                 <div class='row'>
                                    <div class="col-md-4">
                                       <?php
                                       if (!empty($contatos)) {
                                          foreach ($contatos as $contato) { ?>
                                             <ul class="list-group">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                   ID: <?php echo $contato->contato_secundario_id; ?>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                   Nome: <?php echo $contato->contato_secundario_nome; ?>
                                                   <span class="badge badge-primary badge-pill"><?php echo $contato->contato_secundario_funcao; ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                   Telefone: <?php echo $contato->contato_secundario_telefone; ?>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                   Telefone: <?php echo $contato->contato_secundario_email; ?>
                                                </li>
                                             </ul>
                                             <br>
                                       <?php }
                                       } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- FIM NAV CONTATO -->

                           <!-- NAV CHAMADOS -->
                           <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <div style="align-items: center;">
                                 <div class="col-md-12">
                                    <?php
                                    if (!empty($chamados)) {
                                       foreach ($chamados as $chamado) { ?>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="card" <?php    ?> href="<?php echo base_url();?>C_cliente/exibir/<?php echo $chamado->chamado_id;?>" style="border: 1px solid grey; box-shadow: 1px 2px  1px 3px #2C0CB8;" ;>
                                                   <!-- <div class=" col-md-6"> -->
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
                                                   <!-- </div> -->
                                                </div>
                                             </div>
                                          </div>
                                    <?php }
                                    } ?>
                                 </div>

                              </div>
                           </div>
                           <!-- FIM NAV CHAMADOS  -->

                           <!-- NAV CORRECAO -->
                           <div class="tab-pane fade" id="nav-correcao" role="tabpanel" aria-labelledby="nav-correcao-tab">
                              <div style="align-items: center;">
                                 <div class="col-md-12">
                                    <?php
                                    if (!empty($correcoes)) {
                                       foreach ($correcoes as $correcao) { ?>
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="card" href="<?php echo base_url();?>C_cliente/exibir/<?php echo $correcao->correcao_id;?>" style="border: 1px solid grey; box-shadow: 1px 2px  1px 3px #E73439;">
                                                   <div class="card-body">
                                                      <h4>Corrigindo o Chamado de ID: <?php echo $correcao->correcao_id_chamado; ?> </h4>
                                                      <Br>
                                                      <p> o(a) cliente <b> <?php echo $correcao->cliente_nome; ?>
                                                            <Br>
                                                         </b> de Codigo <b> <?php echo $correcao->cod_cliente; ?> </b> <br>entrou em contato por
                                                         <b>Ligação</b>.<br>
                                                         Dia <b> <?php echo $correcao->correcao_data; ?> </b> as
                                                         <b><?php echo $correcao->correcao_hora; ?></b> com
                                                         duração de
                                                         <b><?php echo $correcao->correcao_duracao_hora; ?> Horas
                                                            e <?php echo $correcao->correcao_duracao_minuto; ?>
                                                            Minutos </b>
                                                         <b>Atividade:</b> <i>
                                                            <?php echo $correcao->correcao_atividade; ?>
                                                            </b><span>
                                                               <b>Assunto:</b>
                                                               <i><?php echo $correcao->correcao_assunto; ?></i>
                                                            </span> <br>
                                                            <b>Quem Entrou em contato:</b>
                                                            <i><?php echo $correcao->correcao_atendente_cliente; ?></i>
                                                            <b>Pelo numero:</b>
                                                            <i><?php echo $correcao->correcao_telefone; ?> </i>
                                                            <Br>
                                                            <b>Quem Atendeu:</b>
                                                            <i><?php echo $correcao->correcao_atendente_rf; ?></i>
                                                            <p>
                                                   </div>

                                                </div>
                                             </div>
                                          </div>
                                    <?php }
                                    } ?>
                                 </div>
                              </div>
                           </div>
                           <!--  FIM NAV CORRECAO  -->

                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            <div class="card-body">
               <div class="card-title">
                  <h3 class="text-center title-2">Registrar um novo Chamado</h3>
               </div>
               <hr>
               <!-- <form method='post' action="<?php echo base_url('C_Chamado/criarChamado/' . $chamado->chamado_id); ?>" -->
               <form method='post' action="<?php echo base_url('C_Chamado/criarChamado/'); ?>" class="form-horizontal">
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-address-card "></i>
                           </div>
                           <input type="text" id="chamado_assunto" value="<?php echo $linha->cliente_id; ?>" name="chamado_id_cliente" placeholder="Id do Cliente" class="form-control">
                        </div>
                        <small>Qual o ID do cliente? </small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-list-alt"></i>
                           </div>
                           <input type="text" id="chamado_atividade" name="chamado_atividade" placeholder="Atividade" class="form-control">
                        </div>
                        <small>Atividade exercida no Chamado (Duvidas, Informações) </small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-tag"></i>
                           </div>
                           <input type="text" id="chamado_assunto" name="chamado_assunto" placeholder="Assunto" class="form-control">
                        </div>
                        <small>Qual o motivo do contato? </small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-arrow-circle-right"></i>
                           </div>
                           <input type="text" id="chamado_atendente_cliente" name="chamado_atendente_cliente" placeholder="Quem entrou em contato?" class="form-control">
                        </div>
                        <small> Quem falava em nome da empresa?</small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa  fa-arrow-circle-left"></i>
                           </div>
                           <input type="text" id="chamado_atendente_rf" value="<?php echo $this->session->userdata('usuario_nome'); ?>" name="chamado_atendente_rf" placeholder="Quem atendeu ao chamado?" class="form-control">
                        </div>
                        <small> Quem da RF&A atendeu? </small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-6">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa  fa-microphone"></i>
                           </div>
                           <input type="text" id="chamado_duracao" name="chamado_duracao_hora" placeholder="Duração  /Horas" class="form-control">
                        </div>
                        <small> Quanto tempo durou o contato? Horas...</small>
                     </div>
                     <div class="col col-md-6">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa  fa-microphone"></i>
                           </div>
                           <input type="text" id="chamado_duracao" name="chamado_duracao_minuto" placeholder="Duração /Minutos" class="form-control">
                        </div>
                        <small>e quantos minutos? ...</small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-6">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                           </div>
                           <input type="text" id="chamado_data" value="<?php echo date('d/m/Y'); ?>" name="chamado_data" placeholder="Data" class="form-control">
                        </div>
                        <small>Dia em que foi feito o contato</small>
                     </div>
                     <div class="col col-md-6">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                           </div>
                           <input type="text" id="chamado_hora" value="<?php echo date('H:i:s'); ?>" name="chamado_hora" placeholder="Hora" class="form-control">
                        </div>
                        <small> Hora do contato</small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-envelope"></i>
                           </div>
                           <input type="text" id="chamado_duracao" name="chamado_email" placeholder="Email Usado" class="form-control">
                        </div>
                        <small> Opcional</small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-phone"></i>
                           </div>
                           <input type="text" id="chamado_telefone" name="chamado_telefone" placeholder="Telefone usado" class="form-control">
                        </div>
                        <small>Opcional</small>
                     </div>
                  </div>
                  <div class="row form-group">
                     <div class="col col-md-12">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-user"></i>
                           </div>
                           <input type="text" id="chamado_obs" name="chamado_obs" placeholder="Oberservações" class="form-control">
                        </div>
                        <small> Maximo de 200 caracteres, Opcional</small>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" value="save" class="btn btn-primary">Save changes</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="card-body">
            <div class="card-title">
               <h3 class="text-center title-2">Editar Cliente</h3>
            </div>
            <hr>
            <form method='post' action="<?php echo base_url('C_Cliente/update/'); ?>" class="form-horizontal">
               <div class="form-group">
                  <label for="cpf/cnpj" class=" form-control-label">Codigo do Cliente</label>
                  <input type="text" id="cod_cliente" value="<?php echo $linha->cod_cliente; ?>" name="cod_cliente" placeholder="Insira o Codigo do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="nome" class=" form-control-label">Nome do
                     Cliente</label>
                  <input type="text" id="company" value="<?php echo $linha->cliente_nome; ?>" name="cliente_nome" placeholder="Insira o nome do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="cpf/cnpj" class=" form-control-label">CNPJ/CPF</label>
                  <input type="text" id="cliente_cnpj_cpf" value="<?php echo $linha->cliente_cnpj_cpf; ?>" name="cliente_cnpj_cpf" placeholder="Insira o CNPJ do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="endereco" class=" form-control-label">Endereço
                  </label>
                  <input type="text" id="vat" name="cliente_endereco" value="<?php echo $linha->cliente_endereco; ?>" placeholder="Insira o Endereço do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="bairro" class=" form-control-label">Bairro</label>
                  <input type="text" id="street" name="cliente_bairro" value="<?php echo $linha->cliente_bairro; ?>" placeholder="Insira o Bairro do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="cep" class=" form-control-label">Cep</label>
                  <input type="text" id="cliente_cep" name="cliente_cep" value="<?php echo $linha->cliente_cep; ?>" placeholder="Insira o Cep do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="cidade" class=" form-control-label">Cidade</label>
                  <input type="text" id="city" name="cliente_cidade" value="<?php echo $linha->cliente_cidade; ?>" placeholder="Insira a Cidade do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="estado" class=" form-control-label">Estado</label>
                  <input type="text" id="cliente_estado" name="cliente_estado" value="<?php echo $linha->cliente_estado; ?>" placeholder="Insira o Estado do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="postal-code" class=" form-control-label">País</label>
                  <input type="text" id="postal-code" name="cliente_pais" value="<?php echo $linha->cliente_pais; ?>" placeholder="Insira o País do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="postal-code" class=" form-control-label">Insc.
                     Estadual</label>
                  <input type="text" id="cliente_inscricao_estadual" name="cliente_inscricao_estadual" value="<?php echo $linha->cliente_inscricao_estadual; ?>" placeholder="Insira a Insc. Estadual do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="postal-code" class=" form-control-label">Categoria</label>
                  <input type="text" id="postal-code" name="cliente_categoria" value="<?php echo $linha->cliente_categoria; ?>" placeholder="Defina uma Categoria para o Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="vat" class=" form-control-label">E-Mail
                  </label>
                  <input type="text" id="cliente_email" name="cliente_email" value="<?php echo $linha->cliente_email; ?>" placeholder="Insira o Endereço de E-Mail do Cliente" class="form-control">
               </div>
               <div class="form-group">
                  <label for="postal-code" class=" form-control-label">Telefone</label>
                  <input type="text" id="cliente_telefone" name="cliente_telefone" value="<?php echo $linha->cliente_telefone; ?>" placeholder="Insira o Telefone do Cliente" class="form-control">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" value="save" class="btn btn-primary">Save changes</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="correcaoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Correção</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form method='post' action="<?php echo base_url('C_cliente/criarCorrecao/'); ?>" class="form-horizontal">
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-address-card "></i>
                        </div>
                        <input value="<?php echo $linha->cliente_id; ?>" type="text" id="correcao_id_cliente" name="correcao_id_cliente" placeholder="Id do Cliente" class="form-control">
                     </div>
                     <small>Qual o ID do cliente? </small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-address-card "></i>
                        </div>
                        <input value="<?php echo $chamado->chamado_id; ?>" type="text" id="correcao_id_chamado" name="correcao_id_chamado" placeholder="Id do Cliente" class="form-control">
                     </div>
                     <small>Qual o ID do chamado a ser corrigido? </small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-list-alt"></i>
                        </div>
                        <input type="text" id="chamado_atividade" name="correcao_atividade" placeholder="Atividade" class="form-control">
                     </div>
                     <small>Atividade exercida no Chamado (Duvidas, Informações) </small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-tag"></i>
                        </div>
                        <input type="text" id="chamado_assunto" name="correcao_assunto" placeholder="Assunto" class="form-control">
                     </div>
                     <small>Qual o motivo do contato? </small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-arrow-circle-right"></i>
                        </div>
                        <input type="text" id="chamado_atendente_cliente" name="correcao_atendente_cliente" placeholder="Quem entrou em contato?" class="form-control">
                     </div>
                     <small> Quem falava em nome da empresa?</small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa  fa-arrow-circle-left"></i>
                        </div>
                        <input type="text" id="chamado_atendente_rf" name="correcao_atendente_rf" placeholder="Quem atendeu ao chamado?" class="form-control">
                     </div>
                     <small> Quem da RF&A atendeu? </small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-6">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa  fa-microphone"></i>
                        </div>
                        <input type="text" id="chamado_duracao" name="correcao_duracao_hora" placeholder="Duração  /Horas" class="form-control">
                     </div>
                     <small> Quanto tempo durou o contato? Horas...</small>
                  </div>
                  <div class="col col-md-6">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa  fa-microphone"></i>
                        </div>
                        <input type="text" id="chamado_duracao" name="correcao_duracao_minuto" placeholder="Duração /Minutos" class="form-control">
                     </div>
                     <small>e quantos minutos? ...</small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-6">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" id="chamado_data" name="correcao_data" placeholder="Data" class="form-control">
                     </div>
                     <small>Dia em que foi feito o contato</small>
                  </div>
                  <div class="col col-md-6">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" id="chamado_hora" name="correcao_hora" placeholder="Hora" class="form-control">
                     </div>
                     <small> Hora do contato</small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa  fa-envelope-o"></i>
                        </div>
                        <input type="text" id="chamado_duracao" name="correcao_email" placeholder="Email Usado" class="form-control">
                     </div>
                     <small> Opcional</small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" id="chamado_telefone" name="correcao_telefone" placeholder="Telefone usado" class="form-control">
                     </div>
                     <small>Opcional</small>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col col-md-12">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="chamado_obs" name="correcao_obs" placeholder="Oberservações" class="form-control">
                     </div>
                     <small> Maximo de 200 caracteres, Opcional</small>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" value="save" class="btn btn-primary">Save changes</button>
               </div>
            </form>
         </div>

      </div>
   </div>
</div>
<div class="modal fade" id="contatoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Contato</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form method='post' action="<?php echo base_url('C_Cliente/criarContato/'); ?>" class="horizontal-form">
               <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-id-card"></i>
                     </div>
                     <input value="<?php echo $linha->cliente_id; ?>" type="text" id="username" name="cliente_contato_id" placeholder="Id do Cliente" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                     </div>
                     <input type="text" id="username" name="contato_secundario_nome" placeholder="Nome" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                     </div>
                     <input type="email" id="email" name="contato_secundario_email" placeholder="E-mail" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="text" id="contato_secundario_telefone" name="contato_secundario_telefone" placeholder="Telefone" class="form-control">
                  </div>
               </div>
               <div class="form-group">
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                     </div>
                     <input type="text" id="funcao" name="contato_secundario_funcao" placeholder="Função" class="form-control">
                  </div>
               </div>
               <div class="form-actions modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" value="save" class="btn btn-primary">Registrar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
   $("#cliente_contato_telefone").mask("(00) 00000-0000");
   $("#cliente_telefone").mask("(00) 00000-0000");
   $("#cliente_cep").mask("00000-000");
   $("#cliente_cnpj_cpf").mask("000.000.000-00");
   $("#cliente_inscricao_estadual").mask("000.000.000.000");
   $("#contato_secundario_telefone").mask("(00) 00000-0000");
</script>