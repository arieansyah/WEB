<?php
include '../db/paket.php';


if($_POST['action'] == 'input'){
    $paket->insertPaket($_POST['img'], $_POST['nama_paket'], $_POST['kode_paket'], $_POST['harga'], $_POST['caption'], $_POST['status']);
} elseif($_POST['action'] == 'pack_edit') {
    $paket->updatePaket($_POST['nama_paket'], $_POST['kode_paket'], $_POST['harga'], $_POST['caption'], $_POST['status']);
} elseif($_GET['action'] == 'delete'){
    $paket->deletePaket($_GET['kode_paket']);
}

header('location:admin.php?page=lihat_list');
