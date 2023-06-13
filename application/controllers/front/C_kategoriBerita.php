<?php 
class C_kategoriBerita extends CI_Controller
{
    public function index($id_kategori)
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        /* $data['judul'] = $this->M_admin->GetData()->result_array(); */
        $data['beritaBykategori'] = $this->M_admin->GetAllDataByKategori($id_kategori);
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['beritalist'] = $this->M_admin->GetData()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/kategoriBerita',$data);
        $this->load->view('front/template/footer');
    }



}
?>