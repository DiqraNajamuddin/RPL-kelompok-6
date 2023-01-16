<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Dashboard";
        $Buku = $this->db->query("SELECT * FROM Buku");
        // $Gaji = $this->db->query("SELECT * FROM Gaji");
        // $Cuti = $this->db->query("SELECT * FROM Cuti");
        // $Kehadiran = $this->db->query("SELECT * FROM kehadiran");
        $data['Buku'] = $Buku->num_rows();
        // $data['Gaji'] = $Gaji->num_rows();
        // $data['Cuti'] = $Cuti->num_rows();
        // $data['kehadiran'] = $Kehadiran->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    // public function inputabsensi()
    // {
    //     $data['judul'] = ' from input Data';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('admin/formInputAbsensi', $data);
    //     $this->load->view('templates/footer');
    // }
}
