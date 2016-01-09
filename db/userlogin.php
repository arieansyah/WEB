<?php
include 'koneksi.php';

class Userlogin extends DBConnect{
    function loginAuth($username, $password){
        $stmt = $this->db->prepare('SELECT * FROM userlogin WHERE username=? and password=?');
        $stmt->execute(array($username, $password));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}

$user = new Userlogin();
