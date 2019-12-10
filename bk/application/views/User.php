  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="box-body"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> Tambah</button></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>jabatan</th>
                  <th>No Hp</th>
                  <th>Alamat</th>
                  <th>Password</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($user as $usr) {?>
                <tr>
                  <td><?php echo $usr->nip; ?></td>
                  <td><?php echo $usr->nama; ?></td>
                  <td><?php if($usr->jabatan == 'guru'){echo "Wali kelas"; }else{echo $usr->jabatan;} ?></td>
                  <td><?php echo $usr->nope; ?></td>
                  <td><?php echo $usr->alamat; ?></td>
                  <td><?php echo $usr->password; ?></td>
                  <td><button type="button" class="btn btn-primary ubah_dataUser" data-toggle="modal" data-target="#modalUbahusrin" data-nip="<?php echo $usr->nip; ?>" data-nama="<?php echo $usr->nama; ?>" data-jabatan="<?php echo $usr->jabatan; ?>" data-nope="<?php echo $usr->nope; ?>" data-alamat="<?php echo $usr->alamat; ?>" data-password="<?php echo $usr->password; ?>"><i class="fa fa-edit"></i> Ubah </button> <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url().'Admin/Hapus_User/'.$usr->nip; ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> HAPUS</button></a></td>
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
    <?php echo form_open_multipart('Admin/UserSimpan'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data User</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div role="form">
                          <div class="form-group">
                            <label>nip</label>
                            <input type="text" class="form-control" placeholder="nip" name="nip" id="nip">
                          </div>
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama">
                          </div>
                          <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control" name="jabatan" id="jabatan">
                              <option value="admin">Admin</option>
                              <option value="guru">Wali kelas</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>No HP</label>
                            <input type="number" class="form-control" placeholder="No HP" name="nope" id="nope">
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
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

<div class="modal fade" id="modalUbahusrin">
    <?php echo form_open_multipart('Admin/UserUbah'); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data User</h4>
              </div>
              <div class="modal-body">
                 <div class="box box-warning">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <input type="hidden" id="nip" name="nip" class="nip">
                        <div role="form">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control nama" placeholder="Nama" name="nama" id="nama">
                          </div>
                          <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control jabatan" name="jabatan" id="jabatan">
                              <option value="admin">Admin</option>
                              <option value="guru">Wali kelas</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>No HP</label>
                            <input type="number" class="form-control nope" placeholder="No HP" name="nope" id="nope">
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control alamat" placeholder="Alamat" name="alamat" id="alamat"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control password" placeholder="Password" name="password" id="password">
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