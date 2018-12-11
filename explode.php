<?php

$data = 'Fahmi, Pria, fahmiprasanda@unpak.ac.id, 081317906140';
$pecahan = explode(',',$data,4);
for ($i=0; $i<=3; $i++)
{
  echo  "Pecahan $i = " . $pecahan[$i] . '<br>';
};
?>