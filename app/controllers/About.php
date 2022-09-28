<?php 

class About { 
  public function index($nama = 'Saddad', $jenis = 'Manusia') {
    echo "Halo semuanya, nama saya $nama, saya adalah seorang $jenis";
  }
  
  public function page() {
    echo 'About/index';
  }
}