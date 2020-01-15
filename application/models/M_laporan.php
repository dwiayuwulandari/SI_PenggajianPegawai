<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    function laporan_mingguan(){
        $query = $this->db->query("SELECT tambah_proyek.nama_proyek, gaji_karyawan.minggu_ke as minggu, gaji_karyawan.bulan_terima, gaji_karyawan.tanggal_terima , SUM(total_gaji) as total FROM `gaji_karyawan` JOIN data_karyawan ON data_karyawan.id_karyawan=gaji_karyawan.id_karyawan JOIN tambah_proyek ON tambah_proyek.id_proyek=data_karyawan.id_proyek GROUP BY gaji_karyawan.minggu_ke, gaji_karyawan.bulan_terima, tambah_proyek.id_proyek");
        return $query->result();
    }
    function laporan_bulanan(){
        $query = $this->db->query("SELECT tambah_proyek.nama_proyek, gaji_karyawan.minggu_ke as minggu, gaji_karyawan.bulan_terima, gaji_karyawan.tanggal_terima , SUM(total_gaji) as total FROM `gaji_karyawan` JOIN data_karyawan ON data_karyawan.id_karyawan=gaji_karyawan.id_karyawan JOIN tambah_proyek ON tambah_proyek.id_proyek=data_karyawan.id_proyek GROUP BY gaji_karyawan.bulan_terima, tambah_proyek.id_proyek");
        return $query->result();
    }
}