<?php
 
$connect=mysqli_connect("localhost", "id12804405_praktek", "widhi","id12804405_praktekkerja");
 
$query = "SELECT * from praktek ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "namakel" => $row["namakel"],
    "tempat" => $row["tempat"], 
    "judul" => $row["judul"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA PRAKTEK\":" . $data . "}";
?>
