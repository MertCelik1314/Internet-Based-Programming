<?php
include 'veritabani_baglanti.php';

$sql = "SELECT * FROM kisiler";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - İsim: " . $row["isim"]. " - E-posta: " . $row["eposta"]. "<br>";
  }
} else {
  echo "Kişi bulunamadi";
}

$conn->close();
?>
