<?php

$teks = 'Ini kalimat yang diproses oleh fungsi-fungsi kapitalisasi string. Ini juga kalimat lainnya. Silakan lihat hasil yang ditampilkan.';
echo '<p><u>Kalimat asli:</u> <br/>';
echo "$teks</p>";
echo '<p><u>Diubah menjadi huruf kapital semua:</u> <br/>';
echo strtoupper("$teks</p>");
echo '<p><u>Diubah menjadi huruf kecil semua:</u> <br/>';
echo strtolower("$teks</p>");
echo '<p><u>Diubah menjadi huruf kapital di awal kalimat:</u> <br/>';
echo ucfirst("$teks</p>");
echo '<p><u>Diubah menjadi huruf kapital di setiap awal kata:</u> <br/>';
echo ucwords("$teks</p>");
?>