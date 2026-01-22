<?php

class Buku {
    // Property
    public $judul;
    public $pengarang;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    public function __construct($judul, $pengarang) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }

    // Method untuk menampilkan informasi buku
    public function infoBuku() {
        return "Buku: " . $this->judul . " | Pengarang: " . $this->pengarang;
    }
}

// Membuat objek dan mengisi data melalui Constructor
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata");
$buku2 = new Buku("Filosofi Teras", "Henry Manampiring");

// Menampilkan data
echo $buku1->infoBuku() . "<br>";
echo $buku2->infoBuku();

?>