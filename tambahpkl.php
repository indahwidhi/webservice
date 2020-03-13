<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['namakel'])) {
$url = 'https://widhiprastika.000webhostapp.com/pklmhs.php';
//$data = "[{\"namakel\":\".$_POST['namakel'].\",\"tempat\":\".$_POST['tempat'].\",\"judul\":\".$_POST['judul'].\"}]
;//
$data="{\"namakel\":\"".$_POST['namakel']."\",\"tempat\":\"".$_POST['tempat']."\",\"judul\":\"".$_POST['judul']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="tambahpkl.php">
<table>
<tr>
<td>Namakel</td>
<td><input type="text" name="namakel" id="namakel"></td>
</tr>
<tr>
<td>Tempat</td>
<td><input type="text" name="tempat" id="tempat"></td>
</tr>
<tr>
<td>Judul</td>
<td><input type="text" name="judul" id="judul"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>