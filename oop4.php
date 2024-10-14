<?php

// Kelas Produk
class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

// Kelas Penjualan
class Sale {
    private $product;
    private $quantity;

    public function __construct(Product $product, $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getTotal() {
        return $this->product->getPrice() * $this->quantity;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

// Kelas Laporan Penjualan
class SalesReport {
    private $sales = [];

    public function addSale(Sale $sale) {
        $this->sales[] = $sale;
    }

    public function getTotalSales() {
        $total = 0;
        foreach ($this->sales as $sale) {
            $total += $sale->getTotal();
        }
        return $total;
    }

    public function listSales() {
        $no = 1;
        foreach ($this->sales as $sale) {
            ?>
            <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $sale->getProduct()->getName() ?></td>
                <td><?= $sale->getProduct()->getPrice() ?></td>
                <td><?= $sale->getQuantity() ?></td>
                <td><?= $sale->getTotal() ?></td>
            </tr>
            <?php
        }
    }
}

// Contoh Penggunaan
$product1 = new Product("Laptop", 15000000);
$product2 = new Product("Smartphone", 3000000);
$product3 = new Product("Tablet", 2000000);

// Membuat laporan penjualan
$salesReport = new SalesReport();

// Menambahkan penjualan
$sale1 = new Sale($product1, 2); // 2 Laptop
$sale2 = new Sale($product2, 5); // 5 Smartphone
$sale3 = new Sale($product3, 3); // 3 Tablet
$sale4 = new Sale($product1, 5); // 5 Laptop

$salesReport->addSale($sale1);
$salesReport->addSale($sale2);
$salesReport->addSale($sale3);
$salesReport->addSale($sale4);
// Menampilkan laporan penjualan
?>
<h2>Daftar Penjualan</h2>
<table border="1">
    <tr>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>
    <?php  
    $salesReport->listSales();
    ?>
    <tr>
        <td colspan="4">Total Penjualan</td>
        <td><?= $salesReport->getTotalSales() ?></td>
    </tr>
</table>
