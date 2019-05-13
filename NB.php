<?php

function classify($X,$n,$table)
{
//untuk koneksi kedatabase
$koneksi = mysqli_connect("localhost","root","","nb"); 
  $class = array();//Untuk memanggil class
	$allclass = array();//total individual class
	$temp = array(); //variable bantuan

	//mencari class perbedaan berdasarkan atribut pada database
	$i = mysqli_query($koneksi,"select distinct(".$n.") from ".$table);
	while($j = mysqli_fetch_array($i))
		$temp[] = $j;
	foreach($temp as $t)
		$class[] = $t[$n];

	//print_r(array_values($class));

	//mencari total dari semua class
	$nc = mysqli_query($koneksi,"select count(".$n.") as num from ".$table);
	$p = mysqli_fetch_array($nc);
	$C = $p["num"];
	//print_r(array_values($p));

	//mencari total dari per classnya
	foreach($class as $c)
	{
		$nc = mysqli_query($koneksi,"select count(*) as num from ".$table." where ".$n."= '".$c."'");
		$m = mysqli_fetch_array($nc);
		$allclass[$c] = $m["num"];
	}
	//print_r(array_values($allclass));
	//echo json_encode($allclass);
	// mencari probabilitas class
	foreach($allclass as $c=>$p)
	{
		$Pc[$c] = round($p/$C,4);
		$argmax[$c] = 1;
	}

	//print_r(array_values($Pc));
	//echo json_encode($Pc);
	foreach($allclass as $c=>$p)
	{
		foreach($X as $x=>$y)
		{
			
			$i = mysqli_query($koneksi,"select count(*) as num from ".$table." where ".$n."='".$c."' AND ".$x."='".$y."'");
			$j = mysqli_fetch_array($i);
	//	print_r(array_values($j));
			$P[$c][$x] = round($j["num"]/$allclass[$c],1);
			
	// P (data / kelas) mungkin 0 dalam beberapa kasus, abaikan 0 untuk saat ini
	//print_r(array_values($P));
			//if($P[$c][$x] != 0)
				$argmax[$c] *= $P[$c][$x];
			//	print_r(array_values($argmax));
		}
		
		$argmax[$c] *= $Pc[$c];
		//print_r(array_values($argmax));
		
	}
	//echo json_encode($argmax);
	//print_r(array_values($argmax));
	//print_r(array_keys($argmax));
	if (!isset($myObj)) 
	$myObj = new stdClass();
	$array=array(
        array('Nama' => 'Syafrida Maulina H', 'NPM' => '17081010066'),
        array('Nama' => 'Nyoman Rahadi S', 'NPM' => '17081010086'),
		array('nama' => 'Faradella Anggi Dewi', 'NPM' => '17081010091'),
		array('nama' => 'Afrizal Muhammad Y', 'NPM' => '17081010092')
    );
	$myObj->hasil_probabilitas = $argmax;
	$myObj->keputusan = array_keys($argmax,max($argmax));
	
	echo json_encode($myObj);
	
}
?>
