<?php
    // Informasi Data Diri
    $nama = "Rafael Destiano";
    $umur = 18;
    $sekolah = "SMK Muhammadiyah 1";
    $hobi = "Bermain Musik";
    $lokasi = "Jl.sidikan 76";

    // Menggunakan echo
    echo "<h1>Informasi Data Diri</h1>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Umur: $umur tahun</p>";
    echo "<p>Pekerjaan: $sekolah</p>";
    echo "<p>Hobi: $hobi</p>";
    echo "<p>Lokasi: $lokasi</p>";

    // Menggunakan print
    print("<h1>Informasi Data Diri</h1>");
    print("<p>Nama: $nama</p>");
    print("<p>Umur: $umur tahun</p>");
    print("<p>Pekerjaan: $sekolah</p>");
    print("<p>Hobi: $hobi</p>");
    print("<p>Lokasi: $lokasi</p>");

    // Menggunakan printf
    printf("<h1>Informasi Data Diri</h1>");
    printf("<p>Nama: %s</p>", $nama);
    printf("<p>Umur: %d tahun</p>", $umur);
    printf("<p>Pekerjaan: %s</p>", $sekolah);
    printf("<p>Hobi: %s</p>", $hobi);
    printf("<p>Lokasi: %s</p>", $lokasi);
?>
