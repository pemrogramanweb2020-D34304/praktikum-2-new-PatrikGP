<?php
    if(isset($_GET['name'])){
        $name = $_GET['name'];
    echo "Hasil Pencarian Untuk : ";
    "<br>";
	$user= [
		'Arsene Lupin'=>[
			'Nama'=>'Arsene Lupin',
			'NIK'=>'1234',
			'jenisKelamin'=>'Male',
			'tglLahir'=>'1902-03-23'
		],
		'Sherlock Holmes'=>[
			'Nama'=>'Sherlock Holmes',
			'NIK'=>'4321',
			'jenisKelamin'=>'Male',
			'tglLahir'=>'1876-08-16'
		],
		'Irene Adler'=>[
			'Nama'=>'Irene Adler',
			'NIK'=>'6789',
			'jenisKelamin'=>'Famele',
			'tglLahir'=>'1884-10-07'
		],
    ];
    
$i=0;
$a=0;

foreach($user as $x){
    if(strtoupper($x['Nama']) == strtoupper($name)) {
        $i=1;
        $a=$x;
    }
}

if($a){
	echo "<b><u>".$name."</u></b><br>";
	echo "<br>";
    echo "NIK			: ".$a['NIK']."<br>";
    echo "Kelamin		: ".$a['jenisKelamin']."<br>";
    echo "Tanggal Lahir	: ".$a['tglLahir']."<br>";

}
else{
    echo "<b>[".$name."]<i> Tidak Ditemukan</i></b>";
}



}
?>