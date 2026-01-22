<?php

class PersegiPanjang {
    // Property
    public $panjang;
    public $lebar;

    // Method untuk menghitung luas
    public function hitungLuas() {
        // Rumus: Luas = Panjang x Lebar
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
}

// 1. Membuat objek baru
$kotak = new PersegiPanjang();

// 2. Menentukan nilai panjang dan lebar
$kotak->panjang = 10;
$kotak->lebar = 5;

// 3. Menampilkan hasil
echo "Panjang: " . $kotak->panjang . "<br>";
echo "Lebar: " . $kotak->lebar . "<br>";
echo "<b>Luas Persegi Panjang: </b>" . $kotak->hitungLuas();

?>