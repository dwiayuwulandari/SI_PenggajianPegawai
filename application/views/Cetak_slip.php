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
              <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Data Gaji Karyawan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
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
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->nama_karyawan; ?> 
                        <span class="required"></span>
                        </label>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bagian
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->bagian_karyawan; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bulan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->bulan_terima; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Minggu Ke<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->minggu_ke; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal Terima<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->tanggal_terima; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ongkos Kerja <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->ongkos_kerja; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Uang Makan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->uang_makan; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upah Lembur<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->upah_lembur; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Asuransi Kesehatan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->asuransi_kesehatan; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Uang Transport<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->uang_transport; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tunjangan Jabatan<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->tunjangan_jabatan; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Bonus<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->bonus; ?> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Total Gaji <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji->total_gaji; ?> 
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
            <script type="text/javascript">
            window.print();
            </script>