<?php

require_once ('./propertyConstant.php');

use Pbo\Marketplace\Produk;

$produk = new Produk('P001', 'Laptop', 10000000, 5);



echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . Produk::persenPajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->hitungTotal();