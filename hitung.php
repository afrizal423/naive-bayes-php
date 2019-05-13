<?php


include('NB.php'); //memanggil file NB.php
$data = $_POST['hasil']; //memanggil data inputan array hasil[] ke variable $data

//masukkan satu persatu indeks array sesuai atribut
$X=array('Bi'=>$data[0],'Pi'=>$data[1],'Sj'=>$data[2],'Mm'=>$data[3],'Mt'=>$data[4],'Fz'=>$data[5],'Km'=>$data[6]);
//Menentukan class dalam atribut category
$n = 'Category';

//nama tabel pada databse
$table='table2';

//eksekusi program memanggil fungsi
classify($X,$n,$table);

?>
