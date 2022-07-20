<?php
echo "<head><tittle>Struk pembelian</tittle></head>";
$nama=$_POST['mangga'];
$fp  = fopen ("struk.txt","a+");
fputs($fp,"$nama");
fclose ($fp);
?>