<html> 
Berikut ini adalah hasil pengolahan dari data yang Anda masukkan :<br/><br/> 
<table><tr><td> 
<?php
$nama=$_POST['nama']; 
$nim=$_POST['nim']; 
$tugas=$_POST['tugas']; 
$absensi=$_POST['absensi']; 
$uas=$_POST['uas']; 
$uts=$_POST['uts']; 
$ipk=($tugas+$absensi+$uts+$uas)/4; 

if ($ipk>=90) 
{
$grade="A";
 }
else if ($ipk>=85 ) 
{
$grade="B"; 
}
else if ($ipk>=80 ) 
{
$grade="C"; 
}
else if ($ipk>=70 ) 
{
$grade="D"; 
}
else if ($ipk<=40 ) 
{
$grade="E"; 
}
echo"Nama Anda </td><td> = $nama </td></tr>"; 
echo"<tr><td>NIM Anda </td><td> = $nim</td></tr>"; 
echo"<tr><td>Nilai Absensi </td><td> = $absensi </td></tr>"; 
echo"<tr><td>Nilai Tugas </td><td> = $tugas </td></tr>"; 
echo"<tr><td>Nilai UTS </td><td> = $uts </td></tr>"; 
echo"<tr><td>Nilai UAS </td><td> = $uas"; 
echo"<tr><td>Nilai Rata-rata </td><td> = $ipk"; 

echo "<tr><td>Grade Anda </td><td>= $grade"; 
?>
</td></tr> 
</table> 
<br/> 

</html>