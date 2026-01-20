<?php

function cek_data($data){
    if (isset($_GET[$data]) == true ){
        if ($_GET[$data] == NULL){
            return 0;
        } else {
            return $_GET[$data];
        }
    } else {
        return 0;
    }
}

// function hasil($a,$b){
//     // return cek_data($a) + cek_data($b);
//     if(cek_data('dor') == "Tambah"){
//         return cek_data($a) + cek_data($b);
//     }else if(){

//     }
// }

//buat angka apapun itu yang dibagi 0 = infinix

function hasil($a,$b){
    // return cek_data($a) + cek_data($b);
    if (cek_data('dor') == "Tambah") {
        return cek_data($a) + cek_data($b);
    } else if (cek_data('dor') == "Kurang") {
        return cek_data($a) - cek_data($b);
    } else if (cek_data('dor') == "Kali") {
        return cek_data($a) * cek_data($b);
    } else if (cek_data('dor') == "Bagi") {
        if (cek_data($b) != 0) {
            return cek_data($a) / cek_data($b);
        } else {
            return INF;
        }
    }
}

?>

<html>
    <head>
        <title>Kalkulator Using Function</title>
    </head>
    <body>
        <h2>Angka Pertama = <?= cek_data("angka1"); ?></h2>
        <h2>Angka Kedua = <?= cek_data("angka2"); ?></h2>
        <h2>Hasil = <?= hasil("angka1", "angka2"); ?></h2>
        <hr>
        <form action="" method="get">
            <label>Angka 1</label>
            <input type="number" name="angka1">
            <br>
            <label>Angka 2</label>
            <input type="number" name="angka2">
            <br>
            <input type="submit" name="dor" value="Tambah">
            <input type="submit" name="dor" value="Kurang">
            <input type="submit" name="dor" value="Kali">
            <input type="submit" name="dor" value="Bagi">
    </body>
</html>