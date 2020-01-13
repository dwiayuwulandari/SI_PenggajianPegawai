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
    <link href="<?php echo base_url();?>assets/sigap/cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="<?php echo base_url();?>assets/sigap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/sigap/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="<?php echo base_url();?>assets/sigap/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/sigap/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/sigap/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/sigap/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/sigap/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
              <div class="title_left">
                <h3>Data Karyawan </h3>
              </div>

              <div class="title_right">
              <ul class="nav navbar-right panel_toolbox">
              </ul>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>
            <?php   
                        
            foreach ($proyek as $a): ?>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h1> Nama Proyek : <?php echo $a->nama_proyek ?></h1>
                                
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No </th>
                          <th>Nama </th>
                          <th>Bagian</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>No Rekening </th>
                          <th>Nomer Hp</th>           
                          <th>Aksi</th>

                        </tr>
                      </thead>

                      <tbody>
                        <?php   
                         $no=1;
                        $coba = $this->db->query("SELECT * FROM data_karyawan JOIN tambah_proyek ON data_karyawan.id_proyek=tambah_proyek.id_proyek WHERE data_karyawan.id_proyek='$a->id_proyek'")->result();
                            foreach ($coba as $i): ?>
                      <tr>
        
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->nama_karyawan ?></td>
                        <td><?php echo $i->bagian_karyawan ?></td>
                        <td><?php echo $i->jenis_kelamin ?></td>
                        <td><?php echo $i->alamat_karyawan ?></td>
                        <td><?php echo $i->no_rekening ?></td>
                        <td><?php echo $i->nomer_hp ?></td>
                        
                        <td> 
                          <a href="<?php echo base_url('index.php/karyawan/detail_karyawan/'.$i->id_karyawan) ?>"><button class="btn btn-success" type="button">Detail</button></a>
                        </td>
     

                      </tr>
                        <?php 
                        
                     endforeach;?>
                     </tbody>
                    </table>
                            <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-18">
                       
                          <a class="btn btn-success" href="<?php echo base_url('index.php/karyawan/Tambah_Data_Karyawan/'.$a->id_proyek); ?>"> <i class="fa fa-plus" aria-hidden="true"></i>
                          Tambah Data Karyawan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
            <?php 
                        
                     endforeach;?>
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
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/sigap/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/sigap/build/js/custom.min.js"></script>

  </body>
</html>
            
   