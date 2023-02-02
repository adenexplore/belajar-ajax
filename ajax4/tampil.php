
<table class="data">
<tr>
    <th>No</th>
    <th>Nama</th> 
    <th>Jenis Kelamin</th> 
    <th>alamat</th>
  </tr>
  <?php
    include "koneksi.php";
    if (isset($_POST['jenis_kelamin'])) {
      $jenis_kelamin=$_POST['jenis_kelamin'];
  }else {
      $jenis_kelamin='';
  }

 
  $hasil=mysqli_query($kon,"SELECT * FROM user where jenis_kelamin='".$jenis_kelamin."'order by id desc");
  $no=0;
  while ($data = mysqli_fetch_array($hasil)):
      $no++;
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['jenis_kelamin']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
    <?php endwhile;?>
</table>