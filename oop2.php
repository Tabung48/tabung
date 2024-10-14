<?php

class Mobil {
    // Properti
    private $merk;
    private $model;
    private $tahun;
    private $kecepatan;

    // Constructor
    public function __construct($merk, $model, $tahun) {
        $this->merk = $merk;
        $this->model = $model;
        $this->tahun = $tahun;
        $this->kecepatan = 0; // Kecepatan awal
    }

    // Metode untuk mendapatkan informasi mobil
    public function getInfo() {
        return "Mobil: " . $this->merk . " " . $this->model . " tahun " . $this->tahun;
    }

    // Metode untuk mengubah tahun
    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }

    // Metode untuk menambah kecepatan
    public function tambahKecepatan($jumlah) {
        $this->kecepatan += $jumlah;
        return "Kecepatan sekarang: " . $this->kecepatan . " km/jam";
    }

    // Metode untuk mengurangi kecepatan
    public function kurangiKecepatan($jumlah) {
        $this->kecepatan -= $jumlah;
        if ($this->kecepatan < 0) {
            $this->kecepatan = 0; // Kecepatan tidak bisa negatif
        }
        return "Kecepatan sekarang: " . $this->kecepatan . " km/jam";
    }
}

// Menggunakan kelas Mobil
$mobil1 = new Mobil("Honda", "Civic", 2022);
echo $mobil1->getInfo() . "<br>"; // Output: Mobil: Honda Civic tahun 2022

echo $mobil1->tambahKecepatan(50) . "<br>"; // Output: Kecepatan sekarang: 50 km/jam
echo $mobil1->tambahKecepatan(30) . "<br>"; // Output: Kecepatan sekarang: 80 km/jam
echo $mobil1->kurangiKecepatan(20) . "<br>"; // Output: Kecepatan sekarang: 60 km/jam
echo $mobil1->kurangiKecepatan(70) . "<br>"; // Output: Kecepatan sekarang: 0 km/jam
?>

<!--
Penjelasan Kode
1. Kelas Mobil:
   - Memiliki properti $merk, $model, $tahun, dan $kecepatan.
   - Properti $kecepatan diinisialisasi dengan 0 saat objek dibuat.

2. Metode getInfo():
   Mengembalikan string yang berisi informasi tentang mobil.

3. Metode setTahun($tahun):
   Mengubah tahun mobil.

4. Metode tambahKecepatan($jumlah):
   Menambah nilai kecepatan dengan jumlah yang diberikan dan mengembalikan kecepatan terbaru.

5. Metode kurangiKecepatan($jumlah):
   Mengurangi nilai kecepatan dengan jumlah yang diberikan. Jika kecepatan menjadi negatif, diatur menjadi 0.

6. Instansiasi Objek:
   - Membuat objek mobil1 dari kelas Mobil.
   - Memanggil metode untuk mendapatkan informasi dan mengubah kecepatan.

-->