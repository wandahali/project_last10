<?php
include('koneksi.php');


if(isset($_POST['proses'])){
    mysqli_query($conn,"insert into pesan set
    nama = '$_POST[nama]',
    email = '$_POST[email]',
    pesan = '$_POST[pesan]'");

    echo "<script>alert('Terima Kasih, Data berhasil disimpan!');window.location='index.php';</script>";
}
else{
    echo "<script>alert('Data anda tersimpan, Coba lagi!');window.location='index.php';</script>";
}
?>