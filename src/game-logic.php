<?php

$angka = "7";
$status = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") :
  $input = $_POST["tebakan"];

  if (!is_numeric($input)) {
    $status = "error";
  } else if ($angka > $input) {
    $status = "kecil";
  } else if ($angka < $input) {
    $status = "besar";
  } else {
    $status = "benar";
  }

  switch ($status) {
    case "kecil":
      $pesan = "angka yang anda masukkan terlalu kecil";
      break;
    case "besar":
      $pesan = "angka yang anda masukkan terlalu besar";
      break;
    case "benar":
      $pesan = "angka yang anda masukkan benar";
      break;
    case "error":
      $pesan = "input harus berupa angka";
      break;
  }

endif;
