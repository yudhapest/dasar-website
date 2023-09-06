<?php
//Koneksi
$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($data){
    global $conn;
    $image = htmlspecialchars($data["image"]);
    $name = htmlspecialchars($data["name"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $study = htmlspecialchars($data["study"]);

    $query = "INSERT INTO mahasiswa VALUES('','$image','$name','$nim','$email','$study')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function delete($id){
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    $id = $data["id"];
    $image = htmlspecialchars($data["image"]);
    $name = htmlspecialchars($data["name"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $study = htmlspecialchars($data["study"]);

    $query = "UPDATE mahasiswa SET image = '$image', name = '$name', nim = '$nim', email = '$email', study = '$study' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function search($keyword){
    $query = "SELECT * FROM mahasiswa WHERE name LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR email LIKE '%$keyword%' OR study LIKE '%$keyword%'";
    return query($query);
}

?>