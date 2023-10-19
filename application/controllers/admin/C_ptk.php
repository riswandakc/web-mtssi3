<?php
class C_ptk extends CI_Controller
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
        $data['title'] = "Data PTK";
        $data['tendik'] = $this->M_admin->GetDataPtk()->result_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_tendik', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambahData()
    {
        $data['title'] = "Form Tambah data";
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('posisi', 'posisi', 'required');
        $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_tendik', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $pendidikan = $this->input->post('pendidikan');
            $posisi = $this->input->post('posisi');
            $foto = $_FILES['foto']['name'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/photo/tendik';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "foto gagal diupload!";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $data = array(
                'nama' => $nama,
                'pendidikan' => $pendidikan,
                'posisi' => $posisi,
                'foto' => $foto
            );
            $this->M_admin->insert_data($data, 'tb_pendidik');
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_ptk/index');
        }
    }
    /* public function updateBerita($id_berita)
    {
        $data['title'] = "Form Edit Berita";
        $data['berita'] = $this->M_admin->getBeritaById($id_berita);
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'penulis', 'required');
        $this->form_validation->set_rules('isi_berita', 'isi_berita', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_beritaUpdate',$data);
            $this->load->view('admin/templates/footer');
        }else{
            $id_berita    = $this->input->post('id_berita');
            $judul        = $this->input->post('judul');
            $isi_berita   = $this->input->post('isi_berita');
            $id_kategori  = $this->input->post('id_kategori');
            $penulis      = $this->input->post('penulis');
            $tanggal      = $this->input->post('tanggal');

            $data = array(
                'judul'       =>$judul,
                'isi_berita'  =>$isi_berita,
                'id_kategori' =>$id_kategori,
                'penulis'     =>$penulis,
                'tanggal'     =>$tanggal,
            );
            $where = array (
                'id_berita' => $id_berita
            );
            $this->M_admin->updateBerita($data,$where);
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
    } */

    public function Delete($id_pendidik)
    {
        $this->M_admin->deletePendidik($id_pendidik);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus!!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/C_ptk/index');
    }
}
?>