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
              <!--<div class="box-body"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button></div>-->
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
                  <td><a href="<?php echo base_url(); ?>Nilai/addNilai/<?php echo $mpl->kode_kelas; ?>/<?php echo $mpl->kode_matpel; ?>" ><button type="button" class="btn btn-primary ubah_datapelajaran" ><i class="fa fa-list"></i> Anggota </button></a></td>
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
  
