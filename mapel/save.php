<?php
if (isset ($_POST['simpan'])) {
    include_once ('config.php');
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $jam = $_POST['jam'];

    $sql = "INSERT INTO mata_pelajaran SET mata_pelajaran='$mata_pelajaran', jam='$jam'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location: index.php?m=mapel&s=view');
    } else {
        include "index.php";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}