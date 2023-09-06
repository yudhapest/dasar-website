<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST["search"])) {
    $mahasiswa = search($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
   
    <h1>Daftar Mahasiswa</h1>
    <a href="add.php">Tambah Data</a><br><br>


    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian">
        <button type="submit" name="search">Cari</button>
    </form><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Image</td>
            <td>Name</td>
            <td>Nim</td>
            <td>Email</td>
            <td>Study</td>
            <td>Aksi</td>
        </tr>

        <?php $no = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td>
                <img src="<?= $row["image"] ?>" width="50" alt="image">
            </td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["study"] ?></td>
            <td>
                <a href="update.php?id=<?= $row["id"] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Yakin?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>