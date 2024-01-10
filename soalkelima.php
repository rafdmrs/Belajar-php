<?php
    // Informasi Data Diri
    $nama = "Rafael Destiano";
    $umur = 18;
    $sekolah = "SMK Muhammadiyah 1";
    $hobi = "Bermain Musik";
    $alamat = "jl.sidikan 76";

    // Menampilkan Informasi
    echo "<h1>Informasi Data Diri</h1>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Umur: $umur tahun</p>";
    echo "<p>sekolah: $sekolah</p>";
    echo "<p>Hobi: $hobi</p>";
    echo "<p>Lokasi: $alamat</p>";

    $nama = "Rafael Destiano";
    $umur = 18;
    $pekerjaan = "Web Developer";
    $alamat = "Jl. sidikan 76";
    $hobi = "Bermain Musik";

    echo "Nama saya adalah $nama. Saya berusia $umur tahun dan bekerja sebagai $pekerjaan. ";
    echo "Saat ini, saya tinggal di $alamat dan hobi saya adalah $hobi.";

    $nama = "Rafael Destiano";
    $umur = 18;
    $sekolah = "SMK Muhammadiyah 1";
    $hobi = "Bermain Musik";
    $lokasi = "Jl.sidikan 76";

    echo "<h1>Informasi Data Diri</h1>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Umur: $umur tahun</p>";
    echo "<p>sekolah: $sekolah</p>";
    echo "<p>Hobi: $hobi</p>";
    echo "<p>Lokasi: $lokasi</p>";

    print("<h1>Informasi Data Diri</h1>");
    print("<p>Nama: $nama</p>");
    print("<p>Umur: $umur tahun</p>");
    print("<p>sekolah: $sekolah</p>");
    print("<p>Hobi: $hobi</p>");
    print("<p>Lokasi: $lokasi</p>");

    printf("<h1>Informasi Data Diri</h1>");
    printf("<p>Nama: %s</p>", $nama);
    printf("<p>Umur: %d tahun</p>", $umur);
    printf("<p>sekolah: %s</p>", $sekolah);
    printf("<p>Hobi: %s</p>", $hobi);
    printf("<p>Lokasi: %s</p>", $lokasi);

    $umur = 25;
    $tinggi = 175.5;
    $menikah = true;
    $nama = "John Doe";

    printf("Umur: %d tahun\n", $umur);

    printf("Tinggi: %.2f cm\n", $tinggi);

    printf("Status Menikah: %b\n", $menikah);

    printf("Nama: %s\n", $nama);