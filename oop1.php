<?php
class Mobil {
    // Properti
    private $merk;
    private $model;
    private $tahun;

    // Constructor
    public function __construct($merk, $model, $tahun) {
        $this->merk = $merk;
        $this->model = $model;
        $this->tahun = $tahun;
    }

    // Metode untuk mendapatkan informasi mobil
    public function getInfo() {
        return "Mobil: " . $this->merk . " " . $this->model . " tahun " . $this->tahun;
    }

    // Metode untuk mengubah tahun
    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }
}

// Menggunakan kelas Mobil
$mobil1 = new Mobil("Toyota", "Camry", 2020);
echo $mobil1->getInfo(); // Output: Mobil: Toyota Camry tahun 2020

$mobil1->setTahun(2021);
echo "\n" . $mobil1->getInfo(); // Output: Mobil: Toyota Camry tahun 2021
?>

<!--
Penjelasan Kode

Kelas Mobil:
    Kelas ini memiliki tiga properti: 
    $merk, $model, dan $tahun.
    Constructor digunakan untuk menginisialisasi properti saat objek dibuat.

Metode getInfo():
    Metode ini mengembalikan string yang berisi informasi tentang mobil.

Metode setTahun($tahun):
    Metode ini digunakan untuk mengubah tahun mobil.

Instansiasi Objek:
    - Membuat objek mobil1 dari kelas Mobil dengan memberikan parameter untuk merk, model, dan tahun.
    - Memanggil metode getInfo() untuk menampilkan informasi mobil.
    - Mengubah tahun menggunakan setTahun() dan menampilkan informasi yang diperbarui.


-->
