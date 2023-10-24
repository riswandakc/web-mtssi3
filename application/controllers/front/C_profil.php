<?php
class C_profil extends CI_controller
{
    public function Sambutan()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->GetData()->result_array();
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $data['profilMts'] = $this->M_admin->GetDataProfilMts()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/Sambutan', $data);
        $this->load->view('front/template/footer');
    }

    public function VisiMisi()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->GetData()->result_array();
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $data['profilMts'] = $this->M_admin->GetDataProfilMts()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/visiMisi', $data);
        $this->load->view('front/template/footer');
    }
    public function StrukturMD()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->GetData()->result_array();
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $data['profilMts'] = $this->M_admin->GetDataProfilMts()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/StrukturMD', $data);
        $this->load->view('front/template/footer');
    }
    public function StrukturLembaga()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->GetData()->result_array();
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $data['profilMts'] = $this->M_admin->GetDataProfilMts()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/StrukturLembaga', $data);
        $this->load->view('front/template/footer');
    }
    public function LatarBelakang()
    {
        $data['title'] = "MTs. Syarikat Islam 3";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $data['berita'] = $this->M_admin->GetData()->result_array();
        $data['beritalist'] = $this->M_admin->GetDataLimit()->result_array();
        $data['profilMts'] = $this->M_admin->GetDataProfilMts()->result_array();
        $this->load->view('front/template/header', $data);
        $this->load->view('front/LatarBelakang', $data);
        $this->load->view('front/template/footer');
    }
}
?>