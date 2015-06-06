<?php
Class Users extends CI_Model
{
	function login($username, $password)
	{
		$this->db->select('id, name, password, role');
		$this->db->from('user');
		$this->db->where('name', $username);
		$this->db->where('password', $password);
		$this->db->where('status', 1);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1) {
			return $query->result();
		}
		else {
			return false;
		}
	}

	function usernameExists($username,$action = '',$id)
	{
		$this->db->select('name');
		$this->db->from('user');
		$this->db->where('name', $username);
		if($action === 'edit')
			$this->db->where('id <>', $id);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1) {
			return $query->result();
		}
		else {
			return false;
		}
	}

	function getUser($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		$this->db->where('status', 1);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1) {
			return $query->row();
		}
		else {
			return false;
		}
	}

	public function countUsers() 
	{
		$this->db->where('status',1);
		$query = $this->db->get('user');
		$count = count($query->result_array());
		return $count;
	}

	function getCoordinatorIds($id)
	{
		$this->db->select('id');
		$this->db->from('user');
		$this->db->where('parent', $id);
		$this->db->where('status', 1);

		$query = $this->db->get();

		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}

	function save($data){
		$this->db->insert('user', $data);
	}


	function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}
	

	function get_all_by_role($role)
	{
		$user = array();
		$this ->db-> select('id, name');
		$this ->db-> from('user');
		$this ->db-> where('role', $role);
		$this->db->where('status', 1);

		$query = $this->db->get();

		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}

	function deleteUser($id) {
		$this->db->where('id',$id);
		$this->db->update('user',array('status' => 0));
	}

	function delete($data){
		if(!empty($data)){
			$this->db->update_batch('user', $data, 'id'); 
			return true;
		}
		return false;
	}


}
?>