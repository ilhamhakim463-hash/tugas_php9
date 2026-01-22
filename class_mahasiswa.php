<?php

// 1. Mendefinisikan Class Mahasiswa
class Mahasiswa {
    // Property
    public $nama;

    // Method untuk menampilkan nama
    public function tampilkanNama() {
        return "Nama mahasiswa ini adalah: " . $this->nama;
    }
}

// 2. Membuat Objek dari Class Mahasiswa (Instansiasi)
$mahasiswa1 = new Mahasiswa();

// 3. Mengisi property nama
$mahasiswa1->nama = "Budi Santoso";

// 4. Memanggil method tampilkanNama
echo $mahasiswa1->tampilkanNama();

?>