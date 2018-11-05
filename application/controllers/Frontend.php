<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
                $data['slider'] = $this->mDatabase->get_where('tb_gambar',array('jenis'=>'slider'));
                $data['umum'] = $this->mDatabase->get('tb_umum')->row();
                $data['fasilitas'] = $this->mDatabase->get_where('tb_gambar',array('jenis'=>'fasilitas'));
                $data['lantai'] = $this->mDatabase->get('tb_lantai');
                foreach($data['lantai']->result() as $lantai){
                        $data['lantai'.$lantai->id_lantai] = $this->mDatabase->get_kamar($lantai->id_lantai);
                }
                $this->load->view('frontend/vHome',$data);
	}

}
