<?php include "../koneksi.php";

$query = "SELECT * FROM komentar ORDER BY id DESC";
$result = $koneksi->query($query);

if (!$result) {
    die("Query error: " . $koneksi->error); // Menampilkan error jika query gagal
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Komentar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">✉️ Pesan Komentar</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['pesan']}</td>
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