<?php
class C_profilSekolah extends CI_Controller
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
        $data['title'] = "Berita";
        $data['berita'] = $this->M_admin->GetData()->result_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_berita', $data);
        $this->load->view('admin/templates/footer');
    }
    public function tambahKategoriBerita()
    {
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Berita";
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_berita', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $kategori = $this->input->post('kategori');
            $keterangan = $this->input->post('keterangan');
            $data = array(
                'kategori' => $kategori,
                'keterangan' => $keterangan
            );
            $this->M_admin->insert_data($data, 'tb_kategori_berita');
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_berita/index');
        }
    }
    public function tambahData()
    {
        $data['title'] = "Form Tambah data";
        $data['kategori'] = $this->M_admin->GetDataKategori()->result_array();
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'penulis', 'required');
        $this->form_validation->set_rules('id_kategori', 'kategori', 'required');
        $this->form_validation->set_rules('isi_berita', 'isi_berita', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_beritaCreate', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $judul = $this->input->post('judul');
            $isi_berita = $this->input->post('isi_berita');
            $penulis = $this->input->post('penulis');
            $tanggal = $this->input->post('tanggal');
            $id_kategori = $this->input->post('id_kategori');
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
                'isi_berita' => $isi_berita,
                'penulis' => $penulis,
                'tanggal' => $tanggal,
                'id_kategori' => $id_kategori,
                'gambar' => $gambar
            );
            $this->M_admin->insert_data($data, 'tb_berita');
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_berita/index');
        }

    }
    public function detailBerita($id_berita)
    {
        $data['title'] = "Detail Berita";
        $data['berita'] = $this->M_admin->getBeritaById($id_berita);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_beritaDetail', $data);
        $this->load->view('admin/templates/footer');
    }
    public function updateBerita($id_berita)
    {
        $data['title'] = "Form Edit Berita";
        $data['berita'] = $this->M_admin->getBeritaById($id_berita);
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'penulis', 'required');
        $this->form_validation->set_rules('isi_berita', 'isi_berita', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_beritaUpdate', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $id_berita = $this->input->post('id_berita');
            $judul = $this->input->post('judul');
            $isi_berita = $this->input->post('isi_berita');
            $id_kategori = $this->input->post('id_kategori');
            $penulis = $this->input->post('penulis');
            $tanggal = $this->input->post('tanggal');

            $data = array(
                'judul' => $judul,
                'isi_berita' => $isi_berita,
                'id_kategori' => $id_kategori,
                'penulis' => $penulis,
                'tanggal' => $tanggal,
            );
            $where = array(
                'id_berita' => $id_berita
            );
            $this->M_admin->updateBerita($data, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_berita/index');
        }
    }
    public function deleteBerita($id_berita)
    {
        $this->M_admin->deleteBerita($id_berita);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus!!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/C_berita/index');
    }




}
?>