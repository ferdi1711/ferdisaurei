<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 class="text-muted"><span class="glyphicon glyphicon-list"></span> DAFTAR HARGA</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Harga barang</th>
							<th>Ukuran</th>
						
						</tr>
						</thead>
						<?php

						include "konek.php";
						$sql=$koneksi->query("select * from harga_barang");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nama_barang']?></td>
							<td><?php echo $row['harga_barang']?></td>
							<td><?php echo $row['ukuran']?></td>

                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
				
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 class="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>NIKE STOR</h4>
				<img src="images/nike.jpeg" class="img-thumbnail img-responsive">
				<p>Nike inc: adalah slah satu perusahahan sepatu, <b>Amerika serikat</b> mereka terkenak karna mensponsori beberapa oalaragawan propesional seperti Cristiano Ronaldo, Leroy Sané, Kylian Mbappe, Ronaldinho, Wayne Rooney, Rafael Nadal, Pete Sampras, Tiger Woods, LeBron James, Kyrie Irving, James Stewart, dan Michael Jordan.</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>