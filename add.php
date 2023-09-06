<?php
require 'function.php';

if (isset($_POST["submit"])) {
   if (add($_POST) > 0){
         echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
         ";
    }else{
         echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
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
   
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
    <ul>
        <li>
            <label for="image">Gambar : </label>
            <input type="text" name="image" id="image" required>
        </li>
        <li>
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" required>
        </li>
        <li>
            <label for="nim">Nim : </label>
            <input type="text" name="nim" id="nim" required>
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" required>
        </li>
        <li>
            <label for="study">Study : </label>
            <input type="text" name="study" id="study" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </ul>
</form>
   
   
</body>
</html>