  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="box-body"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Mata Pelajaran</th>
                  <th>Kelas</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($pelajaran as $mpl) {?>
                <tr>
                  <td><?php echo $mpl->kode_matpel; ?></td>
                  <td><?php echo $mpl->nama_matpel; ?></td>
                  <td><?php 
                  
                  $kel = $this->db->query("select * from tbl_kelas where kode_kelas = '".$mpl->kode_kelas."';")->result();
                  foreach ($kel as $k) {
                      echo $k->nama_kelas;
                  }
                      
                  
                  ?></td>
                  <td><button type="button" class="btn btn-primary ubah_datapelajaran" data-toggle="modal" data-target="#modalUbahmplin" data-kode_matpel="<?php echo $mpl->kode_matpel; ?>" data-nama_matpel="<?php echo $mpl->nama_matpel; ?>" data-kode_kelas="<?php echo $mpl->kode_kelas; ?>"><i class="fa fa-edit"></i> Ubah </button> <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'pelajaran/Hapus_pelajaran/'.$mpl->kode_matpel; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button></td>
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
    <?php echo form_open_multipart('pelajaran/pelajaranSimpan'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data pelajaran</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                          
                          <div class="form-group">
                            <label>Nama pelajaran</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama_matpel" id="nama_matpel" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                          </div>
                          <div class="form-group">
                            <label>kelas</label>
                            <select name="kode_kelas" id="kode_kelas" class="form-control select2" style="width: 100%;" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                              <option selected="selected">Pilih kelas</option>
                              <?php foreach ($kelas as $kls) {?>
                              <option value="<?php echo $kls->kode_kelas; ?>"><?php echo $kls->nama_kelas; ?></option>
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

<div class="modal fade" id="modalUbahmplin">
    <?php echo form_open_multipart('pelajaran/pelajaranUbah'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data pelajaran</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <input type="hidden" id="kode_matpel" name="kode_matpel" class="kode_matpel"  >
                        <div role="form">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control nama_matpel" placeholder="Nama" name="nama_matpel" id="nama_matpel" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                          </div>
                          <select name="kode_kelas" id="kode_kelas" class="form-control kode_kelas" style="width: 100%;" required oninvalid="setCustomValidity('Data tidak boleh kosong');">
                              <option selected="selected">Pilih kelas</option>
                              <?php foreach ($kelas as $kls) {?>
                              <option value="<?php echo $kls->kode_kelas; ?>"><?php echo $kls->nama_kelas; ?></option>
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