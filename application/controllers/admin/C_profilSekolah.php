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
        $data['title'] = "Profil";
        $data['profil'] = $this->M_admin->GetDataProfil()->result_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_profil', $data);
        $this->load->view('admin/templates/footer');
    }
    public function tambahData()
    {
        $data['title'] = "Form Tambah data";
        $this->form_validation->set_rules('profil', 'profil', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_profilCreate', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $profil = $this->input->post('profil');
            $sejarah = $this->input->post('sejarah');
            $sambutan = $this->input->post('sambutan');
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');

            /* dibawah merupakan cara upload multiple files */
            $config['upload_path'] = './assets/photo/profil';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            //gambar struktur 1
            if (!empty($_FILES['struktur1'])) {
                $this->upload->do_upload('struktur1');
                $struktur1 = $this->upload->data('file_name');
            }
            //gambar struktur 2
            if (!empty($_FILES['struktur2'])) {
                $this->upload->do_upload('struktur2');
                $struktur2 = $this->upload->data('file_name');
            }
            if (!empty($_FILES['photo'])) {
                $this->upload->do_upload('photo');
                $photo = $this->upload->data('file_name');
            }
            /* end of cara upload multiple files */

            $data = array(
                'profil' => $profil,
                'sejarah' => $sejarah,
                'sambutan' => $sambutan,
                'visi' => $visi,
                'misi' => $misi,
                'struktur1' => $struktur1,
                'struktur2' => $struktur2,
                'photo' => $photo
            );
            $this->M_admin->insert_data($data, 'tb_profil_sekolah');
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_profilSekolah/index');
        }

    }
    public function update($id_profil)
    {
        $data['title'] = "Form Edit Berita";
        $data['profil'] = $this->M_admin->getProfilById($id_profil);
        $this->form_validation->set_rules('profil', 'profil', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_profilUpdate', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $id_profil = $this->input->post('id_profil');
            $profil = $this->input->post('profil');
            $sejarah = $this->input->post('sejarah');
            $sambutan = $this->input->post('sambutan');
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');

            /* dibawah merupakan cara upload multiple files */
            $config['upload_path'] = './assets/photo/profil';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            //gambar struktur 1
            if (!empty($_FILES['struktur1'])) {
                $this->upload->do_upload('struktur1');
                $struktur1 = $this->upload->data('file_name');
            }
            //gambar struktur 2
            if (!empty($_FILES['struktur2'])) {
                $this->upload->do_upload('struktur2');
                $struktur2 = $this->upload->data('file_name');
            }
            if (!empty($_FILES['photo'])) {
                $this->upload->do_upload('photo');
                $photo = $this->upload->data('file_name');
            }
            /* end of cara upload multiple files */

            $data = array(
                'id_profil' => $id_profil,
                'profil' => $profil,
                'sejarah' => $sejarah,
                'sambutan' => $sambutan,
                'visi' => $visi,
                'misi' => $misi,
                'struktur1' => $struktur1,
                'struktur2' => $struktur2,
                'photo' => $photo
            );
            $where = array(
                'id_profil' => $id_profil
            );
            $this->M_admin->updateProfil($data, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan!!!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
            redirect('admin/C_profilSekolah/index');
        }
    }
    public function Delete($id_profil)
    {
        $this->M_admin->deleteProfil($id_profil);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus!!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/C_profilSekolah/index');
    }




}
?>