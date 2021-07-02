<?php
    class M_Suhu extends CI_Model
    {
        public function getSuhu()
        {
            $query = $this->db->get('tb_suhu');
            return $query->result();
        }

		public function tambahDataSuhu() 
		{
			$data = [
				"suhu" => $this->input->post('suhu', true),
				"domain" => $this->input->post('domain', true)
			];
			
			$this->db->insert('tb_suhu', $data);
		}

		// public function tambahDataSuhu($table, $data)
		// {	
		// 	$this->db->insert($table, $data);
		// }
}		