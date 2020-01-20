<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV. Karya Agung Jaya </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/sigap//vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/sigap//vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/sigap//vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>assets/sigap//vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/sigap//build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?= $this->session->flashdata('message'); ?>
            <form role="form" method="post" action="<?php echo site_url('Login/index'); ?>">
              <h1>Login Form</h1>
              <div>
                <input class="form-control" placeholder="Username" type="username" id="username" name="username" />
              </div>
              <?php echo form_error('username', '<small class="text-danger-pl-3">', '</small>'); ?>
              <div>
                <input class="form-control" placeholder="Password" type="password" id="password" name="password"" />
              </div>
              <?php echo form_error('password', '<small class="text-danger-pl-3">', '</small>'); ?>
              <div  class="text-center">
                <button type="submit" class="btn btn-lg btn-success btn-block" >Login</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Mau Masuk ?
                  <a class="to_register">Silahkan Login Terlebih Dahulu </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1></i>CV. Karya Agung Jaya</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form role="form" method="post" action="<?php echo site_url('Login/index'); ?>">
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
