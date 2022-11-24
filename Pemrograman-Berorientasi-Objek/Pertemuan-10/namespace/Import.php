<?php
// Halaman 15-20
require_once('./Namespace.php');


$kucing = new NamespaceSatu\Hewan\Hewan();
echo("</br>");
$kelinci = new NamespaceDua\Hewan\Hewan();

print_r($kucing, true);
print_r($kelinci, true);
?>