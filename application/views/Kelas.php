  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="box-body"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Wali Kelas</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($kelas as $spl) {?>
                <tr>
                  <td><?php echo $spl->kode_kelas; ?></td>
                  <td><?php echo $spl->nama_kelas; ?></td>
                  <td><?php $gur = $this->db->query("select * from tbl_guru where nip = '".$spl->nip."';")->result(); 
                  
                  foreach ($gur as $gr){
                      echo $gr->nama;
                  }
                  
                  ?></td>
                  <td><button type="button" class="btn btn-primary ubah_datakelas" data-toggle="modal" data-target="#modalUbahsplin" data-kode_kelas="<?php echo $spl->kode_kelas; ?>" data-nama_kelas="<?php echo $spl->nama_kelas; ?>" data-nip="<?php echo $spl->nip; ?>"><i class="fa fa-edit"></i> Ubah </button> <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'kelas/Hapus_kelas/'.$spl->kode_kelas; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button></a> <a href="<?php echo base_url().'Kelas/Detail/'.$spl->kode_kelas; ?>"><button class="btn btn-primary"><i class="fa fa-list"></i> Anggota</button></a></a></td>
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
    <?php echo form_open_multipart('kelas/kelasSimpan'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data kelas</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                          
                          <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama_kelas" id="nama_kelas" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                          </div>
                          <div class="form-group">
                            <label>Guru</label>
                            <select name="nip" id="nip" class="form-control select2" style="width: 100%;" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                              <option selected="selected">Pilih Guru</option>
                              <?php foreach ($guru as $gru) {?>
                              <option value="<?php echo $gru->nip; ?>"><?php echo $gru->nama; ?></option>
                              <?php }?>
                            </select>
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

<div class="modal fade" id="modalUbahsplin">
    <?php echo form_open_multipart('kelas/kelasUbah'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data kelas</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <input type="hidden" id="kode_kelas" name="kode_kelas" class="kode_kelas">
                        <div role="form">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control nama_kelas" placeholder="Nama" name="nama_kelas" id="nama_kelas" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                          </div>
                          <select name="nip" id="nip" class="form-control nip" style="width: 100%;" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                              <option selected="selected">Pilih Guru</option>
                              <?php foreach ($guru as $gru) {?>
                              <option value="<?php echo $gru->nip; ?>"><?php echo $gru->nama; ?></option>
                              <?php }?>
                            </select>
                          
                         
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