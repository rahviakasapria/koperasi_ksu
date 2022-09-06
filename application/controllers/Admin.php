<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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
    
    public function index()
    {
        $data['user'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();

        $title['title'] =  "Dashboard Admin";
        $this->load->view('crud/c_header', $title);
        $this->load->view('crud/c_dashboard', $data);
        $this->load->view('crud/c_footer');
    }

    public function a_settings()
    {
        $data['user'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] =  "Settings Admin";

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');


            if($this->form_validation->run() == false) {
                $this->load->view('partials/p_header', $data);
                $this->load->view('partials/p_sidebar');
                $this->load->view('partials/p_topbar');
                $this->load->view('admin/a_settings', $data);
                $this->load->view('partials/p_footer');
            } else {
                $current_password = $this->input->post('current_password');
                $new_password = $this->input->post('new_passowrd1');
                if(!password_verify($current_password, $data['user']['password'])) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password salah!</div>');
                    redirect('admin/a_settings');
                } else {
                    if($current_password == $new_password) {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password tidak boleh sama dari sebelumnya!</div>');
                    redirect('admin/a_settings');
                    } else {
                        // password sudah benar
                        $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                        
                        $this->db->set('password', $password_hash);
                        $this->db->where('email', $this->session->userdata('email'));
                        $this->db->update('user');

                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password berhasil diganti!</div>');
                    redirect('admin/a_settings');
                    }
                }
            }
            
    }

    public function a_myprofile()
    {
        $data['user'] = $this->db->get_where('data_admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] =  "My Profile";
            $this->load->view('partials/p_header', $data);
            $this->load->view('partials/p_sidebar');
            $this->load->view('partials/p_topbar');
            $this->load->view('admin/a_myprofile');
            $this->load->view('partials/p_footer');
    }
}
