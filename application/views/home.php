<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style>
.postConteudo {}
</style>

<!-- <script>
    $("#chamado_id_cliente").change(function(){
        var cliente_id = $("#chamado_id_cliente").val();
            $.ajax({
                url: "Home/busca_contatos_by_cliente", // Metodo de buscar juros
                type: "POST",
                data: {cliente_id:cliente_id},
                success: function(data){
                    $("#chamado_atendente_cliente").val(data);
                }
            });
    });
</script> -->
<script>
var base_url = '<? echo base_url() ?>';

function busca_cliente(cliente_id) {
    $.post(base_url + "Home/busca_contatos_by_cliente", {
        cliente_id: cliente_id
    }, function(data) {
        $('#chamado_atendente_cliente').html(data);
    });
}
</script>

<!-- <div class='page-container'> -->

<?php 
if($this->session->userdata('logged_in') == false){
	redirect('C_login');
}?>
<div class="page-content--bgf7">
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">

            <!-- 
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Novidades!</h4>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <p>  Agora é possivel mandar mensagens para o WhatsApp de um contato direto do proprio CRM!! aproveite!</p>
  <hr>
  <p class="mb-0">Para realizar o envio da mensagem, basta entrar em um Cliente e acessar a aba de contatos, lá se encontra o botão!</p>
  <small class="mb-0">é necessario estar com o numero da RICARDO FURTADO conectado ao WhatsApp Web para prosseguir, qualquer mensagem enviada por numero pessoal está completamente proibida</small>
</div> -->
            <?php if($this->session->userdata('usuario_img')=== '0'){
                echo'
                <div class="alert alert-light alert-dismissible fade show" role="alert" style="border:1px solid lightgrey; border-radius: 7px;">
                <strong> Você está sem foto!</strong>  porquê não adiciona uma? é bom manter um clima descontraido no sistema :D
<Br>                <a type="button" href="http://rfcrm/C_perfil" class="btn btn-primary btn-md">Clique Aqui! </a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
} ?>



            <div class="row">
                <div class="col-md-12">
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
                                <a href="<?php echo base_url(); ?>">Dashboard </a>
                            </li>
                        </ul>
                    </div>
                    <hr>

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
                <h1 class="animated   fadeInLeft delay-2s">Bem-vindo,

                    <!-- ADICIONAR O GET_NOME / GET_SETOR-->
                    <span class=""><?php echo $this->session->userdata('usuario_nome'); ?>!</span>
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
                <div class="statistic__item statistic__item--blue">

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
                        <i class="zmdi zmdi-account-o animated infinite pulse zmdi-hc-fw  "></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">

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
                        <i class="zmdi zmdi-phone-forwarded animated infinite pulse zmdi-hc-fw"></i>
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
                        <i class="zmdi zmdi-calendar-note animated infinite pulse zmdi-hc-fw"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number">0</h2>
                    <span class="desc">Horas de ligação</span>
                    <div class="icon">
                        <i class="zmdi zmdi-time animated infinite pulse zmdi-hc-fw"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</section>
<!-- SECTION FEED -->
<!-- STYLE FEED -->
<style>
.post {
    border: 1px solid lightgrey;
    border-radius: 5px;
}

#circle {
    background-color: #aaa;
    border-radius: 50%;
    width: 90px;
    height: 90px;
    overflow: hidden;
    position: relative;
}

#circle img {
    /* position: absolute; */
    bottom: 0;
    width: 100%;
}
</style>
<!-- FIM STYLE FEED -->
<section class="statistic statistic2">
    <div class="container">
        <div align="center">
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Feed Interno

                                <!-- ADICIONAR O GET_NOME / GET_SETOR-->
                                <!-- <span><?php echo $this->session->userdata('usuario_nome'); ?></span> -->
                                <!-- <small> do Setor :<?php echo $this->session->userdata('usuario_setor'); ?></small> -->
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <aside class="profile-nav alt" style="padding:10px 10px 10px 10px; -webkit-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    -moz-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56); border-radius: 7px;">
                <div class="card-header user-header alt" style="border: 0px;margin: 10px 10px 10px 10px">
                    <div class="media">
                        <div style="  padding-bottom: 15px;">
                            <div id="circle" style="border:1px solid lightblack">
                                <img
                                    src="<?php echo base_url(); ?>public/images/perfil/<?php echo $this->session->userdata('usuario_id'); ?>.png">
                            </div>
                        </div>
                        <div class="media-body" style="padding-top: 25px; padding-right:50px;">
                            <form method="post" action="<?php echo base_url("C_publicacao/criarPost"); ?>">
                                <div class="col-md-12 col-md-9">

                                    <textarea name="post_conteudo" id="textarea-input" rows="4"
                                        placeholder="Compartilhe alguma informação..." class="form-control"></textarea>
                                </div>

                                <div align="right" style="padding-left:15px;  padding-top:11px;">
                                    <div class="row form-group" style="padding-right:535px;">
                                        <!-- <i class="fas fa-image"></i> -->

                                        <div class="col-md-4">
                                            <select name="post_categoria" id="select" class="form-control">
                                                <option value="0">Categoria</option>
                                                <option value="Noticia"> Noticia </option>
                                                <option value="Alerta"> Alerta </option>
                                                <option value="Informação"> Informação </option>
                                                <option value="Duvida"> Duvida </option>
                                                <option value="Social"> Social </option>
                                                <option value="Processos"> Processos </option>
                                            </select>
                                        </div>

                                        <div>
                                            <button type="submit" value="save" style="float:right;"
                                                class="btn btn-primary">Publicar.</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </aside>

            <?php if(isset($posts) && !empty($posts)) {  ?>
            <aside class="profile-nav alt" style="padding:10px 10px 10px 10px; -webkit-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    -moz-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56);
											    box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.56); border-radius: 7px;">



                <!--	PUBLICAÇÃO  -->
                <?php foreach($posts as $key => $post){ ?>
                <br>
                <hr><br>
                <div class="card-header user-header alt"
                    style="border: 0px;margin: 10px 10px 10px 10px; padding-bottom:25px;">
                    <div class="media">
                        <div style="  padding-bottom: 15px;">
                            <div id="circle" style="border:1px solid lightblack">
                                <img
                                    src="<?php echo base_url(); ?>public/images/perfil/<?php echo $post->post_usuario_id ?>.png">
                            </div>
                        </div>
                        <div class="media-body" style="padding-top: 25px; padding-right:50px;">
                            <div class="col-md-12 col-md-9">
                                <p disabled="" style="float:left; font-size:20px; padding-bottom: 10px;">
                                    <?php echo $post->post_usuario_nome?>
                                </p>
                                <p>
                                    <?php if($post->post_categoria === "Alerta" ){ ?>

                                    <small style="color:red">
                                        <?php } elseif($post->post_categoria === "Noticia"){ ?>
                                        <small style="color:#007bff">

                                            <?php } elseif($post->post_categoria === "Informação"){ ?>
                                            <small style="color:#27b14d">

                                                <?php } elseif($post->post_categoria === "Duvida"){ ?>
                                                <small style="color:#ff9912">

                                                    <?php } elseif($post->post_categoria === "Social"){ ?>
                                                    <small style="color:#007bff">

                                                        <?php } elseif($post->post_categoria === "Processos"){ ?>
                                                        <?php }else{ ?>
                                                        <small style="color:#b80000">
                                                            <?php } 
                                                    echo $post->post_categoria;
                                                    ?>
                                                        </small>
                                </p>
                                <div class="container">
                                    <div align="left" class="postConteudo">
                                        <div align="left" >
                                            <p style="padding-top:40px;">
                                                <?php echo $post->post_conteudo?>"
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div align="left" style="padding-left:15px;">
                                <p>
                                    <?php echo $post->post_hora;?> / <?php echo $post->post_data;?>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                                    <div classs="col-sm-12">
                                        <div class="col-sm-4" style="float:right; padding-left:220px;">
                                            <?php if(!empty($post->post_usuario_id) && $post->post_usuario_id === $this->session->userdata("usuario_id")){   ?>
                                            <div class="btn-group dropright ">
                                                <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Operações
                                                </button>
                                                <div class="dropdown-menu">
                                                    <p align="center" style="color:inherit;">
                                                        <a href="<?php echo site_url('Home/deletaPost'); ?>/<?php echo $post->post_id; ?>"
                                                            style="color:inherit;">
                                                            <i class="fas fa-trash-alt"></i>
                                                            Excluir
                                                    </p></a>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                </div>

                <?php }  ?>

                <?php }else{ ?>

                <div class="loader">Loading...</div>
                <p>Nenhuma publicação foi feita. </p>
                <?php } ?>

                <!-- FIM PUBLICAÇÕES  -->
            </aside>
</section>

<script>
document.onkeyup = function(e) {
    if (e.which == 112) {
        function abreModal() {
            $("#chamadoModal").modal({
                show: true
            });
        }

        setTimeout(abreModal, 1000);
    } else if (e.which == 113) {
        function abreModal() {
            $("#searchModal").modal({
                show: true
            });
        }

        setTimeout(abreModal, 1000);

    }
};
</script>

<div class="modal fade bd-example-modal-lg" id="searchModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Filtros</h3>
                    </div>
                    <div align='center'>
                        <h3 class="title-5"> </h3>

                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <form class="au-form-icon--sm"
                                    action="<?php echo site_url('C_cliente/buscaContatos');?>" method="post">
                                    <label>Contatos</label>
                                    <input class="au-input--w300 au-input--style2" name="keyword" type="text"
                                        placeholder="procure por Nome ou Telefone...">
                                    <button class="au-btn--submit3">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <form class="au-form-icon--sm" action="<?php echo site_url('C_cliente/busca');?>"
                                    method="post">
                                    <label>Clientes</label>
                                    <input class="au-input--w300 au-input--style2" name="keyword" type="text"
                                        placeholder="procure por Nome ou Codigo...">
                                    <button class="au-btn--submit3">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ABERTURA DE CHAMADO POR ATALHO -->
<div class="modal fade bd-example-modal-lg" id="chamadoModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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

                    <form method='post' action="<?php echo base_url('C_chamado/criarChamadoShortcut/'); ?>"
                        class="form-horizontal">

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <select name="chamado_id_cliente" id="chamado_id_cliente" class="chamado_id_cliente"
                                        onchange='busca_cliente($(this).val())'>
                                        <option value="">Selecione um Cliente</option>
                                        <?php echo $options_cliente; ?>
                                    </select>
                                </div>
                                <small> Quem falava em nome da RF&A?</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <select name="chamado_atendente_cliente" id="chamado_atendente_cliente">
                                    </select>
                                </div>
                                <small> Quem falava em nome da empresa?</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <!--    <input type="text" id="chamado_atividade" name="chamado_atividade" placeholder="Atividade" class="form-control"> -->

                                    <select name="chamado_atividade" id="chamado_atividade">
                                        <option value="Não Selecionado.">Selecione uma Atividade</option>
                                        <option value="Reunião.">Reunião</option>
                                        <option value="Tirar duvida(s)">Tirar duvida(s)</option>
                                        <option value="(por) Ligação">Ligação</option>
                                        <option value="Recebimento de Documentos">Recebimento de Documentos</option>
                                        <option value="Envio de Documentos">Envio de Documentos</option>
                                        <option value="Pedir informação(ões)">Pedir informação(ões)</option>
                                    </select>
                                </div>
                                <small>Atividade exercida no Chamado (Duvidas, Informações) </small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                    <!--    <input type="text" id="chamado_atividade" name="chamado_atividade" placeholder="Atividade" class="form-control"> -->

                                    <select name="chamado_meio" id="chamado_meio">
                                        <option value="">Selecione o Meio de Contato</option>
                                        <option value="Ligacao">Ligação</option>
                                        <option value="E-mail">E-mail</option>
                                    </select>
                                </div>
                                <small>Meio de contato utilizado no Chamado (Ligação ou Email) </small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-tag"></i>
                                    </div>
                                    <input type="text" id="chamado_assunto" name="chamado_assunto" placeholder="Assunto"
                                        class="form-control">
                                </div>
                                <small>Qual o motivo do contato? </small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-arrow-circle-left"></i>
                                    </div>
                                    <input type="text" id="chamado_atendente_rf"
                                        value="<?php echo $this->session->userdata('usuario_nome'); ?>"
                                        name="chamado_atendente_rf" placeholder="Quem atendeu ao chamado?"
                                        class="form-control">
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
                                    <input type="text" id="chamado_duracao" name="chamado_duracao_hora"
                                        placeholder="Duração  /Horas" class="form-control">
                                </div>
                                <small> Quanto tempo durou o contato? Horas...</small>
                            </div>
                            <div class="col col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-microphone"></i>
                                    </div>
                                    <input type="text" id="chamado_duracao" name="chamado_duracao_minuto"
                                        placeholder="Duração /Minutos" class="form-control">
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
                                    <input type="text" id="chamado_data" value="<?php
                            date_default_timezone_set('America/Sao_Paulo');
                             echo date('d/m/Y'); ?>" name="chamado_data" placeholder="Data" class="form-control">
                                </div>
                                <small>Dia em que foi feito o contato</small>
                            </div>
                            <div class="col col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="text" id="chamado_hora" value="<?php
                            date_default_timezone_set('America/Sao_Paulo');
                            echo date('H:i:s'); ?>" name="chamado_hora" placeholder="Hora" class="form-control">
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
                                    <input type="email" id="chamado_duracao" name="chamado_email"
                                        placeholder="Email Usado" class="form-control">
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
                                    <input type="text" id="chamado_telefone" name="chamado_telefone"
                                        placeholder="Telefone usado" class="form-control chamado_telefone">
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
                                    <input type="text" id="chamado_obs" name="chamado_obs" placeholder="Oberservações"
                                        class="form-control">
                                </div>
                                <small> Maximo de 200 caracteres, Opcional</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" value="save" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var wordLimit = 50;

$(function() {

    //trata o conteúdo na inicialização da página
    $('.postConteudo').each(function() {
        var post = $(this);
        var text = post.text();
        //encontra palavra limite
        var re = /[\s]+/gm,
            results = null,
            count = 0;
        while ((results = re.exec(text)) !== null && ++count < wordLimit) {}
        //resume o texto e coloca o link
        if (results !== null && count >= wordLimit) {
            var summary = text.substring(0, re.lastIndex - results[0].length);
            post.text(summary + '...');
            post.data('original-text', text);
            post.append('<br/><button href=".postConteudo" class="read-more">Leia mais</button>');
        }
    });

    //ao clicar num link "Leia mais", mostra o conteúdo original
    $('.read-more').on('click', function() {
        var post = $(this).closest('.postConteudo');
        var text = post.data('original-text');
        post.text(text);
    });

});
</script>