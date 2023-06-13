<?php 
class M_admin extends CI_Model 
{
/* start model berita */
    public function GetData()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
	    $this->db->join('tb_kategori_berita','tb_berita.id_kategori = tb_kategori_berita.id_kategori','left');
        $this->db->order_by('tb_berita.id_berita','DESC');
        return $this->db->get();

        /* return $this->db->query("SELECT tb_berita.*, tb_kategori_berita.id_kategori as id_kategori, tb_kategori_berita.kategori as kategori_berita 
        FROM tb_berita 
        LEFT JOIN tb_kategori_berita ON tb_berita.id_kategori = tb_kategori_berita.id_kategori 
        ORDER BY id_berita 
        DESC"); */
    }
    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function getBeritaById($id_berita)
    {
        $this->db->SELECT('tb_berita.*, tb_kategori_berita.id_kategori as id_kategori, tb_kategori_berita.kategori as kategori_berita');
        $this->db->from('tb_berita');
	    $this->db->join('tb_kategori_berita','tb_berita.id_kategori = tb_kategori_berita.id_kategori','left');
        $this->db->where('tb_berita.id_berita', $id_berita);
        $this->db->order_by('tb_berita.id_berita','DESC');
        return $this->db->get()->row_array();
        /* return $this->db->query("SELECT * FROM tb_berita WHERE id_berita = $id_berita")->row_array(); */
    }
    public function updateBerita($data,$where)
    {
        $this->db->update('tb_berita',$data,$where);
    }
    public function deleteBerita($id_berita)
    {
        return $this->db->query("DELETE FROM tb_berita WHERE id_berita = $id_berita");
    }
    public function hitungAllData()
    {
        return $this->db->query("SELECT * FROM tb_berita")->num_rows();
    }
/* end model berita */
/* start model kategori */
    public function GetDataKategori()
    {
        return $this->db->query("SELECT * FROM tb_kategori_berita ORDER BY kategori");
    }
/* end model kategori */
/* start model berita by kategori */
    public function GetDataInformasi()
    {
        return $this->db->query("SELECT * FROM tb_berita WHERE kategori ='Informasi' ORDER BY kategori DESC");
    }
    public function GetDataVideo()
    {
        return $this->db->query("SELECT * FROM tb_berita WHERE kategori ='Video' ORDER BY kategori DESC");
    }
    public function GetDataPanduan()
    {
        return $this->db->query("SELECT * FROM tb_berita WHERE kategori ='Panduan' ORDER BY kategori DESC");
    }
/* end model berita by kategori */
/* start show data pagination */
    public function GetDataPage($limit, $start)
    {
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
	    $this->db->join('tb_kategori_berita','tb_berita.id_kategori = tb_kategori_berita.id_kategori','left');
        $this->db->limit($limit,$start);
        $this->db->order_by('tb_berita.id_berita','DESC');
        $query = $this->db->get();
        return $query;

       /*  $this->db->SELECT('*');
        $this->db->from('tb_berita');
        $this->db->limit($limit,$start);
        $this->db->order_by('id_berita','DESC');
        $query = $this->db->get();
        return $query; */
    }
/* end show data pagination */

//start get all data by kategori
    public function GetAllDataByKategori($id_kategori){
        $this->db->SELECT('*');
        $this->db->from('tb_berita');
	    $this->db->join('tb_kategori_berita','tb_berita.id_kategori = tb_kategori_berita.id_kategori','left');
        $this->db->where('tb_berita.id_kategori', $id_kategori);
        $this->db->order_by('tb_berita.id_berita','DESC');
        return $this->db->get()->result();

    }
//end get all data by kategori
//start model galeri
    public function getDataGaleri()
    {
        $this->db->SELECT('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri','DESC');
        return $this->db->get()->result();
    }
    public function getDataGaleriById($id_galeri)
    {
        $this->db->SELECT('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id_galeri','DESC');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row_array();
    }
    public function insertDataGaleri($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function updateDataGaleri($data,$where)
    {
        $this->db->update('tb_galeri',$data,$where);
    }
    public function deleteDataGaleri($id_galeri)
    {
        return $this->db->query("DELETE FROM tb_galeri WHERE id_galeri = $id_galeri");
    }
//end model galeri
//start model login
    public function cek_login()
    {
        $username       = set_value('username');
        $password       = set_value('password');

        $result = $this->db->where('username',$username)
                           ->where('password',$password)
                           ->limit(1)
                           ->get('tb_user');
        if ($result->num_rows() > 0){
            return $result->row();
        }else{
            return FALSE;
        }
    }
//end model login


}
?>