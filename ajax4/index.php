<!DOCTYPE html>
<html>
<head>
	<title>Halaman Form | ajax</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>
<body>
	<h1>PERCOBAAN DENGAN AJAX</h1>	
	<div class="wrap">
		
 
	<form method="post" class="form-user">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<select name="jenis_kelamin">
                <option value="L">Laki-Laki</option>
                <option value="p">Perempuan</option>
            	</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><a class="tombol-simpan" type="submit">Simpan</a></td>
			</tr>
		</table>
	</form>
 
 
	<div class="tampildata"></div>
 
	</div>
 
	<script type="text/javascript">
	$(document).ready(function(){
		$(".tombol-simpan").click(function(){
			var data = $('.form-user').serialize();
			$.ajax({
				type: 'POST',
				url: "aksi.php",
				data: data,
				success: function() {
					$('.tampildata').load("tampil.php");
				}
			});
		});
	});
	</script>
	<label>Pilih Jenis Kelamin : </label>
        <select name="jenis_kelamin" class="jenis_kelamin">
            <option value="L">Laki Laki</option>
            <option value="P">Perempuan</option>
        </select>
      
        <hr>
        <div class="tampil_data"></div>
        <script>
              $(document).ready(function(){
                    $('.tampil_data').load("tampil.php");
                    $('.jenis_kelamin').bind('change', function () {
                        var jenis_kelamin=$(".jenis_kelamin").val();
                        $.ajax({
                            method: 'POST',
                            url	: "tampil.php",
                            data: {jenis_kelamin:jenis_kelamin},
                            success	: function(data){
                                $('.tampil_data').html(data);
                            }
                        });
                    });
              });
        </script>
</body>
</html>