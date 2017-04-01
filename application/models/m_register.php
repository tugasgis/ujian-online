<?php

class m_register extends CI_Model {
	
    function tambah(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');				
        $kon_id = $this->input->post('kon_id');				
        $nama = $this->input->post('nama');				
        $nim = $this->input->post('nim');				
        $jurusan = $this->input->post('jurusan');				
        $email = $this->input->post('email');				
        $alamat = $this->input->post('alamat');				
        $no_hp = $this->input->post('no_hp');				
        $kampuskantor = $this->input->post('kampuskantor');	
		
		$data = array(
				'id'=>$id,
                'username'=>$username,
                'password'=>MD5($this->input->post('password')),
				'level'=>$level,
				'kon_id'=>($this->input->post('id'))
                );
		$this->db->insert('m_admin',$data);
		$data2 = array(
				'id'=>$id,
				'nama'=>$nama,
				'jurusan'=>$jurusan,
				'email'=>$email,
				'alamat'=>$alamat,
				'no_hp'=>$no_hp,
				'kampuskantor'=>$kampuskantor
                );
        $this->db->insert('m_siswa',$data2);
		
    }
	function insert() {
        $insert_bimbingan = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
			'kon_id' => $this->input->post('kon_id'),
        );
		 $insert = $this->db->insert('m_admin', $insert_bimbingan);
		 $insert= array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'kampuskantor' => $this->input->post('kampuskantor'),
        );
		 $insert = $this->db->insert('m_siswa', $insert);
        return $insert;
}
	function bacadata2(){
        $baca1 = $this->db->query("SELECT * FROM bank ");
		foreach ($baca1->result_array() as $row){
		}
        if($baca1->num_rows() > 0){
            foreach ($baca1->result() as $data1){
                $hasil1[] = $data1;
            }
            return $hasil1;
        }
    }
}
?>