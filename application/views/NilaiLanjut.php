<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Nilai Siswa</h3>
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
                        <?php foreach ($nilai as $ab) { ?>
                        <tr>
                            <td><?php echo $ab->nis; ?></td>
                            <?php $nama_siswa = ""; foreach ($siswa as $si) { if($si->nis == $ab->nis){ $nama_siswa = $si-> nama_siswa;} }?>
                            <td><?php echo $nama_siswa;  ?></td>
                            
                            <td>
                                <form action="<?php echo base_url(); ?>/Nilai/saveNilai " method="post">
                                <input type="hidden" name="nis" id="nis" value="<?php echo $ab->nis; ?>">
                                <input type="hidden" name="kode_matpel" id="kode_matpel" value="<?php echo $ab->kode_matpel; ?>">
                                <input type="hidden" name="kode_kelas" id="kode_kelas" value="<?php echo $ab->kode_kelas; ?>">
                                <input type="text" class="form-control" placeholder="Nilai" name="nilai" id="nilai">
                                <input type="text" class="form-control" placeholder="Kesalahan" name="salah" id="salah">
                                 <select name="keterangan" id="keterangan" class="form-control">
                                  <option selected="selected">Pilih Jenis</option>
                                  <option value="harian">Ulangan Harian</option>
                                  <option value="tugas">Tugas</option>
                                  <option value="mid">Ulangan Mid Semester</option>
                                  <option value="semester">Ulangan Semester</option>
                                  
                                </select>
                                <button  class="btn btn-primary" type="submit" >Simpan</button>
                                </form>
                            </td>
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
                      <th>Nilai</th>
                      <th>Kesalahan</th>
                      <th>Keterangan</th>
                      <th>Tanggal</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($nilai_ as $ab2) { ?>
                        <tr>
                            <td><?php echo $ab2->nis; ?></td>
                            <?php $nama_siswa = ""; foreach ($siswa as $si) { if($si->nis == $ab2->nis){ $nama_siswa = $si-> nama_siswa;} }?>
                            <td><?php echo $nama_siswa;  ?></td>
                            <td><?php echo $ab2->nilai ?></td>
                            <td><?php echo $ab2->salah ?></td>
                            <td><?php echo $ab2->keterangan ?></td>
                            <td><?php echo $ab2->tanggal ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
     </div>
      
     <div style="text-align:right;">
      <a target="_blank" href = "<?php echo base_url(); ?>Nilai/cetakNilai/<?php echo $kode_kelas; ?>/<?php echo $kode_matpel; ?>"><button class="btn btn-primary"><i class="fa fa-print"></i> Cetak Nilai</button></a>   
     </div>
    </section>
 </div>