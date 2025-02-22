<?php
include 'database.php';


$query = "SELECT * FROM harga_barang";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru & Staf</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">📚 LIST HARGA</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama_BARANG</th>
                    <th>HARGA_BARANG</th>
                    <th>UKURAN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['nama_barang']}</td>
                            <td>{$row['harga_barang']}</td>
                            <td>{$row['ukuran']}</td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">⬅️ Kembali</a>
    </div>
</body>

</html>