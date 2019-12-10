<?php $user = $this->session->userdata('user');
 ?>

//kategori,nama pelanggaran, poin, status


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggaran</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="box-body"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kategori</th>
                  <th>Jenis</th>
                  <th>Poin</th>
                  <?php if($user['jabatan'] == 'guru'){ ?>
                    <th>Status</th>
                   <?php } ?>
                  <?php if($user['jabatan'] == 'admin'){ ?>
                  <th>AKSI</th>
                <?php } ?>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($pelanggaran as $pel) {?>
                <tr>
                  <td><?php foreach ($kategori as $kat){if($pel->kategori == $kat->id){echo $kat->kategori;}}  ?></td>
                  <td><?php echo $pel->isi; ?></td>
                  <td><?php echo $pel->poin; ?></td>
                  <?php if($user['jabatan'] == 'guru'){ ?>
                    <td>
                   <?php 
                   if($pel->status == '0'){
                    echo "Menunggu";} 
                    if($pel->status == '1'){
                      echo "Ditolak";} if($pel->status == '2'){echo "Aktif"; } ?>
                    </td>
                   <?php } ?>
                  <td>
                    <?php if($user['jabatan'] == 'admin'){ ?>
                    <button type="button" class="btn btn-primary ubah_datapelanggar" data-toggle="modal" data-target="#modalUbahpelin" data-id="<?php echo $pel->id; ?>" data-kategori="<?php echo $pel->kategori; ?>" data-isi="<?php echo $pel->isi; ?>" data-poin="<?php echo $pel->poin; ?>"><i class="fa fa-edit"></i> Ubah </button> 

                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'Pelanggaran/Hapus_Pelanggaran/'.$pel->id; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button></a>
                  <?php }?>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  

  <div class="modal fade" id="modal-default">
    <?php if($user['jabatan'] == 'admin'){ echo form_open_multipart('Pelanggaran/pelanggaranSimpan'); } if($user['jabatan'] == 'guru'){echo form_open_multipart('Pelanggaran/ajukanSimpan');} ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Kategori</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                          <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" id="kategori" class="form-control select2" style="width: 100%;">
                              <option selected="selected">Pilih Kategori</option>
                              <?php foreach ($kategori as $kat) {?>
                              <option value="<?php echo $kat->id; ?>"><?php echo $kat->kategori; ?></option>
                              <?php }?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Jenis pelanggaran</label>
                            <input type="text" class="form-control" placeholder="Jenis pelanggaran" name="isi" id="isi">
                          </div>

                          <div class="form-group">
                            <label>Poin</label>
                            <input type="text" class="form-control" placeholder="Poin" name="poin" id="poin">
                          </div>
                          
                        </div>
                      </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
          <?php echo form_close();?>
        </div>

<div class="modal fade" id="modalUbahpelin">
    <?php if($user['jabatan'] == 'admin'){ echo form_open_multipart('Pelanggaran/pelanggaranUbah'); } if($user['jabatan'] == 'guru'){ echo form_open_multipart('Pelanggaran/ajukanUbah'); } ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Kategori</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <input type="hidden" id="id" name="id" class="id">
                        <div role="form">
                          <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" id="kategori" class="form-control kategori" style="width: 100%;">
                              <option selected="selected">Pilih Kategori</option>
                              <?php foreach ($kategori as $kat) {?>
                              <option value="<?php echo $kat->id; ?>"><?php echo $kat->kategori; ?></option>
                              <?php }?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Jenis pelanggaran</label>
                            <input type="text" class="form-control isi" placeholder="Jenis pelanggaran" name="isi" id="isi">
                          </div>

                          <div class="form-group">
                            <label>Poin</label>
                            <input type="text" class="form-control poin" placeholder="Poin" name="poin" id="poin">
                          </div>
                          
                        </div>
                      </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
          <?php echo form_close();?>
        </div>