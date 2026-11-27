<?php

require_once ('./Jasa.php');

use Pbo\Marketplace\Jasa;

$produk = new Jasa('P001', 'Laptop', 10000000, 5);



echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . Jasa::persenPajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->hitungTotal();

echo "<br/>";
echo"Metode Pembayaran: "  . $produk->payment('qris');