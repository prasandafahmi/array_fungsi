<?php
// deklarasi $lemari yang memiliki beberapa array sebagai elemennya
$lemari = array( 
 array('baju', 'celana'),
 array('laptop', 'komputer'),
 array('buku', 'pulpen') 

);
// anggap setiap baris/array di $lemari adalah sebuah laci
// kita akses laci ketiga, benda pertama
echo $lemari[2][1];
echo "<br>";
// kita akses laci kedua, benda kedua
echo $lemari[1][1];
echo "<br>";
// akses elemen di array yang sobat buat
?>