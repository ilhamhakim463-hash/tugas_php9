<?php

class User {
    // Mengubah public menjadi private agar lebih aman (Encapsulation)
    private $username;

    // Method Setter dengan Validasi
    public function setUsername($username) {
        // Contoh validasi: username harus minimal 5 karakter
        if (strlen($username) >= 5) {
            $this->username = $username;
        } else {
            echo "Error: Username '$username' terlalu pendek! (Min. 5 karakter)<br>";
        }
    }

    // Method Getter
    public function getUsername() {
        return $this->username;
    }
}

$user1 = new User();

// Mencoba set username yang valid
$user1->setUsername("Budi_Ganteng");
echo "Username 1: " . $user1->getUsername() . "<br>";

// Mencoba set username yang terlalu pendek (tidak akan tersimpan)
$user1->setUsername("Joe"); 
echo "Username 2: " . $user1->getUsername(); // Tetap menampilkan Budi_Ganteng

?>