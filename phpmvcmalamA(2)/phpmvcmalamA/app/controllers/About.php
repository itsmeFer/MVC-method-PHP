<?php

class About extends Controller{
    public function index($nama = 'Bayu', $pekerjaan = 'Programmer'){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About'
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $this->view('templates/header');
       $this->view('about/page');
       $this->view('templates/footer');
    }
}

?>