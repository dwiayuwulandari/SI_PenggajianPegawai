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
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Bagian</th>
                          <th>Total Gaji</th>
                          <th>Aksi</th>             
                        </tr>
                      </thead>


                      <tbody>
                      <?php foreach($gaji as $a): ?>
                      <tr>
                      
                        
                        
                       <td><?php echo $a-> bagian_karyawan ?></td>
                        <td><?php echo $a-> gaji_karyawan ?></td>
                    
                      </tr>
                      <?php 
                        endforeach;?>
                      </tbody>
                    </table>



                         <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-18">
                          <a href="<?php echo base_url()."index.php/Welcome/Tambah_Data_Gaji_Karyawan"; ?>">
                          <button type="submit" class="btn btn-success">Tambah Data Gaji Karyawan</button></a>
                        </div>
                      </div>    
                  </div>
                  </div>