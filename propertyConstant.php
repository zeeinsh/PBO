<?php
class produk {

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const pajak = 0.11;

    public function pajak() {
        return self::pajak * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::pajak);
    }
}
    $produk = new produk();
    $produk->kode = 'P0001';
    $produk->nama = 'Laptop';
    $produk->harga = '10000000';
    $produk->stok = 5;

    $pajak = produk::pajak * 100;
    $jumlahPajak = $produk->harga * produk::pajak;

    $total = $produk->harga + $jumlahPajak;

    echo "Produk: ". $produk->nama;
    echo "<br/>";
    echo "Harga: ". $produk->harga;
    echo "<br/>";
    echo "Stok: ". $produk->stok;
    echo "<br/>";
    echo "Pajak: ". $pajak. "%";
    echo "<br/>";
    echo "Total harga setelah pajak: Rp". $total


?>