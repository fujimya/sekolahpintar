<!DOCTYPE html>
  <html>
  <head>
    
  </head>
  <body>
    <div style="text-align:center;">
        <table align="center" >
            <tr>
                 <td>
                    <img width = "100px" src="https://i.ibb.co/yB5Njq3/download.jpg" alt="Logo">
                    
                </td>
                <td>
                    <h1>SD AL-AZHAR II BANDAR LAMPUNG</h1>
                    <hr>
                    <?php foreach ($kelas as $kl) { ?>
                    <h2>Nilai Siswa <?php echo $kl->nama_kelas; ?></h2>
                    <?php } ?>
                </td>
            </tr>
        </table>
    
    <div style = "text-align : left;">
        Tanggal : <?php date_default_timezone_set("Asia/Bangkok"); echo date("d-m-Y"); ?>
    </div>
    <br>
     <table border = "1" width="100%">
        <thead>
        <tr>
          <th>NIS</th>
          <th>Nama</th>
          <th>Mata Pelajaran</th>
          <th>Nilai</th>
          <th>Keterangan</th>
        </tr>
        </thead>
            <tbody>
            <?php foreach ($nilai_ as $ab2) { ?>
            <tr>
                <td><?php echo $ab2->nis; ?></td>
                <?php $nama_siswa = ""; foreach ($siswa as $si) { if($si->nis == $ab2->nis){ $nama_siswa = $si-> nama_siswa;} }?>
                <td><?php echo $nama_siswa;  ?></td>
                <td><?php foreach ($matpel as $mt) {echo $mt->nama_matpel;}  ?></td>
                <td><?php echo $ab2->nilai ?></td>
                <td><?php echo $ab2->keterangan ?></td>
            </tr>
            <?php } ?>
            </tbody>
      </table>
      </div>
  </body>
</html>

<script>
    window.print();
</script>