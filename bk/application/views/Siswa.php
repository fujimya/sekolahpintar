  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data siswa</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="box-body"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Temppat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Alamat Siswa</th>
                  <th>Orang Tua</th>
                  <th>No HP/Telp</th>
                  <th>Alamat Orang Tua</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($siswa as $sis) {?>
                <tr>
                  <td><?php echo $sis->nis; ?></td>
                  <td><?php echo $sis->nama_siswa; ?></td>
                  <td><?php echo $sis->tempat_lahir; ?></td>
                  <td><?php echo $sis->tanggal_lahir; ?></td>
                  <td><?php echo $sis->jenis_kelamin; ?></td>
                  <td><?php echo $sis->agama; ?></td>
                  <td><?php echo $sis->alamat_siswa; ?></td>
                  <td><?php echo $sis->nama_ortu; ?></td>
                  <td><?php echo $sis->nope_ortu; ?></td>
                  <td><?php echo $sis->alamat_ortu; ?></td>
                  <td>
                    <button type="button" class="btn btn-primary ubah_datasiswa" data-toggle="modal" data-target="#modalUbahsisin" 
                    data-nis="<?php echo $sis->nis; ?>" 
                    data-nama_siswa="<?php echo $sis->nama_siswa; ?>" 
                    data-tempat_lahir="<?php echo $sis->tempat_lahir; ?>" 
                    data-tanggal_lahir="<?php echo $sis->tanggal_lahir; ?>" 
                    data-jenis_kelamin="<?php echo $sis->jenis_kelamin; ?>" 
                    data-agama="<?php echo $sis->agama; ?>" 
                    data-alamat_siswa="<?php echo $sis->alamat_siswa; ?>"
                    data-nama_ortu="<?php echo $sis->nama_ortu; ?>"
                    data-nope_ortu="<?php echo $sis->nope_ortu; ?>"
                    data-alamat_ortu="<?php echo $sis->alamat_ortu; ?>"
                    ><i class="fa fa-edit"></i> Ubah </button> 
                  </td>
                  <td><a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'siswa/Hapus_siswa/'.$sis->nis; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button></a></td>
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
    <?php echo form_open_multipart('siswa/siswaSimpan'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data siswa</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                          <div class="form-group">
                            <label>NIS</label>
                            <input type="text" class="form-control" placeholder="NIS" name="nis" id="nis">
                          </div>
                          <div class="form-group">
                            <label>Nama siswa</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" id="nama_siswa">
                          </div>
                          <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir">
                          </div>

                           <div class="form-group">
                          <label>Tanggal Lahir</label>

                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text"  class="form-control pull-right" id="tanggal_lahir" name="tanggal_lahir">
                          </div>
                          <!-- /.input group -->
                        </div>

                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" style="width: 100%;">
                             <option selected="selected">Jenis Kelamin</option>
                             <option value="Laki-laki">Laki-laki</option>
                             <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" id="agama" class="form-control" style="width: 100%;">
                             <option value="Islam">Islam</option>
                             <option value="Hindu">Hindu</option>
                             <option value="Budha">Budha</option>
                             <option value="Kristen">Kristen</option>
                             <option value="Katolik">Katolik</option>
                             <option value="Kong HU Cu">Kong HU CU</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Alamat Siswa</label>
                            <textarea type="text" class="form-control" placeholder="Alamat Siswa" name="alamat_siswa" id="alamat_siswa"></textarea> 
                          </div>

                           <div class="form-group">
                            <label>Nama Orang Tua</label>
                            <input type="text" class="form-control" placeholder="Nama Orang Tua" name="nama_ortu" id="nama_ortu">
                          </div>

                           <div class="form-group">
                            <label>No HP</label>
                            <input type="number" class="form-control" placeholder="No HP" name="nope_ortu" id="nope_ortu">
                          </div>

                          <div class="form-group">
                            <label>Alamat Orang Tua</label>
                            <textarea type="text" class="form-control" placeholder="Alamat Orang Tua" name="alamat_ortu" id="alamat_ortu"> </textarea> 
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

<div class="modal fade" id="modalUbahsisin">
    <?php echo form_open_multipart('siswa/siswaUbah'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data siswa</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <input type="hidden" id="kode_siswa" name="kode_siswa" class="kode_siswa">
                        <div role="form">
                          <!-- <div class="form-group">
                            <label>NIS</label>
                            <input type="text" class="nis" placeholder="NIS" name="nis" id="nis">
                          </div> -->
                          <div class="form-group">
                            <label>Nama siswa</label>
                            <input type="text" class="form-control nama_siswa" placeholder="Nama" name="nama_siswa" id="nama_siswa">
                          </div>
                          <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir">
                          </div>

                           <div class="form-group">
                          <label>Tanggal Lahir</label>

                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text"  class="form-control pull-right tanggal_lahir" id="tanggal_lahir" name="tanggal_lahir">
                          </div>
                          <!-- /.input group -->
                        </div>

                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control jenis_kelamin" style="width: 100%;">
                             <option selected="selected">Jenis Kelamin</option>
                             <option value="Laki-laki">Laki-laki</option>
                             <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" id="agama" class="form-control agama" style="width: 100%;">
                             <option value="Islam">Islam</option>
                             <option value="Hindu">Hindu</option>
                             <option value="Budha">Budha</option>
                             <option value="Kristen">Kristen</option>
                             <option value="Katolik">Katolik</option>
                             <option value="Kong HU Cu">Kong HU CU</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Alamat Siswa</label>
                            <textarea type="text" class="form-control alamat_siswa" placeholder="Alamat Siswa" name="alamat_siswa" id="alamat_siswa"></textarea> 
                          </div>

                           <div class="form-group">
                            <label>Nama Orang Tua</label>
                            <input type="text" class="form-control nama_ortu" placeholder="Nama Orang Tua" name="nama_ortu" id="nama_ortu">
                          </div>

                           <div class="form-group">
                            <label>No HP</label>
                            <input type="number" class="form-control nope_ortu" placeholder="No HP" name="nope_ortu" id="nope_ortu">
                          </div>

                          <div class="form-group">
                            <label>Alamat Orang Tua</label>
                            <textarea type="text" class="form-control alamat_ortu" placeholder="Alamat Orang Tua" name="alamat_ortu" id="alamat_ortu"> </textarea> 
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