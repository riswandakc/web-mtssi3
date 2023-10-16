<?php
class C_link extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') != TRUE) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                ANDA BELUM LOGIN!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/C_login');
        }
        ;
    }
    public function index()
    {
        $data['title'] = "LINK / Tautan";
        $data['link'] = $this->M_admin->GetDataTautanAll()->result_array();
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_tautan', $data);
        $this->load->view('admin/templates/footer');
    }
    public function tambahTautan()
    {
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
        $this->form_validation->set_rules('judul_link', 'judul_link', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "LINK / Tautan";
            $data['link'] = $this->M_admin->GetDataTautan()->result_array();
            $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_tautan', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $id_kategori = $this->input->post('id_kategori');
            $judul_link = $this->input->post('judul_link');
            $deskripsi = $this->input->post('deskripsi');
            $link = $this->input->post('link');
            $data = array(
                'id_kategori' => $id_kategori,
                'judul_link' => $judul_link,
                'deskripsi' => $deskripsi,
                'link' => $link
            );
            $this->M_admin->insert_data($data, 'tb_link');
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_link/index');
        }
    }

    public function UpdateLink($id_link)
    {
        $data['title'] = "Form Edit TauTan";
        $data['link'] = $this->M_admin->getTautanById($id_link);
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
        $this->form_validation->set_rules('judul_link', 'judul_link', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_tautanUpdate', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $id_link = $this->input->post('id_link');
            $id_kategori = $this->input->post('id_kategori');
            $judul_link = $this->input->post('judul_link');
            $deskripsi = $this->input->post('deskripsi');
            $link = $this->input->post('link');

            $data = array(
                'id_kategori' => $id_kategori,
                'judul_link' => $judul_link,
                'deskripsi' => $deskripsi,
                'link' => $link
            );
            $where = array(
                'id_link' => $id_link
            );
            $this->M_admin->updateTautan($data, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Diubah!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_link/index');
        }
    }

    public function DeleteLink($id_link)
    {
        $this->M_admin->deleteTautan($id_link);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus!!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/C_link/index');
    }

}
?>