
<?php $user = $this->session->userdata('user');
 ?>
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
              <div class="box-body"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button></div>
              <table id="example3" class="table table-bordered table-stdiped">
                <thead>
                <tr>
                  <th>Tanggal Pelanggaran</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas,Jurusan</th>
                  <!--<th>Jurusan</th>-->
                  <th>Pelanggaran</th>
                  <th>Point</th>
                  <th>Total Point</th>
                  <th>Status</th>
                  <?php if($user['jabatan'] == 'admin'){ ?>
                  <th>Aksi</th>
                  <?php } ?>
                </tr>
                </thead>
              
                <tbody>
                  <?php foreach ($siswa as $mel) {?>
                  <tr>
                  <td><?php echo $mel->tanggal; ?></td>
                  <td><?php echo $mel->nis; ?></td>
                  <td><?php echo $mel->nama_siswa; ?></td>
                  <td><?php echo $mel->jenis_kelamin; ?></td>
                  <td><?php echo $mel->kelas; ?></td>
                  <!--<td><?php echo $mel->jurusan; ?></td>-->
                  <td><?php echo $mel->kategori; ?> - <?php echo $mel->isi; ?></td>
                  <td><?php echo $mel->poin; ?></td>
                  <td><?php $total = $mel->poin ; foreach ($siswa as $ttl) { if($mel->nis == $ttl->nis && $mel->tanggal > $ttl->tanggal ){$total += $mel->poin;} } echo $total;?></td>
                  <td><?php if($mel->status == '1'){echo "Diterima";}else{ echo "Ditolak";} ?></td>
                  <?php if($user['jabatan'] == 'admin'){ ?>
                  <td><a onclick="return confirm('Apakah anda yakin ingin menolak data ini ?')" href="<?php echo base_url().'SiswaMelanggar/Hapus_Pelanggaran/'.$mel->id; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> Tolak</button></a> <br> <br>
                  <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'SiswaMelanggar/Hapus_Pelanggaran_permanen/'.$mel->id; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                  </td>
                  <?php } ?>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>

<!-- 
SELECT
    `tbl_siswa_melanggar`.`nis`
    , `tbl_siswa`.`nama_siswa`
    , `tbl_siswa_melanggar`.`kode_pelanggaran`
    , `tbl_kategori`.`kategori`
    , `tbl_pelanggaran`.`isi`
    , `tbl_pelanggaran`.`poin`
FROM
    `db_pelanggar`.`tbl_siswa`
    INNER JOIN `db_pelanggar`.`tbl_siswa_melanggar` 
        ON (`tbl_siswa`.`nis` = `tbl_siswa_melanggar`.`nis`)
    INNER JOIN `db_pelanggar`.`tbl_pelanggaran` 
        ON (`tbl_pelanggaran`.`id` = `tbl_siswa_melanggar`.`kode_pelanggaran`)
    INNER JOIN `db_pelanggar`.`tbl_kategori` 
        ON (`tbl_kategori`.`id` = `tbl_pelanggaran`.`kategori`);
-->
  <div class="modal fade" id="modal-default">
    <?php echo form_open_multipart('SiswaMelanggar/melanggarSimpan'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="tdue">&times;</span></button>
                <h4 class="modal-title">Input Pelanggaran Siswa</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                          <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input value="<?php echo date('d/m/Y') ?>" type="text"  class="form-control pull-right" id="tanggal" name="tanggal">
                          </div>
                          <!-- /.input group -->
                          </div>

                          <div class="form-group">
                            <label>Pelanggaran</label>
                            <select name="kategori" id="kategori" class="form-contdol select2" style="width: 100%;">
                              <option selected="selected">Pilih Pelanggaran</option>
                              <?php foreach ($kategori as $kat) {?>
                              <option value="<?php echo $kat->id; ?>"><?php echo $kat->kategori; ?> - <?php echo $kat->isi; ?> (Poin : <?php echo $kat->poin; ?>)</option>
                              <?php }?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Siswa</label>
                            <select name="siswa" id="siswa" class="form-contdol select2" style="width: 100%;">
                              <option selected="selected">Pilih Siswa</option>
                              <?php foreach ($murid as $sis) {?>
                              <option value="<?php echo $sis->nis; ?>"><?php echo $sis->nama_siswa; ?></option>
                              <?php }?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Kelas , Jurusan</label>
                            <input type="text" class="form-contdol" placeholder="Kelas , Jurusan" name="kelas" id="kelas" style="width: 100%;">
                          </div>

                          <!--<div class="form-group">-->
                          <!--  <label>Jurusan</label>-->
                          <!--  <select name="jurusan" id="jurusan" class="form-contdol select2" style="width: 100%;">-->
                          <!--    <option selected="selected">Pilih Jurusan</option>-->
                          <!--     <option value="TKJ">TKJ</option>-->
                          <!--     <option value="TAV">TAV</option>-->
                          <!--     <option value="TGB">TGB</option>-->
                          <!--     <option value="TKR">TKR</option>-->
                          <!--     <option value="TSP">TSP</option>-->
                          <!--  </select>-->
                          <!--</div>-->

                          
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