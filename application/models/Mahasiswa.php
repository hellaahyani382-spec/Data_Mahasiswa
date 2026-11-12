<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Mengambil semua data mahasiswa
    public function getMahasiswas()
    {
        return $this->db->get('tb_mahasiswa')->result();
    }

    // Menyimpan data mahasiswa
    public function simpan($data)
    {
        return $this->db->insert('tb_mahasiswa', $data);
    }

    // Mengambil satu data mahasiswa berdasarkan NIM
    public function getMahasiswaByNim($nim)
    {
        return $this->db->get_where(
            'tb_mahasiswa',
            array('nim' => $nim)
        )->row();
    }

    // Mengubah data mahasiswa
    public function update($nim_lama, $data)
    {
        $this->db->where('nim', $nim_lama);
        return $this->db->update('tb_mahasiswa', $data);
    }

    // Menghapus data mahasiswa
    public function hapus($nim)
    {
        $this->db->where('nim', $nim);
        return $this->db->delete('tb_mahasiswa');
    }
}
