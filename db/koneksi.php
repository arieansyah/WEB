<?php

#echo "koneksi database berhasil";

class DBConnect{

	protected $db;

	function __construct(){

		try {
		  $this->db = new PDO("mysql:dbname=test;host=localhost","root","root");
		  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
		  echo $e->getMessage();
		}

	}
}
