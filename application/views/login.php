<!doctype html>
<html lang="en">

<head>
<title>Oculux | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>public2/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>public2/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>public2/assets/vendor/animate-css/vivify.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>public2/html/assets/css/site.min.css">

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
                    <img class="img-fluid" src="<?php echo base_url();?>public2/assets/images/login-img.png" />
                </div>
                <form class="form-auth-small" action="<?php echo site_url('C_login/auth');?>" method="post" >
                    <div class="mb-3">
                        <h3> Bem-vindo ao CRM da RF&A!<h3>
                        <p class="lead" style="color:black">Acesse sua conta...</p>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label sr-only">Email</label>
                        <input type="email" name="usuario_email" class="form-control round" id="usuario_email"  placeholder="Seu email..."  required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="senha" class="control-label sr-only">Password</label>
                        <input type="password" name="usuario_senha" class="form-control round" id="usuario_senha"  placeholder="seu codigo de acesso..." required>
                    </div>
                    
                    <button  type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                    
                    
                    <br>
                    <?php echo $this->session->flashdata('msg');?>
                    <br>
                    <div class="mt-4">
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Esqueceu a senha?</a></span>
                        <span style="color:#0069D9">Caso não tenha uma conta, entre em contato com o desenvolvedor!</span>
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
    
<script src="<?php echo base_url();?>public2/html/assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url();?>public2/html/assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url();?>public2/html/assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
