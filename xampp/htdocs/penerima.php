<?php

    // GET method . isian query akan ter-refleksikan di URL . biasanya, digunakan di search bar.
    if(isset($_GET['nama']) && isset($_GET['usia'])){
        $data_nama = $_GET['nama'];
        $data_usia = $_GET['usia'];
        echo "Berikut data yang tersimpan: <br> Nama: $data_nama <br> Usia: $data_usia";
    }
    // POST method . isian tidak akan ter-refleksikan di URL . biasanya, saat input email passw. pakai POST method agar lebih secure
    else{ 
        $data_nama_post = $_POST['nama'];
        $data_usia_post = $_POST['usia'];
        echo "Berikut data yang tersimpan: <br> Nama: $data_nama_post <br> Usia: $data_usia_post";
    }
?>