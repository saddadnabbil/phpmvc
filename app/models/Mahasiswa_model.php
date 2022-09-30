<?php 

class Mahasiswa_model {
  // private $mhs = [
  //     [
  //       "nama" => "Saddad Nabbil",
  //       "nim" => "3337210001",
  //       "email" => "saddadnabbil@gmail.com",
  //       "jurusan" => "Teknik Informatika"
  //     ],
  //     [
  //       "nama" => "Adam Hidayat",
  //       "nim" => "3337210005",
  //       "email" => "adamhidayat@gmail.com",
  //       "jurusan" => "Konversi Energi"
  //     ],
  //     [
  //       "nama" => "Endang Sudrajat",
  //       "nim" => "333721010",
  //       "email" => "endangsudrajat@gmail.com",
  //       "jurusan" => "Teknik Mesin"
  //     ]
  // ];

  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
 
  public function getAllMahasiswa() 
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
}