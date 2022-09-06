<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('berita_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function berita()
    {
        $data['data'] = $this->db->get('data_berita')->result_array();

        $this->load->view('berita', $data);
    }

    public function layanan()
    {
        $this->load->view('layanan');
    }

    public function kontak()
    {
        $this->load->view('kontak');
    }

    public function visimisi()
    {
        $this->load->view('visimisi');
    }

    public function latarbelakang()
    {
        $this->load->view('latarbelakang');
    }

    public function struktur()
    {
        $this->load->view('struktur');
    }

    public function biodata()
    {
        $this->load->view('biodata');
    }

    public function gallery()
    {
        $this->load->view('gallery');
    }
    
    public function artikel()
    {
        $data['data'] = $this->db->get('data_berita')->result_array();
        
        $this->load->view('artikel', $data);
    }

    public function a_forgotpassword()
    {
            $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Forgot Password';
                $this->load->view('admin/a_header', $data);
                $this->load->view('admin/a_forgotpassword');
                $this->load->view('admin/a_footer');
            } else {
                $email = $this->input->post('email');
                $user = $this->db->get_where('nama', ['email' => $email])->row_array();

                if($user) {
                    $token = base64_encode(random_bytes(32));
                    $user_token = [
                        'email' => $email,
                        'token' => $token,
                        'date_created' =>time()
                    ];

                    $this->db->insert('user_token', $user_token);
                    /*$this->_sendEmail($token, 'forgot');*/

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Please check your email to reset your password</div>');
            redirect('home/a_forgotpassword');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered</div>');
            redirect('home/a_forgotpassword');
                }
            }
        
    }

    public function a_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] =  "Login Admin";
            $this->load->view('admin/a_header', $data);
            $this->load->view('admin/a_login');
            $this->load->view('admin/a_footer');
        } else {
            // sukses validasinya
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('data_admin', ['email' => $email])->row_array();
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password salah!</div>');
                redirect('home/a_login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email tidak terdaftar</div>');
            redirect('home/a_login');
        }
    }

    public function a_registrasi()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[data_admin.email]', [
            'is_unique' => 'email sudah di registrasi!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'password not match!', 
            'min_length' => 'password too sort!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false) {
            $data['title'] =  "Registrasi Admin";
            $this->load->view('admin/a_header', $data);
            $this->load->view('admin/a_registrasi');
            $this->load->view('admin/a_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('data_admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            selamat!,  Anda berhasil membuat akun</div>');
            redirect('home/a_login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Anda telah berhasil keluar</div>');
            redirect('home/a_login');
    }

}
