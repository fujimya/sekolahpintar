<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Absensi Siswas</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($absen as $ab) { ?>
                        <tr>
                            <td><?php echo $ab->nis; ?></td>
                            <?php $nama_siswa = ""; foreach ($siswa as $si) { if($si->nis == $ab->nis){ $nama_siswa = $si-> nama_siswa;} }?>
                            <td><?php echo $nama_siswa;  ?></td>
                            
                            <td><a href = "<?php echo base_url(); ?>/Absensi/saveAbsen/<?php echo $ab->kode_kelas; ?>/<?php echo $ab->nis; ?>/hadir"><button class="btn btn-primary">Hadir</button></a> <a href = "<?php echo base_url(); ?>/Absensi/saveAbsen/<?php echo $ab->kode_kelas; ?>/<?php echo $ab->nis; ?>/izin"><button class="btn btn-warning">Izin</button></a> <a href = "<?php echo base_url(); ?>/Absensi/saveAbsen/<?php echo $ab->kode_kelas; ?>/<?php echo $ab->nis; ?>/sakit"><button class="btn btn-success">Sakit</button></a> <a href = "<?php echo base_url(); ?>/Absensi/saveAbsen/<?php echo $ab->kode_kelas; ?>/<?php echo $ab->nis; ?>/alfa"><button class="btn btn-danger">Alfa</button></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
     </div>
     
     <div  class="box">
           <div class="box-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($absen_ as $ab2) { ?>
                        <tr>
                            <td><?php echo $ab2->nis; ?></td>
                            <?php $nama_siswa = ""; foreach ($siswa as $si) { if($si->nis == $ab2->nis){ $nama_siswa = $si-> nama_siswa;} }?>
                            <td><?php echo $nama_siswa;  ?></td>
                            
                            <td><?php echo $ab2->keterangan ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
     </div>
      
     <div style="text-align:right;">
      <a target="_blank" href = "<?php echo base_url(); ?>Absensi/cetakAbsen/<?php echo $kode_kelas; ?>"><button class="btn btn-primary"><i class="fa fa-print"></i> Cetak Absen</button></a>   
     </div>
    </section>
 </div>