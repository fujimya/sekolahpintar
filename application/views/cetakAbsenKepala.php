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
  </body>
</html>

<script>
    window.print();
</script>