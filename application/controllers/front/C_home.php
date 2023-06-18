<?php 
class C_home extends CI_Controller {
    public function index()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        //kategori berita informasi
        $data['informasi'] = $this->M_admin->GetDataInformasi()->result_array();
        //kategori berita video
        $data['video'] = $this->M_admin->GetDataVideo()->result_array();
        //kategori berita video
        $data['panduan'] = $this->M_admin->GetDataPanduan()->result_array();
        /* $data['berita'] = $this->M_admin->GetData()->result_array(); */

        //pagination
        //$this->load->library('pagination');
        //config
        $config['base_url'] = 'http://localhost/mtssi3/front/C_home/index';
        $config['total_rows'] = $this->M_admin->hitungAllData();
        $config['per_page'] = 6;

        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(4);
        $data['berita'] = $this->M_admin->GetDataPage($config['per_page'],$data['start'])->result_array();

        //slider
        $data['slider'] = $this->M_admin->getDataSlider1();
        $data['slider_berita'] = $this->M_admin->getDataSlider2();

        $this->load->view('front/template/header',$data);
        $this->load->view('front/home',$data);
        $this->load->view('front/template/footer');
    }
    public function detailBerita($id_berita)
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->getBeritaById($id_berita);
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $this->load->view('front/template/header',$data);
        $this->load->view('front/beritaDetail',$data);
        $this->load->view('front/template/footer');
    }

    //data per kategori
    





}
 ?>