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
              <div class="box-body"></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kategori</th>
                  <th>Jenis</th>
                  <th>Poin</th>
                  <?php if($user['jabatan'] == 'guru'){ ?>
                    <th>Status</th>
                   <?php } ?>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($pelanggaran as $pel) {?>
                <tr>
                  <td><?php foreach ($kategori as $kat){if($pel->kategori == $kat->id){echo $kat->kategori;}}  ?></td>
                  <td><?php echo $pel->isi; ?></td>
                  <td><?php echo $pel->poin; ?></td>
                   <?php if($user['jabatan'] == 'guru'){ ?>
                    <td><?php if($pel->status == '0'){echo "Menunggu";} if($pel->status == '1') {echo "Ditolak";} if($pel->status == '2'){echo "Aktif"; } ?></td>
                   <?php } ?>
                  <td>
                    <?php if($user['jabatan'] == 'admin'){ ?>
                    <a onclick="return confirm('Apakah anda yakin ingin menerima data ini ?')" href="<?php echo base_url().'Pelanggaran/Terima_Pelanggaran/'.$pel->id; ?>"><button class="btn btn-success"><i class="fa fa-check"></i> Terima</button></a>
                    <a onclick="return confirm('Apakah anda yakin ingin Menolak data ini ?')" href="<?php echo base_url().'Pelanggaran/Tolak_Pelanggaran/'.$pel->id; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> Tolak</button></a>
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