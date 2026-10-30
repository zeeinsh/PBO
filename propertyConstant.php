<?php
class Produk {

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

     public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function getPajakPersen(): float {
        return self::PAJAK * 100;
    }

    public function getTotalHarga(): float {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

$produk = new Produk('P0001', 'Laptop', 10000000, 5);

echo "Kode: " . $produk->kode . "<br/>";
echo "Produk: " . $produk->nama . "<br/>";
echo "Harga: Rp " . number_format($produk->harga, 0, ',', '.') . "<br/>";
echo "Stok: " . $produk->stok . "<br/>";
echo "Pajak: " . $produk->getPajakPersen() . "%<br/>";
echo "Total harga setelah pajak: Rp " . number_format($produk->getTotalHarga(), 0, ',', '.');
?>