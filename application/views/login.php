<!doctype html>
<html lang="en">

<head>
    <title>RFCRM | Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public2/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public2/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public2/assets/vendor/animate-css/vivify.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public2/html/assets/css/site.min.css">

</head>

<body class="theme-cyan font-montserrat light_version">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <div class="auth-main2 particles_js">
        <div class="auth_div vivify fadeInTop">
            <div class="card">
                <div class="body">
                    <div class="login-img">
                        <img class="img-fluid" src="<?php echo base_url(); ?>public2/assets/images/login-img.png" />
                    </div>
                    <form class="form-auth-small" action="<?php echo site_url('C_login/auth'); ?>" method="post">
                        <div class="mb-3">
                            <h3> Bem-vindo ao CRM da RF&A!<h3>
                                    <p class="lead" style="color:black">Acesse sua conta...</p>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label sr-only">Email</label>
                            <input type="email" name="usuario_email" class="form-control round" id="usuario_email" placeholder="Seu email..." required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="senha" class="control-label sr-only">Password</label>
                            <input type="password" name="usuario_senha" class="form-control round" id="usuario_senha" placeholder="seu codigo de acesso..." required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>


                        <br>
                        <?php echo $this->session->flashdata('msg'); ?>
                        <br>
                        <div class="mt-4">
                            <button type="button" class="btn btn-primary btn-round btn-block" data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="fa fa-sign-in"></i> Cadastre-se Agora</button>
                            <!-- <button type="button" class="btn btn-primary btn-round btn-block" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-unlock"></i> Esqueceu a Senha?</button> -->



                            <!-- <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Esqueceu a senha?</a></span> -->
                            <!-- <span style="color:#0069D9">Caso não tenha uma conta, entre em contato com o desenvolvedor!</span> -->
                        </div>
                    </form>

                    <div class="pattern">
                        <span class="red"></span>
                        <span class="indigo"></span>
                        <span class="blue"></span>
                        <span class="green"></span>
                        <span class="orange"></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
    <!-- END WRAPPER -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Cadastro de Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo site_url('C_login/criarUsuario')?>">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i>
</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nome" name="usuario_nome" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            </div>
                            <input type="email" class="form-control" value="seu_email@rfcrm.com" placeholder="E-mail" name="usuario_email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Senha" aria-label="Username" name="usuario_senha" aria-describedby="basic-addon1">           
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-gavel" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="SETOR" name="usuario_setor" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3" style="display:none;">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-gear" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" value="" class="form-control" placeholder="NIVEL" name="usuario_nivel" aria-label="Username" aria-describedby="basic-addon1">
                            <small style="color:red"> *padrão, não alterar* </small>
                        </div>
                    
                </div>
                <div class="modal-footer">
                                            <button type="button"  class="btn btn-round btn-default" data-dismiss="modal">Cancelar</button>
                                            <button  type="submit" value="save" class="btn btn-round btn-primary">Concluir Cadastro</button>
                                        </div>
                                        </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>public2/html/assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>public2/html/assets/bundles/vendorscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>public2/html/assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>