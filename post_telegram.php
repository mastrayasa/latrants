<?php
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$date = $_POST['tanggal'];
$jmlPenumpang = $_POST['jmlPenumpang'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$nama2Penumpang = $_POST['namaPenumpang'];

$namaPenumpang = implode(", ", $nama2Penumpang);

$token_bot = '1998214456:AAGk5MBPPmxegrAs6o7hTluUr9MNS8XJU7I';
$chat_id = '253479908';

$message =
    "Nama : " . $nama .
    "\nAlamat : " . $alamat .
    "\nNo. Telp : " . $telp .
    "\nPerjalanan : " .  $asal . " -> " . $tujuan .
    "\nTanggal : " . $date .
    "\nJumlah Penumpang : " . $jmlPenumpang . " Orang" .
    "\nPenumpang : " . $namaPenumpang;

$url = 'https://api.telegram.org/bot' . urlencode($token_bot) . '/sendMessage?chat_id=' . urlencode($chat_id)  . '&text=' . urlencode($message) . '&parse_mode=HTML';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$page = curl_exec($ch);
curl_close($ch);
