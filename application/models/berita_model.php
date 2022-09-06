<?php
class berita_model extends CI_Model{
    function tampil_data() {
        return $this->db->get('data_berita');
    }
    function data_berita($gambar,$judul,$isi,$tanggal_update,$id_berita){
		$hsl=$this->db->query("insert into data_berita(gambar,judul,isi,tanggal_update,id_berita) values ('$gambar,$judul,$isi,$tanggal_update,$id_berita')");
		return $hsl;
	}
    function tambah_berita($table,$data) {
        $this->db->insert($table,$data);
    }
    function hapus_berita($table,$data) {
        $this->db->delete()($table,$data);
    }
    function edit_berita($table,$data) {
        $this->db->update()()($table,$data);
    }
}