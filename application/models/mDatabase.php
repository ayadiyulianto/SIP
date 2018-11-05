<?php

Class MDatabase extends CI_Model {
	public function get($table, $order_by=1) {
		$this->db->order_by($order_by);
		return $this->db->get($table);
	}
	public function get_where($table,$where, $order_by=1) {
		$this->db->order_by($order_by);
		return $this->db->get_where($table,$where);
	}
	public function update($table,$data,$where) {
		return $this->db->update($table,$data,$where);
	}
	public function insert($table,$data) {
		return $this->db->insert($table,$data);
	}
	public function delete($table,$where) {
		return $this->db->delete($table,$where);
	}
    public function get_kamar($id_lantai){
    	$this->db->select('tb_kamar.id_kamar, COUNT(tb_penghuni_kamar.npm) as jumlah_penghuni');
    	$this->db->where('tb_kamar.id_lantai', $id_lantai);
        $this->db->join('tb_penghuni_kamar','tb_penghuni_kamar.id_kamar = tb_kamar.id_kamar AND (tb_penghuni_kamar.keterangan = "aktif" OR  tb_penghuni_kamar.keterangan ="preaktif") ','left');
        $this->db->group_by('tb_kamar.id_kamar');
        return $this->db->get('tb_kamar');
    }
    public function get_all_penghuni(){
    	$this->db->select('tb_penghuni_kamar.*, tb_biodata_penghuni.nama_lengkap');
        $this->db->join('tb_biodata_penghuni','tb_biodata_penghuni.npm = tb_penghuni_kamar.npm');
        $this->db->order_by('keterangan ASC');
        return $this->db->get('tb_penghuni_kamar');
    }
    public function get_penghuni_by_kamar($id_kamar){
    	$this->db->where(array('id_kamar'=>$id_kamar,'keterangan'=>'aktif'));
	    $this->db->join('tb_biodata_penghuni','tb_biodata_penghuni.npm = tb_penghuni_kamar.npm');
	    return $this->db->get_where('tb_penghuni_kamar');
    }
    public function get_pembayaran_by_npm($npm){
    	$this->db->where('tb_biodata_penghuni.npm', $npm);
	    $this->db->join('tb_biodata_penghuni','tb_biodata_penghuni.npm = tb_penghuni_kamar.npm');
	    return $this->db->get_where('tb_penghuni_kamar');
    }
    public function get_mahasiswa_nonaktif(){
    	$this->db->select('npm, nama_lengkap');
    	$this->db->where('npm NOT IN (SELECT npm FROM tb_penghuni_kamar WHERE keterangan="aktif")');
    	return $this->db->get('tb_biodata_penghuni');
    }
    public function get_kamar_tersedia(){
        $penghuni_per_kamar = $this->get('tb_umum')->row()->penghuni_per_kamar;
    	$this->db->select('id_kamar, jumlah_penghuni');
    	$this->db->from('(SELECT tb_kamar.id_kamar, COUNT(tb_penghuni_kamar.npm) as jumlah_penghuni FROM tb_kamar LEFT JOIN tb_penghuni_kamar ON tb_penghuni_kamar.id_kamar = tb_kamar.id_kamar AND (tb_penghuni_kamar.keterangan = "aktif" OR  tb_penghuni_kamar.keterangan ="preaktif") GROUP BY tb_kamar.id_kamar) AS kamar');
    	$this->db->where('jumlah_penghuni < '.$penghuni_per_kamar);
        return $this->db->get();
    }
}

?>