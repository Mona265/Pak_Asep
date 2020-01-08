<?php
// Data 1
$about [] = array(
    
    'nim'    => 4617010059,
    'nama'   => 'Nadia Ela Sakina ',
    'kelas' => 'TI 5A',
    'Matkul' => 'WEB 2',
    'jurusan' => 'TIK'
);

// Data 2
$about [] = array(

    'nim'    => 4617010011,
    'nama'   => 'Nur Aminah',
    'kelas' => 'TI 5A',
    'Matkul' => 'WEB 2',
    'jurusan' => 'TIK'
  
);

// Data 3
$about [] = array(
  
    'nim'    => 4617010021,
    'nama'   => 'Ramona Matovani',
    'kelas' => 'TI 5A',
    'Matkul' => 'WEB 2',
    'jurusan' => 'TIK'
);

// Mengencode mswh menjadi json
$jsonfile = json_encode($about, JSON_PRETTY_PRINT);

// Menyimpan msh ke dalam anggota.json
file_put_contents('anggota.json', $jsonfile);