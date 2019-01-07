<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('level') != 'operator' OR $this->session->userdata('sikaber') == FALSE) {
			redirect("auth");
		}
		$this->load->model('mDatabase');
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data = array();
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vBeranda', $data);
	}
	public function offsetprinting()
	{
		header("Access-Control-Allow-Origin: *");
        $data['offsetprinting'] = $this->mDatabase->get_where('tb_printing', array('jenis_cetak'=>'offset'));
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vData_OffsetPrinting', $data);
	}
	public function digitalprinting()
	{
		header("Access-Control-Allow-Origin: *");
        $data['digitalprinting'] = $this->mDatabase->get_where('tb_printing', array('jenis_cetak'=>"digital"));
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vData_DigitalPrinting', $data);
	}
	public function pelanggan()
	{
		header("Access-Control-Allow-Origin: *");
        $data['pelanggan'] = $this->mDatabase->get('tb_pelanggan');
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vData_Pelanggan', $data);
	}
	public function pelanggan_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Pelanggan";
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vForm_Pelanggan', $data);
	}
	public function pelanggan_ubah($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Ubah Pelanggan";
		$data['data'] = $this->mDatabase->get_where('tb_pelanggan', array('id'=>$id))->row_array();
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vForm_Pelanggan', $data);
	}
	public function pelanggan_simpan()
	{
		$id=$this->input->post('id');
		$data['tipe']=$this->input->post('tipe');
		$data['nama']=$this->input->post('nama');
		$data['no_telp']=$this->input->post('no_telp');
		$data['alamat']=$this->input->post('alamat');
		$cek=$this->mDatabase->get_where('tb_pelanggan',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('tb_pelanggan',$data);
			if($insert){
				$log['username']=$this->session->userdata('username');
				$log['activity']="menambah pelanggan baru";
				$this->mDatabase->insert('tb_log',$log);
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('operator/pelanggan');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('operator/pelanggan_tambah');
			}
		}else{
			$update=$this->mDatabase->update('tb_pelanggan',$data,array('id'=>$id));
			if($update){
				$log['username']=$this->session->userdata('username');
				$log['activity']="mengupdate data pelanggan ".$id;
				$this->mDatabase->insert('tb_log',$log);
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('operator/pelanggan');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('operator/pelanggan_ubah/'.$id);
			}
		}
	}
	public function pelanggan_hapus($id)
	{
		$hapus=$this->mDatabase->delete('tb_pelanggan',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('operator/pelanggan');
	}
	public function transaksi()
	{
		header("Access-Control-Allow-Origin: *");
        $data['transaksi'] = $this->mDatabase->get_transaksi();
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vData_Transaksi', $data);
	}
	public function transaksi_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Transaksi";
        $data['pelanggan'] = $this->mDatabase->get('tb_pelanggan');
        $data['printing'] = $this->mDatabase->get('tb_printing',"kode, nama_cetak");
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vForm_Transaksi', $data);
	}
	public function transaksi_get_pelanggan()
	{
		$id = $this->input->post('id');
		$response = $this->mDatabase->get_where('tb_pelanggan', array('id'=>$id))->row()->tipe;
		echo $response;
	}
	public function pesanan_tmp(){
		$where = array('kasir'=>$this->session->userdata('username'));
		$select = "tb_pesanan_tmp.*, (tb_pesanan_tmp.upah_cetak + tb_pesanan_tmp.upah_design + tb_pesanan_tmp.upah_finishing) as harga";
		$pesanan_tmp = $this->mDatabase->get_where('tb_pesanan_tmp',$where,$select);
		$data = '';
		$total_harga = 0;
		$i = 1;
		foreach($pesanan_tmp->result() as $row){
			$data.='<tr>';
			$data.='<td>'.$i++.'</td>';
			$data.='<td><button type="button" class="hapus btn btn-danger btn-xs" id="'.$row->id.'">Hapus</button></td>';
			$data.='<td>'.$row->kode_barang.'</td>';
			$data.='<td>'.$row->jumlah.'</td>';
			$data.='<td>'.$row->upah_cetak.'</td>';
			$data.='<td>'.$row->upah_design.'</td>';
			$data.='<td>'.$row->upah_finishing.'</td>';
			$data.='<td>'.$row->harga.'</td>';
			$data.='<td>'.$row->keterangan.'</td>';
			$data.='</tr>';
			$total_harga+=$row->harga;
		}
		$response['data']=$data;
		$response['total_harga']=$total_harga;
		echo json_encode($response);
	}
	public function pesanan_get_barang()
	{
		$kode = $this->input->post('kode');
		$response = $this->mDatabase->get_where('tb_printing', array('kode'=>$kode))->row_array();
		echo json_encode($response);
	}
	public function pesanan_tmp_tambah() {
		$data['kasir']=$this->session->userdata('username');
		$data['kode_barang']=$this->input->post('kode_barang');
		$data['jumlah']=$this->input->post('jumlah');
		$data['upah_cetak']=$this->input->post('upah_cetak');
		$data['upah_design']=$this->input->post('upah_design');
		$data['upah_finishing']=$this->input->post('upah_finishing');
		$data['keterangan']=$this->input->post('keterangan');
		$this->mDatabase->insert('tb_pesanan_tmp',$data);
	}
	public function pesanan_tmp_hapus($id)
	{
		$this->mDatabase->delete('tb_pesanan_tmp',array('id'=>$id));
	}
	public function transaksi_simpan() {
		$kasir=$this->session->userdata('username');
		$id_pelanggan=$this->input->post('id_pelanggan');
		$tanggal_jadi=DateTime::createFromFormat('m-d-Y', $this->input->post('tanggal_jadi'))->format('Y-m-d');
		$bayar=$this->input->post('bayar');
		$keterangan=$this->input->post('keterangan');
		$prefix="KB".date('y');
		$insert=$this->db->query("INSERT INTO tb_transaksi (id, kasir, id_pelanggan, tanggal_jadi, bayar, keterangan) SELECT IFNULL(CONCAT('".$prefix."',LPAD((SUBSTRING_INDEX(MAX(`id`), '".$prefix."',-1) + 1), 5, '0')), '".$prefix."00001') AS 'id','".$kasir."','".$id_pelanggan."','".$tanggal_jadi."','".$bayar."','".$keterangan."' FROM tb_transaksi WHERE `id` LIKE '".$prefix."%' ORDER BY `id` ASC");
		if($this->db->affected_rows()>0){
			$where=array('kasir'=>$kasir, 'id_pelanggan'=>$id_pelanggan, 'tanggal_jadi'=>$tanggal_jadi);
			$id=$this->mDatabase->get_where('tb_transaksi', $where)->row()->id;
			$save=$this->db->query("INSERT INTO tb_pesanan (kode_barang, jumlah, upah_cetak, upah_design, upah_finishing, keterangan, id_transaksi, status) SELECT kode_barang, jumlah, upah_cetak, upah_design, upah_finishing, keterangan, '".$id."', 'dipesan' FROM tb_pesanan_tmp WHERE kasir='".$kasir."'");
			if($this->db->affected_rows()>0){
				$this->mDatabase->delete('tb_pesanan_tmp', array('kasir'=>$kasir));
				$log['username']=$this->session->userdata('username');
				$log['activity']="menambahkan transaksi baru dengan id trx ".$id;
				$this->mDatabase->insert('tb_log',$log);
				$this->session->set_flashdata('info','Tambah Transaksi Berhasil');
				redirect('operator/transaksi_detail/'.$id);
			}
		}else{
			$this->session->set_flashdata('error','Gagal Tambah Transaksi');
			redirect('operator/transaksi_tambah');
		}
	}
	public function transaksi_detail($id)
	{
		header("Access-Control-Allow-Origin: *");
        $data['transaksi'] = $this->mDatabase->get_transaksi_where(array("tb_transaksi.id" => $id))->row();
		$data['pesanan'] = $this->mDatabase->get_pesanan(array('id_transaksi'=>$id));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Detail_Transaksi', $data);
	}
	public function transaksi_cetak($id)
	{
		header("Access-Control-Allow-Origin: *");
        $data['transaksi'] = $this->mDatabase->get_transaksi_where(array("tb_transaksi.id" => $id))->row();
		$data['pesanan'] = $this->mDatabase->get_pesanan(array('id_transaksi'=>$id));
        $this->load->view('admin/vCetak_Detail_Transaksi', $data);
	}
	public function transaksi_ubah($id)
	{
		$bayarlagi = $this->input->post('bayarlagi');
		if(isset($bayarlagi)){
			$telahbayar=$this->mDatabase->get_where('tb_transaksi',array('id'=>$id))->row()->bayar;
			$data['bayar']=$telahbayar + $bayarlagi;
		}
		$data['keterangan']=$this->input->post('keterangan');
		$update=$this->mDatabase->update('tb_transaksi',$data,array('id'=>$id));
		if($update){
			$log['username']=$this->session->userdata('username');
			$log['activity']="mengupdate transaksi dengan id trx ".$id;
			$this->mDatabase->insert('tb_log',$log);
			$this->session->set_flashdata('info','Edit Data Berhasil');
			redirect('operator/transaksi');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
			redirect('operator/transaksi_detail/'.$id);
		}
	}
	public function pesanan()
	{
		header("Access-Control-Allow-Origin: *");
        $data['pesanan'] = $this->mDatabase->get_pesanan(array('status !='=>'selesai'));
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vData_Pesanan', $data);
	}
	public function pesanan_ubah($status,$id)
	{
		$proses=$this->mDatabase->update('tb_pesanan',array('status'=>$status),array('id'=>$id));
		if($proses){
			$this->session->set_flashdata('info','Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal');
		}
		redirect('operator/pesanan');
	}
	public function password_ubah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Ubah Password";
		$data['username'] = $this->session->userdata('username');
        $this->template->load('operator/vTemplate', 'contents' , 'operator/vUbah_Password', $data);
	}
	public function password_simpan()
	{
		$data['password']=md5($this->input->post('password_baru'));
		$update=$this->mDatabase->update('tb_pengguna',$data,array('username'=>$this->session->userdata('username')));
		if($update){
			$log['username']=$this->session->userdata('username');
			$log['activity']="mengubah password";
			$this->mDatabase->insert('tb_log',$log);
			$this->session->set_flashdata('info','Edit Data Berhasil');
			redirect('operator/password_ubah');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
			redirect('operator/password_ubah');
		}
	}

}
