<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    // Lakukan apa yang diperlukan dengan data formulir, seperti menyimpan ke database atau mengirim email
    // Misalnya:
    // Simpan data ke database atau kirim email pemberitahuan

    // Beri respons kepada pengguna
    echo "Terima kasih, $nama! Pesan Anda telah terkirim.";
    
    // Tampilkan data yang dikirim oleh pengirim
    echo "<h2>Data yang Anda kirim:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Pesan: $pesan</p>";
} else {
    echo "Akses ke halaman ini tidak valid.";
}
?>
