<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

		public $TABLE_NAME = 'user';
		public $PRIMARY_KEY = 'id';
		public $USER_TYPE = 'user_type';


		public function getUser($email,$password)
		{
			$where = array('email' => $email, 'password' => $password);
			$this->db->where($where);
			$this->db->from($this->TABLE_NAME);
			$query = $this->db->get()->row();
			return $query;
		}

		public function getAllUsers()
		{
			$this->db->select('*');
			$this->db->from($this->TABLE_NAME);
			$this->db->order_by($this->USER_TYPE, 'asc');
			return $this->db->get()->result();
		}

		public function insertUser($data=array())
		{
			$this->db->insert($this->TABLE_NAME, $data);
			return $this->db->insert_id();
		}

		public function updateUser($id)
		{

			$this->db->where($this->PRIMARY_KEY, $id);
			$this->db->update($this->TABLE_NAME, $data);
			if ($this->db->affected_rows()) {
				return TRUE;
			}
		}

		public function deleteUser($id)
		{
			$this->db->where($this->PRIMARY_KEY, $id);
			$this->db->delete($this->TABLE_NAME);
			return TRUE;
		}

		public function getUserById($id)
		{
			$this->db->where($this->PRIMARY_KEY, $id);
			$this->db->from($this->TABLE_NAME);
			return $this->db->get()->result();
		}

		public function getUserAndProperties()
		{
			$query = "SELECT user.id,user.name,user.email,user.user_type, IFNULL(Subtotal.total,0) AS Number
				FROM user
				LEFT JOIN
				(SELECT Owner_ID, Count(unit_id) AS Total
				From unit
				Group By Owner_ID)Subtotal
				ON user.id = Subtotal.Owner_ID";

			$SQL = $this->db->query($query);
			return $SQL->result();
		}
}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */