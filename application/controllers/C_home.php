<?php
class C_home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        //kategori berita informasi
        $data['informasi'] = $this->M_admin->GetDataInformasi()->result_array();
        //kategori berita video
        $data['video'] = $this->M_admin->GetDataVideo()->result_array();
        //kategori berita panduan
        $data['panduan'] = $this->M_admin->GetDataPanduan()->result_array();
        //list link
        $data['link'] = $this->M_admin->GetDataTautan()->result_array();
        //Banner Ucapan
        $data['galeri'] = $this->M_admin->getDataBanner();
        //Banner Home
        $data['banner'] = $this->M_admin->getDataBannerHome();


        //pagination
        //$this->load->library('pagination');
        //config
        $config['base_url'] = 'http://localhost/mtssi3/C_home/index';
        $config['total_rows'] = $this->M_admin->hitungAllData();
        $config['per_page'] = 7;

        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['berita'] = $this->M_admin->GetDataPage($config['per_page'], $data['start'])->result_array();

        //slider
        $data['slider'] = $this->M_admin->getDataSlider1();
        $data['slider_berita'] = $this->M_admin->getDataSlider2();

        $this->load->view('front/template/header', $data);
        $this->load->view('front/home', $data);
        $this->load->view('front/template/footer');
    }
    public function detailBerita($id_berita)
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->getBeritaById($id_berita);
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/beritaDetail', $data);
        $this->load->view('front/template/footer');
    }

    //data per kategori






}
?>