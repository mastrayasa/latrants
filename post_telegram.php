<?php
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$date = $_POST['tanggal'];
$jmlPenumpang = $_POST['jmlPenumpang'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$namaPenumpang = $_POST['namaPenumpang'];

$token_bot = '1998214456:AAGk5MBPPmxegrAs6o7hTluUr9MNS8XJU7I';
$chat_id = '253479908';

$message =
    "Kota Asal : " .  $asal  .
    ", Kota Tujuan : " . $tujuan .
    ", Tanggal Perjalanan : " . $date .
    ", Jumlah Penumpang : " . $jmlPenumpang .
    ", Nama Pemesan : " . $nama .
    ", Alamat : " . $alamat .
    ", No. Telp : " . $telp .
    ", Nama Penumpang : " . $namaPenumpang;

$url = 'https://api.telegram.org/bot' . $token_bot . '/sendMessage?chat_id=' . $chat_id . '&text=' . $message . '&parse_mode=HTML';



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$page = curl_exec($ch);
curl_close($ch);
