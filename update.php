<?php
require 'function.php';

//ambil data url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
   if (update($_POST) > 0){
         echo "
            <script>
                alert('Data Berhasil Diubahkan!');
                document.location.href = 'index.php';
            </script>
         ";
    }else{
         echo "
            <script>
                alert('Data Gagal Diubahkan!');
                document.location.href = 'update.php';
            </script>
         ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
   
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $id ?>"> <!-- Use the $id variable here -->
    <ul>
        <li>
            <label for="image">Gambar : </label>
            <input type="text" name="image" id="image" required value="<?= $mahasiswa["image"] ?>">
        </li>
        <li>
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" required value="<?= $mahasiswa["name"] ?>">
        </li>
        <li>
            <label for="nim">Nim : </label>
            <input type="text" name="nim" id="nim" required value="<?= $mahasiswa["nim"] ?>">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" required value="<?= $mahasiswa["email"] ?>">
        </li>
        <li>
            <label for="study">Study : </label>
            <input type="text" name="study" id="study" required value="<?= $mahasiswa["study"] ?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data!</button>
        </li>
    </ul>
</form>
   
   
</body>
</html>