<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>Berat badan ideal</h1>
<form method="post">
<table>
	
<tr>
	<td>Input tinggi badan </td>
	<td><input type="text" name="tinggi">CM</td>
</tr>		
<tr>
	<td>Input berat badan</td>
	<td><input type="text" name="berat">Kg</td>
</tr>
<tr>
	<td><input type="radio" name="gender" value="pria">Pria</td>
	<td>
    <input type="radio" name="gender" value="wanita">Wanita<br /></td>
</tr>
<tr>
	<td></td>
	<td><button>Submit</button></td>
</tr>
</table>
</form>
</center>
</body>
</html>

<?php

class bmi {
	public $tinggi, $berat;

	public function tampil($tinggi, $berat){
		echo "Tinggi anda adalah" . $this->tinggi = $tinggi . "Berat badan anda adalah" . $this->berat=$berat;

	}
}

$hasil = new bmi();
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];
$gender = $_POST['gender'];

if ($gender == 'pria') {
	echo  "coba";//$berat/($tinggi*$tinggi);
}else if($gender == 'wanita'){
	echo "coba wan";
}


$tampil = new bmi();
$tampil->tampil();
?>