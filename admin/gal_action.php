<?php
include '../db/paket.php';


if($_POST['action'] == 'input_gal'){
    $paket->insertGal($_POST['id'], $_POST['nama_wisata'], $_POST['caption'], $_POST['gambar'], $_POST['status']);
} elseif($_POST['action'] == 'edit_gal') {
    $paket->updateGal($_POST['id'], $_POST['nama_wisata'], $_POST['caption'], $_POST['gambar'], $_POST['status']);
} elseif($_GET['action'] == 'delete'){
    $paket->deleteGal($_GET['id']);
}

header('location:admin.php?page=list_gal');
