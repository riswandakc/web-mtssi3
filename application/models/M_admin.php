<?php
class M_admin extends CI_Model
{
    /* ================================================= start model berita ========================================= */
    public function GetData()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_kategori_berita', 'tb_berita.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->order_by('tb_berita.id_berita', 'DESC');
        return $this->db->get();
    }
    public function GetDataLimit()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_kategori_berita', 'tb_berita.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->order_by('tb_berita.id_berita', 'DESC');
        $this->db->limit(4);
        return $this->db->get();
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function getBeritaById($id_berita)
    {
        $this->db->SELECT('tb_berita.*, tb_kategori_berita.id_kategori as id_kategori, tb_kategori_berita.kategori as kategori_berita');
        $this->db->from('tb_berita');
        $this->db->join('tb_kategori_berita', 'tb_berita.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->where('tb_berita.id_berita', $id_berita);
        $this->db->order_by('tb_berita.id_berita', 'DESC');
        return $this->db->get()->row_array();
        /* return $this->db->query("SELECT * FROM tb_berita WHERE id_berita = $id_berita")->row_array(); */
    }
    public function updateBerita($data, $where)
    {
        $this->db->update('tb_berita', $data, $where);
    }
    public function deleteBerita($id_berita)
    {
        return $this->db->query("DELETE FROM tb_berita WHERE id_berita = $id_berita");
    }
    public function hitungAllData()
    {
        return $this->db->query("SELECT * FROM tb_berita")->num_rows();
    }
    /* ================================================= end model berita ======================================== */

    /* =============================================== start model kategori ====================================== */
    public function GetDataKategori()
    {
        return $this->db->query("SELECT * FROM tb_kategori_berita ORDER BY kategori");
    }

    /* =============================================== end model kategori ======================================== */

    /* ======================================== start model berita by kategori =================================== */
    public function GetDataInformasi()
    {
        return $this->db->query("SELECT * FROM tb_berita WHERE id_kategori ='3' ORDER BY kategori DESC");
    }
    public function GetDataVideo()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_link');
        $this->db->join('tb_kategori_berita', 'tb_link.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->where('tb_link.id_kategori = 22');
        $this->db->order_by('tb_link.id_link', 'DESC');
        return $this->db->get();
    }
    public function GetDataPanduan()
    {
        return $this->db->query("SELECT * FROM tb_berita WHERE id_kategori ='17' ORDER BY kategori DESC");
    }
    public function GetDataMpsii()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->where('id_kategori = 15');
        $this->db->order_by('id_kategori', 'DESC');
        return $this->db->get()->result();
    }
    public function GetDataSepmi()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->where('id_kategori = 25');
        $this->db->order_by('id_kategori', 'DESC');
        return $this->db->get()->result();
    }
    /* ========================================  end model berita by kategori ==================================== */

    /* ========================================= start get all data by kategori ================================== */
    public function GetAllDataByKategori($id_kategori)
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_kategori_berita', 'tb_berita.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->where('tb_berita.id_kategori', $id_kategori);
        $this->db->order_by('tb_berita.id_berita', 'DESC');
        return $this->db->get()->result();
    }
    /* ========================================= end get all data by kategori ==================================== */

    /* ========================================== Start model Link / Tautan ====================================== */
    public function GetDataTautan()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_link');
        $this->db->join('tb_kategori_berita', 'tb_link.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->where('tb_link.id_kategori = 24');
        $this->db->order_by('tb_link.id_link', 'DESC');
        return $this->db->get();
    }

    public function GetDataTautanAll()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_link');
        $this->db->join('tb_kategori_berita', 'tb_link.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->order_by('tb_link.id_link', 'DESC');
        return $this->db->get();
    }

    public function getTautanById($id_link)
    {
        $this->db->SELECT('*');
        $this->db->from('tb_link');
        $this->db->join('tb_kategori_berita', 'tb_link.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->where('tb_link.id_link', $id_link);
        $this->db->order_by('tb_link.id_link', 'DESC');
        return $this->db->get()->row_array();
        /* return $this->db->query("SELECT * FROM tb_berita WHERE id_berita = $id_berita")->row_array(); */
    }

    public function deleteTautan($id_link)
    {
        return $this->db->query("DELETE FROM tb_link WHERE id_link = $id_link");
    }

    public function updateTautan($data, $where)
    {
        $this->db->update('tb_link', $data, $where);
    }
    /* ============================================= end model Link / Tautan ===================================== */

    /* =========================================== start show data pagination ==================================== */
    public function GetDataPage($limit, $start)
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->join('tb_kategori_berita', 'tb_berita.id_kategori = tb_kategori_berita.id_kategori', 'left');
        $this->db->limit($limit, $start);
        $this->db->order_by('tb_berita.id_berita', 'DESC');
        $query = $this->db->get();
        return $query;

        /*  $this->db->SELECT('*');
         $this->db->from('tb_berita');
         $this->db->limit($limit,$start);
         $this->db->order_by('id_berita','DESC');
         $query = $this->db->get();
         return $query; */
    }
    /* ============================================ end show data pagination ===================================== */

    /* ============================================== start model galeri ========================================= */
    public function getDataGaleri()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->where('kategori = 1');
        return $this->db->get()->result();
    }
    public function getDataBannerAdmin()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->where('kategori = 2');
        return $this->db->get()->result();
    }
    public function getDataBanner()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->where('kategori = 2');
        $this->db->limit(1);
        return $this->db->get()->result();
    }
    public function getDataGaleriById($id_galeri)
    {
        $this->db->SELECT('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row_array();
    }
    public function insertDataGaleri($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function updateDataGaleri($data, $where)
    {
        $this->db->update('tb_galeri', $data, $where);
    }
    public function deleteDataGaleri($id_galeri)
    {
        return $this->db->query("DELETE FROM tb_galeri WHERE id_galeri = $id_galeri");
    }
    /* ================================================= end model galeri ======================================== */

    /* ================================================ start model login ======================================== */
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    /* ================================================= end model login ========================================= */

    /* ================================================= Start slider ============================================ */
    public function getDataSlider1()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->where('kategori = 1');
        $this->db->limit(4);
        return $this->db->get()->result();
    }
    public function getDataSlider2()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(4);
        return $this->db->get()->result();
    }
    /* ================================================= end slider ============================================ */

    /* ================================================= Start PTK ============================================ */
    public function getDataPtk()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_pendidik');
        $this->db->order_by('id_pendidik', 'DESC');
        return $this->db->get();
    }

    public function deletePendidik($id_pendidik)
    {
        return $this->db->query("DELETE FROM tb_pendidik WHERE id_pendidik = $id_pendidik");
    }
    /* ================================================= End PTK ============================================ */




}
?>