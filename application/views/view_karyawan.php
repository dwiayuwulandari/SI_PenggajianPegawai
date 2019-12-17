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
                          <th>Nama </th>
                          <th>Bagian</th>
                          <th>Tempat Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>No Rekening </th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
               
               <tbody>
    <tr>
      <?php
      $no = 1;
      foreach ($data as $i) {
        ?>
      
      <td><?php echo $no; ?></td>
      <td><?php echo $i['nama_karyawan'];?></td>
      <td><?php echo $i['bagian_karyawan'] ;?></td>
      <td><?php echo $i['ttl_karyawan'] ;?></td>
      <td><?php echo $i['jenis_kelamin'];?></td>
      <td><?php echo $i['+no_rekening'] ;?></td>
      
      
      <td><a href="<?php echo base_url()."index.php/welcome/edit_pegawai/".$i['id_pegawai']; ?>" class="btn btn-block btn-primary">Edit</a></td>
      <td><?php echo "<a href=".base_url()."index.php/welcome/hapus_pegawai/".$i['id_pegawai']." onclick='return confirm(\"Apakah anda yakin ingin menghapusnya ?\")'>"; ?><input type="submit" value="hapus" class="btn btn-block btn-danger"></a></td>
      
    </tr>
    <?php $no++; }?>
  </tbody>
               
              </table>
            </div></div></div></div></div></div></div>
   