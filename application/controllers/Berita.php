<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use App\Models\berita_model;
class Berita extends CI_Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Jakarta");
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') == null) {
        }
    }

    
    public function c_berita()
    {
        $data['user'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get('data_berita')->result_array();
        $data['title'] =  "Berita";

            $this->load->view('partials/p_header', $data);
            $this->load->view('partials/p_sidebar');
            $this->load->view('partials/p_topbar');
            $this->load->view('crud/c_berita', $data);
            $this->load->view('partials/p_footer');
            
    }

    public function tambah_berita()
    {
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Di Tambahkan.</div>');
                redirect('berita/c_berita');
        }
        else
        {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
                $data = [
                    'judul' => $this->input->post('judul'),    
                    'isi' => $this->input->post('isi'),    
                    'tanggal' => $this->input->post('tanggal'),
                    'gambar' => $gambar
        ];
        $this->db->insert('data_berita', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Tambahkan.</div>');
        redirect('berita/c_berita');
    }
}

    public function hapus_berita($id_berita)
    {

        $id = $id_berita;

        $this->db->delete('data_berita', array('id_berita' => $id));
        
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil Di Hapus.</div>');
        redirect('berita/c_berita');
    }

    public function edit_berita() 
    {
        $id         = $this->input->post('idx');
        $gambar     = $this->input->post('gambar');
        $tanggal    = $this->input->post('tanggal');
        $judul      = $this->input->post('judul');
        $isi        = $this->input->post('isi');

        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile2'))
        {
        $this->db->set('judul', $judul);
        $this->db->set('isi', $isi);
        $this->db->set('tanggal', $tanggal);
        $this->db->set('gambar', $gambar);
        $this->db->where('id_berita', $id);
        $this->db->update('data_berita');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Edit.</div>');
        redirect('berita/c_berita');
        } else {
                    $data_upload = $this->upload->data();
                    $gambar =  $data_upload['file_name'];
                    $this->db->set('judul', $judul);
                    $this->db->set('isi', $isi);
                    $this->db->set('tanggal', $tanggal);
                    $this->db->set('gambar', $gambar);
                    $this->db->where('id_berita', $id);
                    $this->db->update('data_berita');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Edit.</div>');
                    redirect('berita/c_berita');
        }
        
    }
}
