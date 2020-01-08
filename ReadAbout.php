<?php
// File json yang akan dibaca (full path file)
$file = "anggota.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$about = json_decode($anggota, true);

// Membaca data array menggunakan foreach
foreach ($about as $d) {
    echo $d['nim']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['kelas']. "<br>";
    echo $d['Matkul']. "<br>";
    echo $d['jurusan']. "<br><br><br>";
}