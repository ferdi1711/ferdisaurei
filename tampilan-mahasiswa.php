<!doctype html>
<html>
<head><title>data mahasiswa</title></head>
<body>
	<h1>data mahasiswa</h1>
	<table bolder="1">
		<tr>
			<td>nim</td>
			<td>nama</td>
			<td>jenis kelamin</td>
			<td>alamat</td>
		</tr>
<?php
include "koneksi php";
$sql=$->query("select * from mahasiswa");
while($row=$sql->fetch_assoc()){
?>
   <tr>
   	   <td><?php echo $row ['nim']?></td>
   	   <td><?php echo $row ['nama']?></td>
   	   <td><?php echo $row ['jenis_kelamin']?></td>
   	   <td><?php echo $row ['alamat']?></td>
   </tr>
   <?php } ?>
</table>
</body>
</html>