<?php

$conn = mysqli_connect("localhost", "root", "", "siswa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // Hapus pemanggilan upload() karena gambar tidak diperlukan
    $query = "INSERT INTO siswa (nama, NIS, jurusan) VALUES ('$nama', '$nis', '$jurusan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "UPDATE siswa SET
                nama = '$nama',
                NIS = '$nis',
                jurusan = '$jurusan'
                WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>