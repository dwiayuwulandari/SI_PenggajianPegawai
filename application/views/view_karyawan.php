<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV. Karya Agung Jaya</title>
    <link rel="icon" type="image/jpg" href="<?php echo base_url();?>assets/sigap/production/images/icon.jpg" />

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
                    <a href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
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
              <a href="<?php echo base_url()."index.php/karyawan/Tambah_Data_Karyawan"; ?>" class="btn btn-success btn-round btn-lg">
                <i class="fa fa-plus" aria-hidden="true"></i> Tambah Karyawan</a>
              </ul>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                <div class="col-md-6">
                  <select id="pilihproyek" name="proyek1" class="form-control custom-select col-10" style="border-radius: 10px;">
                    <option value="0"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------------ Pilih Proyek ------------</option>
                      <?php foreach($proyek as $r): ?>
                             <option value="<?= $r->id_proyek ?>"><?= $r->nama_proyek ?></option>
                      <?php endforeach; ?>

                  </select>
                </div>
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              
                                
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

                      <tbody id="tampilproyek">
                       
                     </tbody>
                    </table>
                            <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-18">
                       
                          <a class=""> <i class="" aria-hidden="true"></i>
                          </a>
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

    <!-- jQuery --><
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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


<script>
    $(document).ready(function() {
      $("#pilihproyek").on('change', function(){ 
        var id_proyek = $('#pilihproyek').val();
        $.ajax({
        type: 'POST',
        url: '<?= base_url('index.php/karyawan/load2') ?>',
        data: {'id' : id_proyek },
        success: function(data) {
          $("#tampilproyek").html(data);
        }
      })
      })
    })
</script>
   