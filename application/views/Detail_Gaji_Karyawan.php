<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>CV. Karya Agung Jaya</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/sigap/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/sigap/production/images/admin.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              <ul class="nav side-menu">
    	              <li><a href="<?php echo base_url()."index.php/Welcome"; ?>"><i class="fa fa-home"></i> Dashboard </a></li>
	                  <li><a href="<?php echo base_url()."index.php/karyawan/datakaryawan"; ?>"><i class="fa fa-user"></i> Data Karyawan </a></li>
                  	  <li><a href="<?php echo base_url()."index.php/gaji/gajikaryawan"; ?>"><i class="fa fa-money"></i> Gaji Karyawan </a></li>
                  	  <li><a><i class="fa fa-list-ul"></i> Riwayat Gaji <span class="fa fa-chevron-down"></span></a>
                    	<ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."index.php/laporan/laporan_mingguan"; ?>">Laporan Mingguan</a></li>
                      	 	<li><a href="<?php echo base_url()."index.php/laporan/laporan_bulanan"; ?>">Laporan Bulanan</a></li>
                    	</ul>
                  	  </li>
                </ul>
              </div>             
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">Admin
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right"></span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="<?php echo base_url('index.php/Welcome/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>

                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
              </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Data Gaji </h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <a href="<?php echo base_url('index.php/gaji/cetak_slip/'.$detail_gaji['id_gaji']); ?>" target="_blank"><button class="btn btn-round btn-warning" type="button">
                    <i class="fa fa-print" aria-hidden="true"></i> Cetak Slip</button></a>
                    <a href="<?php echo base_url('index.php/gaji/edit_gaji/'.$detail_gaji['id_gaji']); ?>"><button class="btn btn-round btn-primary" type="button">
                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit</button></a>
                      <a href="<?php echo base_url('index.php/gaji/hapus_gaji/'.$detail_gaji['id_gaji']); ?>"><button type="submit" class="btn btn-round btn-danger">
                      <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"  for="first-name">Nama
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['nama_karyawan']; ?> 
                        <span class="required"></span>
                        </label>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bagian
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['bagian_karyawan']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['bulan_terima']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Minggu Ke<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['minggu_ke']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal Terima<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['tanggal_terima']; ?> 
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ongkos Kerja <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['ongkos_kerja']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Uang Makan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['uang_makan']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upah Lembur<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['upah_lembur']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Asuransi Kesehatan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['asuransi_kesehatan']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Uang Transport<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['uang_transport']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tunjangan Jabatan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['tunjangan_jabatan']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bonus<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['bonus']; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Total Gaji <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['total_gaji']; ?> 
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
            
                        </div>
                      </div>

                      
                  </div>
                </div>
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?php echo base_url();?>assets/sigap/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/sigap/build/js/custom.min.js"></script>

    <script>
        function sum() {
        var txtFirstNumberValue = document.getElementById('txt1').value;
        var txtSecondNumberValue = document.getElementById('txt2').value;
        var txtTigaNumberValue = document.getElementById('txt3').value;
        var txtEmpatNumberValue = document.getElementById('txt4').value;
        var txtLimaNumberValue = document.getElementById('txt5').value;
        var txtEnamNumberValue = document.getElementById('txt6').value;
        var txtTujuhNumberValue = document.getElementById('txt7').value;
        var result = parseFloat(txtFirstNumberValue) + parseFloat(txtSecondNumberValue) + parseFloat(txtTigaNumberValue) + parseFloat(txtEmpatNumberValue) + parseFloat(txtLimaNumberValue)+ parseFloat(txtEnamNumberValue) + parseFloat(txtTujuhNumberValue);
        if (!isNaN(result)) {
          document.getElementById('txt8').value = result;
      }
    }
    </script>
	
  </body>
</html>
