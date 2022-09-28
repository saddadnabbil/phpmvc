<?php 

class About extends Controller { 
  public function index($nama = 'Saddad', $jenis = 'Manusia', $umur = '19') {
    $data['nama'] = $nama;
    $data['jenis'] = $jenis;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  
  public function page() {
    $data['judul'] = 'About';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}