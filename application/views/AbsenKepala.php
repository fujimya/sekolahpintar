  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Absen</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="box-body"><a target="_blank" href = "<?php echo base_url(); ?>Kepala/cetakAbsen"><button type="button" class="btn btn-primary" ><i class="fa fa-print"></i> Cetak</button></a></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($absen as $spl) {?>
                <tr>
                  <td><?php echo $spl->tanggal; ?></td>
                  <td><?php echo $spl->nama_siswa; ?></td>
                  <td><?php echo $spl->nama_kelas; ?></td>
                  <td><?php echo $spl->keterangan; ?></td>
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
  
