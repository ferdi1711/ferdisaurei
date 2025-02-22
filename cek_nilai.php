<?php
$nilai_a=$_POST['nilai_a'];
$nilai=$_POST['nilai_b'];

if($nilai_a > $nilai_b){
	echo "A besar B";
}else($nilai_a < $nilai_b){
	echo "1.A kecil dari B";
}else{
	echo "sama besar";
}

echo" <br><a href='form2.php'>back</a>";
?>