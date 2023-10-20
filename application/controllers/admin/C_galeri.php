<?php
class C_galeri extends CI_controller
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
        $data['title'] = "Galeri";
        $data['galeri'] = $this->M_admin->getDataGaleri();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_galeri', $data);
        $this->load->view('admin/templates/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Galeri";
        $data['galeri'] = $this->M_admin->getDataGaleri();
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('kategori', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_galeri', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $judul = $this->input->post('judul');
            $status = $this->input->post('status');
            $kategori = $this->input->post('kategori');
            $deskripsi = $this->input->post('deskripsi');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/photo';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "gambar gagal diupload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'status' => $status,
                'kategori' => $kategori,
                'gambar' => $gambar
            );
            $this->M_admin->insertDataGaleri($data, 'tb_galeri');
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_galeri/index');
        }
    }
    public function updateGaleri($id_galeri)
    {
        $data['title'] = "Update Data Galeri";
        $data['galeri'] = $this->M_admin->getDataGaleriById($id_galeri);
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('kategori', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_galeriUpdate', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $judul = $this->input->post('judul');
            $status = $this->input->post('status');
            $kategori = $this->input->post('kategori');
            $deskripsi = $this->input->post('deskripsi');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/photo';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "gambar gagal diupload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'status' => $status,
                'kategori' => $kategori,
                'gambar' => $gambar
            );
            $where = array(
                'id_galeri' => $id_galeri
            );
            $this->M_admin->updateDataGaleri($data, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_galeri/index');
        }
    }
    public function deleteGaleri($id_galeri)
    {
        $this->M_admin->deleteDataGaleri($id_galeri);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus!!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/C_galeri/index');
    }
}

?>