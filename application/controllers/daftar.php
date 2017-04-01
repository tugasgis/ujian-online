<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class daftar extends CI_Controller {
	
	function deletedata($npm){
 
 		$this->load->model('m_user_mhs');
        $this->m_user_dosen->deletedata($npm);
		redirect('admin/c_user_mhs/tampil');
	}
	
	function updatedata($npm){
        if($_POST==NULL){
            $this->load->model('m_user_mhs');
            $data['hasil'] = $this->m_user_mhs->filterdata($npm);
            $this->load->view('admin/v_edit_user_mhs',$data);
        }
        else{
            $this->load->model('m_user_mhs');
            $this->m_user_mhs->updatedata();
            redirect('admin/c_user_mhs/tampil');
        }
    }
	function tampil(){
        $this->load->model('m_user_mhs');
        $data['hasil'] = $this->m_user_mhs->bacadata();
        $this->load->view('admin/v_mhs',$data);
    }
    function tambahdata(){
	if($this->input->post('submit')){
            $this->load->model('m_register');
            $this->m_register->tambah();
						echo "<script>alert('Selamat anda telah terdaftar, silahkan anda tranfer ke Rek'); redirect('adm/login');</script>";

           
        }
        $this->load->view('home');
    }
	
}

?>