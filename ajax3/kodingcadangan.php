(ini buat index nya)
<!-- <!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <form method="post" id="form_mahasiswa">
            <label>NIK   </label>
            <input type="number" name="nik"><br>
            <label>Nama  </label>
            <input type="text" name="nama"><br>
            <label>Jurusan</label>
            <select name="jurusan">
                <option value="TI">Teknik Informatika</option>
                <option value="TK">Teknik Komputer</option>
                <option value="SI">Sistem Informasi</option>
                <option value="KA">Komputerisasi Akuntansi</option>
                <option value="MI">Manajemen Informatika</option>
            </select>
        </form>
        <button id="btn_tampil">Tampilkan</button>
        <hr>
        <div id="tampil_data"></div>
        <script>
              $(document).ready(function(){
                    $('#tampil_data').load("tampil.php");
                    $('#btn_tampil').click(function(){
                        var data = $('#form_mahasiswa').serialize();
                        $.ajax({
                            type	: 'POST',
                            url	: "tambah.php",
                            data: data,
                            cache	: false,
                            success	: function(data){
                                $('#tampil_data').load("tampil.php");
                            }
                        });
                    });
              });
        </script>

    </body>
</html> -->


=============================================================================
(ini buat tampil nya)
<!-- <table border='1'>
  <tr>
    <th>No</th>
    <th>NIK</th> 
    <th>Nama</th> 
    <th>Jurusan</th>
  </tr>
  <?php
    include "koneksi.php";
    $hasil=mysqli_query($kon,"select * from mahasiswa order by nik desc");
    $no=0;
    while ($data = mysqli_fetch_array($hasil)):
        $no++;
  ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nik']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['jurusan']; ?></td>
  </tr>
    <?php endwhile;?>
</table>  -->
