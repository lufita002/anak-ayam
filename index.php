<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anak ayam</title>
    <style>
    .ganjil{
        color:orange;
    }
    .genap{
        color:blue;
    }
    </style>
</head>
<body>
    
    <p class="ganjil">Teks orange</p> 
    <!-- jika nilai nya ganjil maka akan berwarna orange pada teksnya  -->
    <p class="genap"> Teks biru</p>
    <!-- jika nilainya genap maka akan berwarna biru pada teksnya -->
</body>
</html>
<?php
    // anak ayam bernilai 8 pada awalnya
    $anak_ayam=8; 
    echo "Tekotek-kotek kotek anak ayam turun $anak_ayam <br>";
    // program keluaran pada awalan anak ayam yang bernilai 8
    for ($i= $anak_ayam-1; $i >=0 ; $i--) {
    // i=$anak_ayam-1 itu berarti pada pemasukan awal anak ayam akan dikurangi 1 setiap turunannya.
    // dan nilai_anak ayam akan bernilai lebih dari sama dengan 0 dan i bersifat -- karena nilainya berkurang
    // pengulangan yang menentukan nilai anak ayam yang turun bernilai ganjil atau genap 
        if ($i%2 == 1){ 
        // jika anak ayam bernilai 1 maka akan muncul nilai yang bernilai ganjil 
            echo "<p class='ganjil'>Mati satu tinggal $i</p><br>";
            // keluaran pada jumlah nilai anak ayam yang ditentukan pada pengulangan awal dengan memanggil class ganjil terlebih dahulu
        }elseif($i == 0){
            // jika nilai bernilai 0 maka hasilnya anak ayam bernilai 0 atau habis
            echo "Mati satu habis semua T_T hiks";
        }else{
            // jika nilai kebalikan pada ganjil maka akan muncul nilai genap dengan memanggil class genap
            echo "<p class='genap'>Mati satu tinggal $i</p>";
        }
    }
?>