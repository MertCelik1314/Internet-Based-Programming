<?php
include 'veritabani_baglanti.php';

$isim = $_POST['isim'];
$eposta = $_POST['eposta'];

$sql = "INSERT INTO kisiler (isim, eposta) VALUES ('$isim', '$eposta')";

if ($conn->query($sql) === TRUE) {
  echo "Kişi eklendi.";
} else {
  echo "HATA: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>