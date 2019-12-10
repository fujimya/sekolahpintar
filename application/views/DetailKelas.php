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
                  <th>Kelas</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($kelas_anggota as $mpl) {?>
               
                  <td><?php 
                  foreach ($siswa as $s) {
                      if($s->nis == $mpl->nis ){
                          echo $s->nama_siswa;
                      }
                      
                  }
                      
                  
                  ?></td>
                  <td><a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'Kelas/Hapus_anggotakelas/'.$mpl->nis.'/'.$mpl->kode_kelas; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button></a> </td>
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
    <?php echo form_open_multipart('Kelas/anggotakelasSimpan'); ?>
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
                            <input type="hidden" value = "<?php echo $kode_kelas; ?>"  name="kode_kelas" id="kode_kelas">
                            <label>Siswa</label>
                            <select name="nis" id="nis" class="form-control select2" style="width: 100%;">
                              <option selected="selected">Pilih Siswa</option>
                              <?php foreach ($siswa as $sis) {  ?>
                              <option value="<?php echo $sis->nis; ?>"><?php echo $sis->nama_siswa; ?></option>
                              <?php  } ?>
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

