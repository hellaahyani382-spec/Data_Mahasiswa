<?php

class JadwalKuliahController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('JadwalKuliah');
    }

    public function getJadwalKuliahs() {
        $data['jadwalkuliahs'] = $this->JadwalKuliah->getJadwalKuliahs();
        $this->load->view('JadwalKuliahView', $data);
    }
}