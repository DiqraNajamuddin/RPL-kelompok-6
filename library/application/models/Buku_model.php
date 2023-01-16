<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    public function getALLBuku()
    {
        return $this->db->get('Buku')->result_array();

        // $this->db->select('*');
        // $this->db->from('Buku');
        // $this->db->order_by('id');

        // return $this->db->get();

        // return $this->db->get($this->_table)->result_array();
    }

    public function tambahDataBuku()
    {
        $data = [
            'id' => $this->input->post('id', true),
            'judul' => $this->input->post('judul', true),
            'pengarang' => $this->input->post('pengarang', true),
            'penerbit' => $this->input->post('penerbit', true),
            'rak' => $this->input->post('rak', true)
        ];
        $this->db->insert('Buku', $data);

        // return $this->db->insert('Buku', $data);
    }

    public function hapusDataBuku($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('Buku', ['id' => $id]);
    }

    public function getBukuById($id)
    {
        return $this->db->get_where('Buku', ['id' => $id])->row_array();
    }
    public function editDataBuku()
    {
        $data = [
            'id' => $this->input->post('id', true),
            'judul' => $this->input->post('judul', true),
            'pengarang' => $this->input->post('pengarang', true),
            'penerbit' => $this->input->post('penerbit', true),
            'rak' => $this->input->post('rak', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('Buku', $data);
    }
}
