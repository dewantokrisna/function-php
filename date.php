<?php
// Date 
// Untuk menampilkan tnggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970 -> waktu yg disepakati untuk komputer
// echo time();
// echo date("l", time() + 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 4, 27, 1996));

// strtotime
echo date("l", strtotime("27 Apr 1996"));

// strlen() panjang string
// strcmp() compae string
// explode() memecah string menjadi array
// htmlspecialchars();

// var_dump mencetak array object
// isset() boolean
// empty() cek kosong atau tidak
// die() memberhentikan program 
// sleep() memberhentikan sementara
