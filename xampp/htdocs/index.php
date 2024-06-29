<?php
    // di PHP, wajib ada " ; "


    // echo "hello world!";

    // Variabel
    $nama_siswa = "Budi";
    // echo $nama_siswa;

    $angka_1 = 10;
    $angka_2 = 20;

    // Operator Aritmatika
    $hasil_penjumlahan = $angka_1 + $angka_2;
    echo "$nama_siswa berusia $hasil_penjumlahan tahun";

    // Operator Assignment
    $hasil_assignment = $angka_1 += 100; // this will assign 110 to hasil_assignment and angka_1 itself
    echo $hasil_assignment;

    // Operator Comparison
    var_dump($angka_1 >= $angka_2); // 110 >= 20

    // Kondisi
    $cuaca = "mendung mendung";
    if($cuaca == "hujan"){
        echo "Silakan bawa jas hujan";
    }
    elseif($cuaca == "panas"){
        echo "Silakan bawa jaket";
    }
    elseif($cuaca == "mendung"){
        echo "Silakan bawa jaket dan jas hujan";
    }
    else{
        echo "Maaf, kondisi tidak dikenali!";
    };

    // For loop
    for($i=1; $i<=5; $i++){
        echo "<br> <h3>hello world!</h3> <br>";
    }

    $siswa = ["Budi", "Andi", "Rudi"];
    foreach($siswa as $s){
        echo "Halo " . $s . "<br>";
    }











?>
