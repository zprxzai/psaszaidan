<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $jam = $_POST['jam'];

    $sql = "UPDATE mata_pelajaran SET mata_pelajaran='$mata_pelajaran', hour='$hour'";
    $result = mysqli_query($con, $sql);


    if ($result) {
        header('location: index.php?m=mapel&s=view');
    } else {
        include "index.php?m=mapel&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}