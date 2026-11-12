<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Mahasiswa');
        $this->load->helper('url');
        $this->load->database();
    }

    // Halaman utama
    public function index()
    {
        $data['mahasiswas'] = $this->Mahasiswa->getMahasiswas();
        $data['edit_data'] = null;

        $this->load->view('MahasiswaView', $data);
    }

    // Menyimpan data baru
    public function simpan()
    {
        $data = array(
            'nim'   => $this->input->post('nim', TRUE),
            'nama'  => $this->input->post('nama', TRUE),
            'kelas' => $this->input->post('kelas', TRUE)
        );

        if (
            empty($data['nim']) ||
            empty($data['nama']) ||
            empty($data['kelas'])
        ) {
            redirect('MahasiswaController');
            return;
        }

        $this->Mahasiswa->simpan($data);

        redirect('MahasiswaController');
    }

    // Membuka data untuk diedit
    public function edit($nim)
    {
        $data['mahasiswas'] = $this->Mahasiswa->getMahasiswas();
        $data['edit_data'] = $this->Mahasiswa->getMahasiswaByNim($nim);

        if (!$data['edit_data']) {
            redirect('MahasiswaController');
            return;
        }

        $this->load->view('MahasiswaView', $data);
    }

    // Menyimpan perubahan edit
    public function update()
    {
        $nim_lama = $this->input->post('nim_lama', TRUE);

        $data = array(
            'nim'   => $this->input->post('nim', TRUE),
            'nama'  => $this->input->post('nama', TRUE),
            'kelas' => $this->input->post('kelas', TRUE)
        );

        if (
            empty($nim_lama) ||
            empty($data['nim']) ||
            empty($data['nama']) ||
            empty($data['kelas'])
        ) {
            redirect('MahasiswaController');
            return;
        }

        $this->Mahasiswa->update($nim_lama, $data);

        redirect('MahasiswaController');
    }

    // Menghapus data
    public function hapus($nim)
    {
        $this->Mahasiswa->hapus($nim);

        redirect('MahasiswaController');
    }
}