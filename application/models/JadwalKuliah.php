<?php

class JadwalKuliah extends CI_Model {
    public function getJadwalKuliahs() {
        $this->db->select('
            tb_jadwal_kuliah.id,
            tb_jadwal_kuliah.jam,
            tb_jadwal_kuliah.hari,
            tb_jadwal_kuliah.kode,
            tb_mata_kuliah.mata_kuliah,
            tb_mata_kuliah.sks
        ');

        $this->db->from('tb_jadwal_kuliah');
        $this->db->join(
            'tb_mata_kuliah',
            'tb_mata_kuliah.kode = tb_jadwal_kuliah.kode',
            'inner'
        );

        return $this->db->get()->result();
    }
}