<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
		$this->load->library('recaptcha');
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                $pesan['nama']=$this->input->post('nama');
                $pesan['email']=$this->input->post('email');
                $pesan['pesan']=$this->input->post('pesan');
                $this->mDatabase->insert('tb_email',$pesan);
            }
        }
        $data['umum'] = $this->mDatabase->get('tb_umum')->row();
        $data['slider'] = $this->mDatabase->get_where('tb_gambar', array('jenis'=>'slider'));
        $data['recaptcha'] = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag()
        );
        $this->load->view('vWelcome',$data);
	}
    public function get_produk($type)
    {
        if($type=='populer'){
            $produk=$this->mDatabase->get_produk_populer();
        }else{
            $produk=$this->mDatabase->get_where('tb_printing', array('jenis_cetak'=>$type));
        }

        $response='';
        foreach($produk->result() as $row){
            $response.='<div class="w3-quarter w3-container w3-margin-bottom">
                            <img src="'.base_url("assets/img/".$row->gambar).'" alt="'.$row->nama_cetak.'" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
                            <div class="w3-container w3-light-grey">
                            <p><b>'.$row->nama_cetak.'</b></p>'.$row->deskripsi.'
                            </div>
                        </div>';
        }
        echo $response;
    }
}