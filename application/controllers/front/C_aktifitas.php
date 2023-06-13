<?php 
class C_aktifitas extends CI_Controller
{
    public function index()
    {       
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['title2'] = "Dokumentasi Aktifitas Siswa";
        $data['galeri'] = $this->M_admin->getDataGaleri();
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['beritalist'] = $this->M_admin->GetData()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/Aktifitas',$data);
        $this->load->view('front/template/footer');
    }
}
?>