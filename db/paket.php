<?php
include 'koneksi.php';

class paket extends DBConnect{
    // this class can do PDO manipulation through $this->db

    function insertPaket($img, $nama_paket, $kode_paket, $harga, $caption, $status){
       

        $stmt = $this->db->prepare('INSERT into paket values(?, ?, ?, ?, ?, ?)');
        $stmt->execute(array($img, $nama_paket, $kode_paket, $harga, $caption, $status));
    }

    function updatePaket($nama_paket, $kode_paket, $harga, $caption, $status){
        $stmt = $this->db->prepare('UPDATE paket set nama_paket=?, harga=?, caption=?, status=? where kode_paket=?');
        $stmt->execute(array($nama_paket, $harga, $caption, $status, $kode_paket));
        echo "Upadating student is successfull";
    }

    function deletePaket($kode_paket){
        $stmt = $this->db->prepare('delete from paket where kode_paket=?');
        $stmt->execute(array($kode_paket));
        echo "Deleting student is successfull";
    }

    function getAllPaket($allStatus = false){
        if($allStatus == true){
            $res = $this->db->query('select * from paket');
        } else {
            $res = $this->db->query('select * from paket where status = 1');
        }
        return $res;
    }

    function getPaket($kode_paket){
        $stmt = $this->db->prepare('SELECT * from paket where kode_paket = ?');
        $stmt->execute(array($kode_paket));
        $res = $stmt->fetch();
        return $res;
    }

/*====================================================================================================*/

    function insertGal($id, $nama_wisata, $caption, $gambar, $status){
        $stmt = $this->db->prepare('INSERT into gallery values(?, ?, ?, ?, ?)');
        $stmt->execute(array($id, $nama_wisata, $caption, $gambar, $status));
    }

    function updateGal($id, $nama_wisata, $caption, $gambar, $status){
        $stmt = $this->db->prepare('UPDATE gallery set nama_wisata=?, caption=?, gambar=?, status=? where id=?');
        $stmt->execute(array($nama_wisata, $caption, $gambar, $status, $id));
    }

    function deleteGal($id){
        $stmt = $this->db->prepare('delete from gallery where id=?');
        $stmt->execute(array($id));
    }

     function getAllGal($allStatus = false){
        if($allStatus == true){
            $res = $this->db->query('select * from gallery');
        } else {
            $res = $this->db->query('select * from gallery where status = 1');
        }
        return $res;
    }

    function getGal($id){
        $stmt = $this->db->prepare('SELECT * from gallery where id = ?');
        $stmt->execute(array($id));
        $res = $stmt->fetch();
        return $res;
    }

/*==============================================================================*/

    /*unction insertKontak($nama, $email, $message){
        $stmt = $this->db->prepare('INSERT into kontak values(?, ?, ?)');
        $stmt->execute(array($nama, $email, $message));
    }

    function deleteKontak($email){
        $stmt = $this->db->prepare('delete from kontak where email=?');
        $stmt->execute(array($email));
    }

    function getAllKontak($allStatus = false){
        if($allStatus == true){
            $res = $this->db->query('select * from kontak');
        } else {
            $res = $this->db->query('select * from kontak where status = 1');
        }
        return $res;
    }*/

/*===================================================================================*/

    function showStatus($status){
        if($status == 1){
            return 'Active';
        } elseif ($status == 2){
            return 'Graduated';
        } elseif ($status == 0){
            return 'Non Active';
        }
    }
}

$paket = new Paket();
