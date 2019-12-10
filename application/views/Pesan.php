   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas</h3>
            </div>
            <!-- /.box-header -->
            <div>
                 <?php echo form_open_multipart('Pesan/filter'); ?>
                <table>
                    <td>
                        <input type="text"  class="form-control pull-right" id="tanggal_lahir" name="tanggal_lahir" />   
                    </td>
                    <td>
                        <button type="submit">Filter</button>
                    </td>
                </table>
                <?php echo form_close();?>
            </div>
            <div class="box-body">
              <table id="pesan_keluar_kepala" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No HP</th>
                  <th>Tanggal Pesan</th>
                  <th>Pesan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($absen as $dt) {?>
                <tr>
                  <td><?php echo $dt->nope_ortu; ?></td>
                  <td><?php echo date('d-m-Y', strtotime('-1 day', strtotime($dt->tanggal ))); ?></td>
                  <td><?php echo 'Diberitahukan kepada wali murid atas nama '.$dt->nama_siswa.', kelas '.$dt->nama_kelas.', pada tanggal '.date('d-m-Y', strtotime('-1 day', strtotime($dt->tanggal ))).', bahwasannya absen siswa tersebut berstatus '.$dt->keterangan	 ?></td>
                 </tr>
                  <?php } ?>
                  
                  <?php foreach ($pemberitahuan as $pem) {?>
                <tr>
                  <td><?php echo $pem->nope_ortu; ?></td>
                  <td><?php echo date('d-m-Y', strtotime('-1 day', strtotime($dt->tanggal ))); ?></td>
                  <td><?php echo 'Diberitahukan kepada wali murid atas nama '.$pem->nama_siswa.', pada tanggal '.date('d-m-Y', strtotime('-1 day', strtotime($pem->tanggal ))).' adalah batas waktu pembayaran'		 ?></td>
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
  
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
