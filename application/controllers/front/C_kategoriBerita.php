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
        $this->load->view('front/kategoriBerita', $data);
        $this->load->view('front/template/footer');
    }

    public function mpsii()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        /* $data['judul'] = $this->M_admin->GetData()->result_array(); */
        /* $data['beritaBykategori'] = $this->M_admin->GetAllDataByKategori($id_kategori); */
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['beritalist'] = $this->M_admin->GetData()->result_array();
        $data['mpsii'] = $this->M_admin->GetDataMpsii();

        $this->load->view('front/template/header', $data);
        $this->load->view('front/kategoriBeritaMpsii', $data);
        $this->load->view('front/template/footer');
    }

    public function sepmi()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        /* $data['judul'] = $this->M_admin->GetData()->result_array(); */
        /* $data['beritaBykategori'] = $this->M_admin->GetAllDataByKategori($id_kategori); */
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['beritalist'] = $this->M_admin->GetData()->result_array();
        $data['sepmi'] = $this->M_admin->GetDataSepmi();

        $this->load->view('front/template/header', $data);
        $this->load->view('front/kategoriBeritaSepmi', $data);
        $this->load->view('front/template/footer');
    }



}
?>