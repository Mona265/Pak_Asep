<?php


//data 1
$anggota [] = array(
    'nama'      => 'Kontak Kami:',
    'email'     => 'kamubisa@gmail.com',
    'no_hp'     => '081378444327',
    'alamat_kantor' => 'Kosan Wulan Akbar, Gang Swadaya No 112, Beji Timur Depok 16442');
    

//mengencode data menjadi json
$jsonfile = json_encode($anggota, JSON_PRETTY_PRINT);

//menyimpan data ke dalam anggota.json
file_put_contents('anggota.json', $jsonfile);

echo "Data dibuat";








?>