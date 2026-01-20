<?php

function cek_data($data){
    if (isset($_GET[$data])){
        if ($_GET[$data] == NULL){
            return 0;
        } else {
            return $_GET[$data];
        }
    } else {
        return 0;
    }
}

// fungsi untuk menghitung hasil
function hasil($a,$b){
    $x = cek_data($a);
    $y = cek_data($b);

    if (cek_data('dor') == "Tambah") {
        return $x + $y;
    } else if (cek_data('dor') == "Kurang") {
        return $x - $y;
    } else if (cek_data('dor') == "Kali") {
        return $x * $y;
    } else if (cek_data('dor') == "Bagi") {
        // jika salah satu angka = 0 → infinix
        if ($x == 0 || $y == 0) {
            return "∞";
        } else {
            return $x / $y;
        }
    } else {
        return 0; // default jika tombol belum ditekan
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
        </form>
    </body>
</html>
