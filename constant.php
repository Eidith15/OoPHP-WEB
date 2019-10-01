<?php 


// define('NAMA', 'Adhitya Sidiq Permana');
// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR;






// class Coba{
// 	const NAMA = 'Adhit';
// }


// echo Coba::NAMA;


// echo __FILE__;






// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();


class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


 ?>