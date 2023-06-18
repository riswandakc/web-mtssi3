<?php 
class C_detailBerita extends CI_Controller 
{
    public function index()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->GetData()->result_array();
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $this->load->view('front/template/header',$data);
        $this->load->view('front/berita_detail',$data);
        $this->load->view('front/template/footer');
    }




}
 ?>