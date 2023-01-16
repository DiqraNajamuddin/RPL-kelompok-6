<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'data';

        $data['Buku'] = $this->Buku_model->getALLBuku();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Buku';

        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('pengarang', 'pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
        $this->form_validation->set_rules('rak', 'rak', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('Buku/tambah',$data);
            $this->load->view('templates/footer');
        } else {

            $this->Buku_model->tambahDataBuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Buku');
        }
    }

    public function hapus($id)
    {
        $this->Buku_model->hapusDataBuku($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Buku');
    }

    public function edit($id)
    {
        $data['judul'] = 'edit Data Buku';
        $data['Buku'] = $this->Buku_model->getBukuById($id);

        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('pengarang', 'pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'penerbit', 'required');
        $this->form_validation->set_rules('rak', 'rak', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('Buku/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Buku_model->editDataBuku();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('Buku');
        }
    }
}
