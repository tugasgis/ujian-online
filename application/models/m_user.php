<?php

class M_registrasi extends CI_Model {
	
    function tambah(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');				
        $kon_id = $this->input->post('kon_id');		
		
		$data = array(
                'id_user'=>$id_user,
                'username'=>$username,
                'password'=>MD5($this->input->post('password')),
				'level'=>$level
                );
        $this->db->insert('user',$data);
    }
	
}

?>