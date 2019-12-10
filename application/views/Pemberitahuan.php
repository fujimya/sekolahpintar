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
              <div class="box-body">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-pesan"><i class="fa fa-edit"></i> Tambah Pesan</button>
                  </div>
              
              <table id="pemberitahuan" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Siswa</th>
                  <th>Tanggal Bayar</th>
                  <th>Tunggakan</th>
                  <!--<th>Pesan</th>-->
                  <th>Status Pesan</th>
                  <th>Pesan</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($pemberitahuan as $pem) { foreach ($anggota_kelas as $agt) { if($pem->nis == $agt->nis){?>
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
                  <td><?php echo $pem->tunggakan; ?></td>
                  <!--<td><?php echo $pem->pesan; ?></td>-->
                  <td><?php if($pem->status_sms == "0"){echo "Belum dikirim";}else{echo "Sudah dikirim";} ?></td>
                  <td><?php if($pem->pesan == '-'){ echo "Diberitahukan kepada wali murid atas nama ".$pem->nama_siswa.", pada tanggal ".date('d-m-Y', strtotime('-1 day', strtotime($pem->tanggal )))." adalah batas waktu pembayaran"; }else{echo $pem->pesan;} ?></td>
                  <td><a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'Pemberitahuan/Hapus_Pemberitahuan/'.$pem->id; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button></a></a></td>
                </tr>
                  <?php } } } ?>
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
                <h4 class="modal-title">Tambah Data Pemberitahuan</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                        <input type="hidden" value="-" id="pesan" name="pesan">
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
                          
                          <div class="form-group">
                            <label>Tunggakan:</label>
                            <input style="width: 100%;" type="text" class="form-control" placeholder="Tunggakan" id="tunggakan" name="tunggakan">
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

<div class="modal fade" id="modal-pesan">
    <?php echo form_open_multipart('Pemberitahuan/pemberitahuanSimpan'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Pesan</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                        <input type="hidden" value="-" id="pesan" name="pesan">
                        <input type="hidden" value="-" id="tunggakan" name="tunggakan">
                        <input type="hidden" value="<?php echo date('d-m-Y', strtotime('+1 day', strtotime(date('Y-m-d') ))) ?>" id="tanggal" name="tanggal">
                          <div class="form-group">
                            <label>Siswa</label>
                            <select name="nis" id="nis" class="form-control select2" style="width: 100%;">
                              <option selected="selected">Pilih Siswa</option>
                              <?php foreach ($anggota_kelas as $pemb) { foreach ($siswa as $sis) { if($pemb->nis == $sis->nis){ ?>
                              <option value="<?php echo $sis->nis; ?>"><?php echo $sis->nama_siswa; ?></option>
                              <?php  }}} ?>
                            </select>
                          </div>
                          
                          <!--<div class="form-group">-->
                          <!--  <label>Tanggal:</label>-->
            
                          <!--  <div class="input-group date">-->
                          <!--    <div class="input-group-addon">-->
                          <!--      <i class="fa fa-calendar"></i>-->
                          <!--    </div>-->
                          <!--    <input type="text" class="form-control pull-right tanggal" placeholder="Tanggal Bayaran" id="tanggal" name="tanggal">-->
                          <!--  </div>-->
                            <!-- /.input group -->
                          <!--</div>-->
                          
                          <div class="form-group">
                            <label>Pesan:</label>
                            <input style="width: 100%;" type="text" class="form-control" placeholder="Pesan" id="pesan" name="pesan">
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

