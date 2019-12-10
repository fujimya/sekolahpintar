  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Absensi Siswa</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
            <!--<?php echo form_open_multipart('Absensi/filter'); ?>-->
            <!--<table border="0" cellspacing="5" cellpadding="5">-->
            <!--<tbody><tr>-->
            <!--    <td> &nbsp;Tanggal Mulai:&nbsp; </td>-->
            <!--    <td><input type="text" id="min" name="min"></td>-->
            <!--    <td> &nbsp;Tanggal Ahir:&nbsp; </td>-->
            <!--    <td><input type="text" id="max" name="max"></td>-->
            <!--    <td>&nbsp;&nbsp;<button type = "submit" class="btn btn-primary">Filter</button></td>-->
            <!--</tr>-->
            <!--</tbody>-->
            <!--</table>-->
            <!-- <?php echo form_close();?>-->
            <!--<br>-->
              <table id="pesan_keluar_kepala" class="table table-bordered table-striped" style="margin-bottom:20px;">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>Keterangan</th>
                  <th>Kelas</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($laporan as $lap) {?>
                <tr>
                  <td><?php echo date('d-m-Y', strtotime('-1 day', strtotime($lap->tanggal ))); ?></td>
                  <td><?php echo $lap->nis; ?></td>
                  <td><?php echo $lap->nama_siswa; ?></td>
                  <td><?php echo $lap->jenis_kelamin; ?></td>
                  <td><?php echo $lap->keterangan; ?></td>
                  <td><?php echo $lap->nama_kelas; ?></td>
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
  