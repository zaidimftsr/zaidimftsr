<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Quicksand&display=swap" rel="stylesheet">
<?php 

echo "<head><title>keranjang</title></head>";
$fp = fopen("struk.txt","r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Alamat: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Pesanan: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Nama: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='keranjang.php'> Pesan Lagi </a>";

?>