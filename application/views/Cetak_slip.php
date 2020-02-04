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
  
                    <ul class="nav navbar-right panel_toolbox">
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
               
                    <h1 style="text-align:center">Slip Gaji Karyawan</h1>
                    <h1 style="text-align:center">CV. Karya Agung Jaya</h1>
                    <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  
                    <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-4 col-sm-4 label-center"  for="first-name">1. Nama 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="required"></span><span class="required"></span><span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-12" for="first-name"><?=$detail_gaji['nama_karyawan']; ?> 
                        <span class="required"></span>
                        </label>
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-5 col-sm-5 label-center" for="first-name">8. Upah Lembur
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['upah_lembur']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-4 col-sm-4 label-center" for="first-name">2. Bagian
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-12" for="first-name"><?=$detail_gaji['bagian_karyawan']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-5 col-sm-5 label-center" for="first-name">9. Askes
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['asuransi_kesehatan']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-4 col-sm-4 label-center" for="first-name">3. Bulan
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-12" for="first-name"><?=$detail_gaji['bulan_terima']; ?> 
                        </div>
                      </div>


                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-5 col-sm-5 label-center" for="last-name">10. Uang Transport
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['uang_transport']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-4 col-sm-4 label-center" for="first-name">4. Minggu Ke
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name"><?=$detail_gaji['minggu_ke']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-5 col-sm-5 label-center" for="first-name">11. Tunjangan Jabatan
                        &nbsp;&nbsp;&nbsp;  
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['upah_lembur']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-4 col-sm-4 label-center" for="first-name">5. Tanggal Terima
                        &nbsp;&nbsp;&nbsp;  
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-12" for="first-name"><?=$detail_gaji['tanggal_terima']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-5 col-sm-5 label-center" for="first-name">12. Bonus
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['bonus']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-4 col-sm-4 label-center" for="first-name">6. Ongkos Kerja
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['ongkos_kerja']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-5 col-sm-5 label-center" for="first-name">13. Total Gaji
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['total_gaji']; ?> 
                        </div>
                      </div>
                      <div class="item form-group col-sm-6 label-center">
                        <label class="col-form-label col-md-4 col-sm-4 label-center" for="last-name">7. Uang Makan
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <label class="col-form-label col-md-6" for="first-name">Rp. <?=$detail_gaji['uang_makan']; ?> 
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