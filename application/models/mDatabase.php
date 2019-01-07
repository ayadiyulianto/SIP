<?php

Class MDatabase extends CI_Model {
	public function get($table,$select="*",$order_by=1) {
        $this->db->select($select);
		$this->db->order_by($order_by);
		return $this->db->get($table);
	}
	public function get_where($table,$where,$select="*",$order_by=1) {
        $this->db->select($select);
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
    public function get_transaksi(){
        $this->db->select('tb_transaksi.*, tb_pelanggan.nama as pelanggan, tb_pengguna.nama as kasir, SUM(tb_pesanan.upah_cetak + tb_pesanan.upah_design + tb_pesanan.upah_finishing) AS total_harga');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_pesanan','tb_pesanan.id_transaksi=tb_transaksi.id');
        $this->db->join('tb_pelanggan','tb_pelanggan.id=tb_transaksi.id_pelanggan');
        $this->db->join('tb_pengguna','tb_pengguna.username=tb_transaksi.kasir');
        $this->db->group_by('tb_pesanan.id_transaksi');
        $this->db->order_by('tanggal_terima DESC');
        return $this->db->get();
    }
    public function get_transaksi_where($where){
        $this->db->select('tb_transaksi.*, tb_pelanggan.nama, tb_pelanggan.no_telp, tb_pengguna.nama as kasir, SUM(tb_pesanan.upah_cetak + tb_pesanan.upah_design + tb_pesanan.upah_finishing) AS total_harga');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_pesanan','tb_pesanan.id_transaksi=tb_transaksi.id');
        $this->db->join('tb_pelanggan','tb_pelanggan.id=tb_transaksi.id_pelanggan');
        $this->db->join('tb_pengguna','tb_pengguna.username=tb_transaksi.kasir');
        $this->db->group_by('tb_pesanan.id_transaksi');
        $this->db->where($where);
        return $this->db->get();
    }
    public function get_pesanan($where){
        $this->db->select('tb_pesanan.*, tb_printing.nama_cetak, (tb_pesanan.upah_cetak + tb_pesanan.upah_design + tb_pesanan.upah_finishing) as harga, tb_transaksi.tanggal_jadi');
        $this->db->from('tb_pesanan');
        $this->db->join('tb_printing','tb_pesanan.kode_barang=tb_printing.kode');
        $this->db->join('tb_transaksi','tb_pesanan.id_transaksi=tb_transaksi.id');
        $this->db->where($where);
        $this->db->order_by('tb_transaksi.tanggal_terima DESC');
        return $this->db->get();
    }
    public function get_laporan_total($where){
        $this->db->select('SUM(tb_pesanan.upah_cetak - (tb_printing.harga_modal * tb_pesanan.jumlah)) as total_untung_cetak, SUM(tb_pesanan.upah_design) as total_upah_design, SUM(tb_pesanan.upah_finishing) as total_upah_finishing, COUNT(tb_pesanan.id) as total_pesanan, COUNT(tb_transaksi.id) as total_transaksi, SUM(tb_transaksi.bayar) as total_telah_bayar');
        $this->db->from('tb_pesanan');
        $this->db->join('tb_printing','tb_pesanan.kode_barang=tb_printing.kode');
        $this->db->join('tb_transaksi','tb_pesanan.id_transaksi=tb_transaksi.id');
        $this->db->where($where);
        return $this->db->get();
    }
    public function get_laporan_detail($where){
        $this->db->select('tb_pesanan.*, tb_printing.nama_cetak, (tb_pesanan.upah_cetak - (tb_printing.harga_modal*tb_pesanan.jumlah)) as untung_cetak');
        $this->db->from('tb_pesanan');
        $this->db->join('tb_printing','tb_pesanan.kode_barang=tb_printing.kode');
        $this->db->join('tb_transaksi','tb_pesanan.id_transaksi=tb_transaksi.id');
        $this->db->where($where);
        $this->db->order_by('tb_transaksi.id ASC');
        return $this->db->get();
    }
    public function get_produk_populer(){
        $this->db->select('tb_printing.*');
        $this->db->from('tb_printing');
        $this->db->join('tb_pesanan','tb_pesanan.kode_barang=tb_printing.kode');
        $this->db->group_by('kode');
        $this->db->order_by('count(kode)');
        $this->db->limit(8);
        return $this->db->get();
    }
}

?>