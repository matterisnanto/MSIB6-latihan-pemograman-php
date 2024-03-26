<?php


//cetak
echo 'belajar "PHP" <br>';
echo "bejalar \"PHP\"";
echo 'test';
print 'belajar PHP';
echo '<hr>';


//variables user
$nama = 'john';//data string
$umur = 20;//data integer
$alamat = 'Jl. bogor';
$berat = 60.5;//data decimal/float
$_pekerjaan = 'karyawan';
echo $umur;
echo $alamat;
echo '<br>';
echo "nama saya $nama alamat $alamat <br>";
echo 'nama $nama alamat $alamat';
echo '<br>';
echo 'nama saya'. $nama .'alamat';
echo '<hr>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Nama saya <?php echo $nama ?></h2>
    <h2> Umur saya <?= $umur ?></h2>
</body>
</html>

<?php
    echo $_SERVER['SERVER_ADMIN'];
    echo '<br>';
    echo $_SERVER['SERVER_PORT'];
    echo '<hr>';

    //variable konstanta
    //define untuk memanggil variable konstanta
    define('PELAJARAN', 'PHP DASAR');
    echo PELAJARAN;
    echo '<hr>';
    echo "ini mapel :". PELAJARAN;


    //operator aritmatika
    $a = 10;
    $b = 20;
    $hasil = $a + $b;
    $hasil2 = "$a-$b";
    $hasil3 = $a * $b;
    $hasil4 = $a / $b;
    echo $hasil;
    echo $hasil2;
    echo $hasil3;
    echo $hasil4;
    echo '<hr>';

    //operator lingkaran
    define('phi',3.14);
    $jari2 = 2;
    $luas = $jari2**phi;
    echo $luas;
    echo '<br>';

    $hitung_string = 'lorem ipsum dolor sit amet';
    var_dump($hitung_string);
    echo '<hr>';

    $tipedata= gettype($nama);
    echo $tipedata;
?>