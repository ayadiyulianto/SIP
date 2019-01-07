<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('level') != 'admin' OR $this->session->userdata('sikaber') == FALSE) {
			redirect("auth");
		}
		$this->load->model('mDatabase');
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data['log'] = $this->db->order_by('datetime DESC')->limit(5)->get('tb_log');
		$data['transaksibaru'] = $this->mDatabase->get_where('tb_transaksi', array('tanggal_diambil'=>NULL))->num_rows();
		$data['pesananbaru'] = $this->mDatabase->get_where('tb_pesanan', array('status'=>'dipesan'))->num_rows();
		$data['emailbaru'] = $this->mDatabase->get_where('tb_email', array('status'=> '0'))->num_rows();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vBeranda', $data);
	}
	public function umum()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] 	= "Informasi tentang Website";
		$data['config'] = $this->mDatabase->get('tb_umum')->row();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vUmum', $data);
	}
	public function umum_simpan()
	{
		$logolama='./assets/img/'.$this->mDatabase->get_where('tb_umum', array('id'=>1))->row()->logo;
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('logo')){
            $data['logo']=$this->upload->file_name;
            unlink($logolama);
        }
		$data['tentang']=$this->input->post('tentang');
		$data['alamat']=$this->input->post('alamat');
		$data['telepon']=$this->input->post('telepon');
		$data['map_latitude']=$this->input->post('map_latitude');
		$data['map_longitude']=$this->input->post('map_longitude');
		$update=$this->mDatabase->update('tb_umum',$data,array('id'=>1));
		if($update){
			$log['username']=$this->session->userdata('username');
			$log['activity']="mengupdate informasi website";
			$this->mDatabase->insert('tb_log',$log);
			$this->session->set_flashdata('info','Edit Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
		}
		redirect("admin/umum");
	}
	public function slider()
	{
		header("Access-Control-Allow-Origin: *");
        $data['slider'] = $this->mDatabase->get_where('tb_gambar',array('jenis'=>'slider'));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Slider', $data);
	}
	public function slider_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] 	= "Tambah Slider";
		$data['jenis'] = "slider";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Gambar', $data);
	}
	public function slider_edit($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Slider";
		$data['jenis'] = "slider";
		$data['data'] = $this->mDatabase->get_where('tb_gambar',array('id'=>$id))->row_array();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Gambar', $data);
	}
	public function gambar_simpan() {
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')){
            $data['gambar']=$this->upload->file_name;
            $uploadsucces=true;
        }else{
        	$uploadsucces=false;
        }
		$data['jenis']=$this->input->post('jenis');
		$data['keterangan']=$this->input->post('keterangan');
		$cek=$this->mDatabase->get_where('tb_gambar',array('id'=>$id))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('tb_gambar',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('admin/'.$data['jenis']);
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/tambah_'.$data['jenis']);
			}
		}else{
			if($uploadsucces){
				$logolama='./assets/img/'.$cek->row()->gambar;
	            unlink($logolama);
	        }
			$update=$this->mDatabase->update('tb_gambar',$data,array('id'=>$id));
			if($update){
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('admin/'.$data['jenis']);
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('admin/edit_'.$data['jenis'].'/'.$id);
			}
		}
	}
	public function gambar_hapus($id){
		$gambarlama=$this->mDatabase->get_where('tb_gambar', array('id'=>$id))->row();
		$hapus=$this->mDatabase->delete('tb_gambar',array('id'=>$id));
		if($hapus){
            unlink('./assets/img/'.$gambarlama->gambar);
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/'.$gambarlama->jenis);
	}
	public function email()
	{
		header("Access-Control-Allow-Origin: *");
        $data['email'] = $this->mDatabase->get('tb_email');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Email', $data);
	}
	public function email_baca()
	{
		$update=$this->mDatabase->update('tb_email',array('status'=>'1'),array('status !='=>'1'));
		if($update){
			$this->session->set_flashdata('info','Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal');
		}
		redirect('admin/email');
	}
	public function email_lihat($id)
	{
		$update=$this->mDatabase->update('tb_email',array('status'=>'1'),array('id'=>$id));
		if($update){
			$this->session->set_flashdata('info','Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal');
		}
		redirect('admin/email');
	}
	public function email_hapus($id)
	{
		$hapus=$this->mDatabase->delete('tb_email',array('id'=>$id));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/email');
	}
	public function offsetprinting()
	{
		header("Access-Control-Allow-Origin: *");
        $data['offsetprinting'] = $this->mDatabase->get_where('tb_printing', array('jenis_cetak'=>'offset'));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_OffsetPrinting', $data);
	}
	public function offsetprinting_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Offset Printing";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_OffsetPrinting', $data);
	}
	public function offsetprinting_ubah($kode)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Ubah Offset Printing";
		$data['data'] = $this->mDatabase->get_where('tb_printing', array('kode'=>$kode))->row_array();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_OffsetPrinting', $data);
	}
	public function offsetprinting_simpan()
	{
		$kode = $this->input->post('kodelama');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')){
            $data['gambar']=$this->upload->file_name;
            $uploadsucces=true;
        }else{
        	$uploadsucces=false;
        }
		$data['jenis_cetak'] = "offset";
		$data['kode'] = $this->input->post('kode');
		$data['nama_cetak'] = $this->input->post('nama_cetak');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['harga_modal'] = $this->input->post('harga_modal');
		$data['harga_umum'] = $this->input->post('harga_umum');
		$data['harga_reseller'] = $this->input->post('harga_reseller');
		$data['harga_agent'] = $this->input->post('harga_agent');

		$cek=$this->mDatabase->get_where('tb_printing',array('kode'=>$kode));
		if($cek->num_rows() == 0){
			$insert=$this->mDatabase->insert('tb_printing',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('admin/offsetprinting');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/offsetprinting_tambah');
			}
		}else{
			if($uploadsucces){
				$logolama='./assets/img/'.$cek->row()->gambar;
	            unlink($logolama);
	        }
			$update=$this->mDatabase->update('tb_printing',$data,array('kode'=>$kode));
			if($update){
				$this->session->set_flashdata('info','Ubah Data Berhasil');
				redirect('admin/offsetprinting');
			}else{
				$this->session->set_flashdata('error','Gagal Ubah Data');
				redirect('admin/offsetprinting_ubah/'.$kode);
			}
		}
	}
	public function offsetprinting_hapus($kode)
	{
		$hapus=$this->mDatabase->delete('tb_printing',array('kode'=>$kode));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/offsetprinting');
	}
	public function digitalprinting()
	{
		header("Access-Control-Allow-Origin: *");
        $data['digitalprinting'] = $this->mDatabase->get_where('tb_printing', array('jenis_cetak'=>"digital"));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_DigitalPrinting', $data);
	}
	public function digitalprinting_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Digital Printing";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_DigitalPrinting', $data);
	}
	public function digitalprinting_ubah($kode)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Ubah Digital Printing";
		$data['data'] = $this->mDatabase->get_where('tb_printing', array('kode'=>$kode))->row_array();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_DigitalPrinting', $data);
	}
	public function digitalprinting_simpan()
	{
		$kode = $this->input->post('kodelama');
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')){
            $data['gambar']=$this->upload->file_name;
            $uploadsucces=true;
        }else{
        	$uploadsucces=false;
        }
		$data['jenis_cetak'] = "digital";
		$data['kode'] = $this->input->post('kode');
		$data['nama_cetak'] = $this->input->post('nama_cetak');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['harga_modal'] = $this->input->post('harga_modal');
		$data['harga_umum'] = $this->input->post('harga_umum');
		$data['harga_reseller'] = $this->input->post('harga_reseller');
		$data['harga_agent'] = $this->input->post('harga_agent');

		$cek=$this->mDatabase->get_where('tb_printing',array('kode'=>$kode));
		if($cek->num_rows() == 0){
			$insert=$this->mDatabase->insert('tb_printing',$data);
			if($insert){
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('admin/digitalprinting');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/digitalprinting_tambah');
			}
		}else{
			if($uploadsucces){
				$logolama='./assets/img/'.$cek->row()->gambar;
	            unlink($logolama);
	        }
			$update=$this->mDatabase->update('tb_printing',$data,array('kode'=>$kode));
			if($update){
				$this->session->set_flashdata('info','Ubah Data Berhasil');
				redirect('admin/digitalprinting');
			}else{
				$this->session->set_flashdata('error','Gagal Ubah Data');
				redirect('admin/digitalprinting_ubah/'.$kode);
			}
		}
	}
	public function digitalprinting_hapus($kode)
	{
		$hapus=$this->mDatabase->delete('tb_printing',array('kode'=>$kode));
		if($hapus){
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/digitalprinting');
	}
	public function pelanggan()
	{
		header("Access-Control-Allow-Origin: *");
        $data['pelanggan'] = $this->mDatabase->get('tb_pelanggan');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Pelanggan', $data);
	}
	public function pelanggan_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Pelanggan";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Pelanggan', $data);
	}
	public function pelanggan_ubah($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Ubah Pelanggan";
		$data['data'] = $this->mDatabase->get_where('tb_pelanggan', array('id'=>$id))->row_array();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Pelanggan', $data);
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
				redirect('admin/pelanggan');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/pelanggan_tambah');
			}
		}else{
			$update=$this->mDatabase->update('tb_pelanggan',$data,array('id'=>$id));
			if($update){
				$log['username']=$this->session->userdata('username');
				$log['activity']="mengupdate data pelanggan ".$id;
				$this->mDatabase->insert('tb_log',$log);
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('admin/pelanggan');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('admin/pelanggan_ubah/'.$id);
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
		redirect('admin/pelanggan');
	}
	public function transaksi()
	{
		header("Access-Control-Allow-Origin: *");
        $data['transaksi'] = $this->mDatabase->get_transaksi();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Transaksi', $data);
	}
	public function transaksi_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Transaksi";
        $data['pelanggan'] = $this->mDatabase->get('tb_pelanggan');
        $data['printing'] = $this->mDatabase->get('tb_printing',"kode, nama_cetak");
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_Transaksi', $data);
	}
	public function transaksi_get_pelanggan()
	{
		$id = $this->input->post('id');
		$response = $this->mDatabase->get_where('tb_pelanggan', array('id'=>$id))->row()->tipe;
		echo $response;
	}
	public function transaksi_batal()
	{
		$batal=$this->mDatabase->delete('tb_pesanan_tmp',array('kasir'=>$this->session->userdata('username')));
		if($batal){
			$this->session->set_flashdata('info','Membatalkan transaksi baru');
		}
		redirect('admin/transaksi');
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
				redirect('admin/transaksi_detail/'.$id);
			}
		}else{
			$this->session->set_flashdata('error','Gagal Tambah Transaksi');
			redirect('admin/transaksi_tambah');
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
			redirect('admin/transaksi');
		}else{
			$this->session->set_flashdata('error','Gagal Edit Data');
			redirect('admin/transaksi_detail/'.$id);
		}
	}
	public function transaksi_selesai($id)
	{
		date_default_timezone_set("Asia/Bangkok");
		$selesai=$this->mDatabase->update('tb_transaksi',array('tanggal_diambil'=>date('Y-m-d H:i:s')),array('id'=>$id));
		if($selesai){
			$log['username']=$this->session->userdata('username');
			$log['activity']="menyelesaikan transaksi dengan id trx ".$id;
			$this->mDatabase->insert('tb_log',$log);
			$this->session->set_flashdata('info','Transaksi selesai');
		}else{
			$this->session->set_flashdata('error','Gagal Ubah');
		}
		redirect('admin/transaksi');
	}
	public function transaksi_hapus($id)
	{
		$hapus=$this->mDatabase->delete('tb_transaksi',array('id'=>$id));
		if($hapus){
			$log['username']=$this->session->userdata('username');
			$log['activity']="menghapus transaksi dengan id trx ".$id;
			$this->mDatabase->insert('tb_log',$log);
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/transaksi');
	}
	public function pesanan()
	{
		header("Access-Control-Allow-Origin: *");
        $data['pesanan'] = $this->mDatabase->get_pesanan(array('status !='=>'selesai'));
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Pesanan', $data);
	}
	public function pesanan_ubah($status,$id)
	{
		$proses=$this->mDatabase->update('tb_pesanan',array('status'=>$status),array('id'=>$id));
		if($proses){
			$this->session->set_flashdata('info','Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal');
		}
		redirect('admin/pesanan');
	}
	public function laporan()
	{
		header("Access-Control-Allow-Origin: *");

		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bulan');
		if(isset($tahun) && isset($bulan)){
			$where['YEAR(`tanggal_jadi`)'] = $tahun;
			$where['MONTH(`tanggal_jadi`)'] = $bulan;
			$data['active'] = date('F Y', strtotime($tahun.'-'.$bulan.'-01'));
			$data['tahun'] = $tahun;
			$data['bulan'] = $bulan;
		}else{
			$where['YEAR(`tanggal_jadi`)'] = date('Y');
			$where['MONTH(`tanggal_jadi`)'] = date('m');
			$data['active'] = date('F Y');
			$data['tahun'] = date('Y');
			$data['bulan'] = date('m');
		}
        $data['laporan'] = $this->mDatabase->get_laporan_total($where)->row();
        $data['pesanan'] = $this->mDatabase->get_laporan_detail($where);
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vLaporan', $data);
	}
	public function laporan_cetak($tahun,$bulan)
	{
		header("Access-Control-Allow-Origin: *");
		$where['YEAR(`tanggal_jadi`)'] = $tahun;
		$where['MONTH(`tanggal_jadi`)'] = $bulan;
        $data['laporan'] = $this->mDatabase->get_laporan_total($where)->row();
        $data['pesanan'] = $this->mDatabase->get_laporan_detail($where);
		$data['active'] = date('F Y', strtotime($tahun.'-'.$bulan.'-01'));
        $this->load->view('admin/vCetak_Laporan', $data);
	}
	public function user()
	{
		header("Access-Control-Allow-Origin: *");
        $data['user'] = $this->mDatabase->get('tb_pengguna',"*",'level ASC');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_User', $data);
	}
	public function user_tambah()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah User";
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_User', $data);
	}
	public function user_ubah($username)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit User";
		$data['data'] = $this->mDatabase->get_where('tb_pengguna',array('username'=>$username))->row_array();
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vForm_User', $data);
	}
	public function user_simpan()
	{
		$username=$this->input->post('usernamee');
		$data['username']=$this->input->post('username');
		$data['level']=$this->input->post('level');
		$data['password']=md5($this->input->post('password'));
		$cek=$this->mDatabase->get_where('tb_pengguna',array('username'=>$username))->num_rows();
		if($cek==0){
			$insert=$this->mDatabase->insert('tb_pengguna',$data);
			if($insert){
				$log['username']=$this->session->userdata('username');
				$log['activity']="menambah user baru";
				$this->mDatabase->insert('tb_log',$log);
				$this->session->set_flashdata('info','Input Data Berhasil');
				redirect('admin/user');
			}else{
				$this->session->set_flashdata('error','Gagal Input Data');
				redirect('admin/user_tambah');
			}
		}else{
			$update=$this->mDatabase->update('tb_pengguna',$data,array('username'=>$username));
			if($update){
				$log['username']=$this->session->userdata('username');
				$log['activity']="mengupdate data user ".$username;
				$this->mDatabase->insert('tb_log',$log);
				$this->session->set_flashdata('info','Edit Data Berhasil');
				redirect('admin/user');
			}else{
				$this->session->set_flashdata('error','Gagal Edit Data');
				redirect('admin/user_ubah/'.$username);
			}
		}
	}
	public function user_hapus($username)
	{
		$hapus=$this->mDatabase->delete('tb_pengguna',array('username'=>$username));
		if($hapus){
			$log['username']=$this->session->userdata('username');
			$log['activity']="menghapus user ".$username;
			$this->mDatabase->insert('tb_log',$log);
			$this->session->set_flashdata('info','Hapus Data Berhasil');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/user');
	}
	public function log()
	{
		header("Access-Control-Allow-Origin: *");
        $data['log'] = $this->mDatabase->get('tb_log',"*",'datetime DESC');
        $this->template->load('admin/vTemplate', 'contents' , 'admin/vData_Log', $data);
	}
	public function log_hapus()
	{
		$hapus=$this->db->truncate('tb_log');
		if($hapus){
			$this->session->set_flashdata('info','Log Aktivitas Terhapus');
		}else{
			$this->session->set_flashdata('error','Gagal Hapus Data');
		}
		redirect('admin/log');
	}

}
