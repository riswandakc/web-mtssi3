<?php 
class C_login extends CI_controller 
{
    public function index()
    {
        $data['title'] = "Login";
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/v_login');

    }
    public function login(){
        $data['title'] = "Login";
        $this->form_validation->set_rules('username','username','required',['required' => 'username wajib diisi','valid_email'=>'alamat email tidak valid']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password wajib diisi']);

        if($this->form_validation->run()==FALSE){
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/v_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cek = $this->M_admin->cek_login($username,$password); 
            if($cek == FALSE){ 
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password anda salah!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/C_login');
            } else{
                $this->session->set_userdata('username',$cek->username);
                redirect('admin/C_dashboard');
            }
        }
            
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('front/C_home');
    }
}
?>