<?php

class User {
    // Property
    public $username;

    // Method Setter: Untuk mengubah/mengisi nilai username
    public function setUsername($username) {
        $this->username = $username;
    }

    // Method Getter: Untuk mengambil/menampilkan nilai username
    public function getUsername() {
        return $this->username;
    }
}

// 1. Membuat objek User
$user1 = new User();

// 2. Mengubah nilai username menggunakan method Setter
$user1->setUsername("Budi_Ganteng");

// 3. Menampilkan hasil menggunakan method Getter
echo "Username saat ini adalah: " . $user1->getUsername();

echo "<br>";

// 4. Mengubah nilai lagi (Update)
$user1->setUsername("Budi_Pro_Player");
echo "Username setelah diubah: " . $user1->getUsername();

?>