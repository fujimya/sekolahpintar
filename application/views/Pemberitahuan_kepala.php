  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemberitahuan</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="pemberitahuan_kepala" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Siswa</th>
                  <th>Tanggal Bayar</th>
                  <th>Pesan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($pemberitahuan as $pem) {?>
                <tr>
                  <td>
                      <?php
                      
                      foreach ($siswa as $sis) { 
                          if($pem->nis == $sis->nis){
                              echo $sis->nama_siswa;
                          }
                      }
                      
                      ?>
                  </td>
                  <td><?php echo date('d-m-Y', strtotime('-1 day', strtotime($pem->tanggal ))); ?></td>
                  <td><?php echo "Diberitahukan kepada wali murid atas nama ".$pem->nama_siswa.", pada tanggal ".date('d-m-Y', strtotime('-1 day', strtotime($pem->tanggal )))." adalah batas waktu pembayaran" ?></td>
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
    <?php echo form_open_multipart('Pemberitahuan/pemberitahuanSimpan'); ?>
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
                            <label>Siswa</label>
                            <select name="nis" id="nis" class="form-control select2" style="width: 100%;">
                              <option selected="selected">Pilih Siswa</option>
                              <?php foreach ($anggota_kelas as $pemb) { foreach ($siswa as $sis) { if($pemb->nis == $sis->nis){ ?>
                              <option value="<?php echo $sis->nis; ?>"><?php echo $sis->nama_siswa; ?></option>
                              <?php  }}} ?>
                            </select>
                          </div>
                          
                          <div class="form-group">
                            <label>Tanggal:</label>
            
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right tanggal" placeholder="Tanggal Bayaran" id="tanggal" name="tanggal">
                            </div>
                            <!-- /.input group -->
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

<div class="modal fade" id="modalUbahpemin">
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
                            <input type="text" class="form-control nama_kelas" placeholder="Nama" name="nama_kelas" id="nama_kelas">
                          </div>
                          <select name="nip" id="nip" class="form-control nip" style="width: 100%;">
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