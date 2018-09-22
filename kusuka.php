<?php
include_once "head.php";
$file = $_FILES['listing']['tmp_name']; 
$exte = $_FILES['listing']['type'];
$err = $_FILES['listing']['error']; 
$nama = $_POST['namafile'];
$folder = $_POST['mk'];

$docx = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
$doc = "application/msword";
$pdf = "application/pdf";
$pdff = "application/octer-stream";
$dst = null;
$ext = null;

if($exte == $docx){
	$ext = '.docx';
}
if($exte == $doc){
	$ext = '.doc';
}
if($exte == $pdf){
	$ext = '.pdf';
}
if($exte == $pdff){
	$ext = '.pdf';
}

if($folder == "PD"){
    $dest = 'Pemrograman-Desktop/' . basename($nama) . $ext;
}
else if($folder == "PBO"){
    $dest = 'PBO/' . basename($nama) . $ext; 
}
else if($folder == "WEB"){
    $dest = 'Pemrograman-Web/' . basename($nama) . $ext; 
}
else if($folder == "ALG"){
    $dest = 'Algoritma_dan_Pemrograman/' . basename($nama) . $ext; 
}
else{
    $dest = 'upload/' . basename($nama) . $ext; 
}



if($exte == $doc || $exte == $docx || $exte == $pdf || $exte==$pdff){
if($err == 0 && move_uploaded_file($file, $dest)){ 
        echo '<div class="main">';
        echo '<div class="login">';
        echo '<form>';
        echo '<div class="login-bottom">';
            echo '<h1>Unggah Berhasil</h1></br>';
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<img src="berhasil.png"/>';
            echo $exte;
        echo '</div>';
        echo '<form>';
        echo '</div>';
        echo '</div>';
    }
}
	else
	{
        echo '<div class="main">';
        echo '<div class="login">';
        echo '<form>';
        echo '<div class="login-bottom">';
            echo '<h1>Gagal Unggah..!</h1></br>';
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<img src="gagal.png"/>';
            echo $exte;
        echo '</div>';
        echo '<form>';
        echo '</div>';
        echo '</div>';
	}
?>
