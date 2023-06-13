<?php 
class C_dashboard extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('username') != TRUE){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                ANDA BELUM LOGIN!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/C_login');
        };
    }
    public function index()
    {
        $data['title'] = "Dashboard Admin";
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_dashboard',$data);
        $this->load->view('admin/templates/footer');
    }





}
?>