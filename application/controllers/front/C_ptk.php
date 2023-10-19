<?php
class C_ptk extends CI_Controller
{
    function index()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $data['tendik'] = $this->M_admin->GetDataPtk()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/pendidik', $data);
        $this->load->view('front/template/footer');
    }
}

?>