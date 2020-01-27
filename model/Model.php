<?php
	class Model{
		
		public $db;

		public function __construct($host, $user, $pass, $db, $code){
			$this->db = mysqli_connect($host, $user, $pass, $db);
			if (!$this->db){
				exit('Нет соединения с базой данных...');
			}

			mysqli_set_charset($this->db, $code);

			return $this->db;
		}

		public function get_all_db(){
			$sql = 'select * from reviews order by data_r desc;';

			$res = mysqli_query($this->db, $sql);

			if (!$res){
				return FALSE;
			}

			for ($i=0; $i < mysqli_num_rows($res);$i++){
				$row[] = mysqli_fetch_assoc($res);
			}

			return $row;
		}

		public function get_admin($login, $password){
			$login = mysqli_real_escape_string($this->db, $login);
			$password = mysqli_real_escape_string($this->db, $password);
			$sql="select * from admin where login='".$login."' and AES_DECRYPT(password,login)='".$password."';";

			$res = mysqli_query($this->db,$sql);

			if (!$res){
				return FALSE;
			}

			$row = mysqli_fetch_assoc($res);

			return $row['id_a'];
		}

		public function insert_review($name_r, $text_r){
			$name_r = mysqli_real_escape_string($this->db, $name_r);
			$text_r = mysqli_real_escape_string($this->db, $text_r);
			$sql="insert into reviews (name_r,data_r,text_r) values 
            ('".$name_r."', CURDATE(),'".$text_r."')";

			$res = mysqli_query($this->db,$sql);

			if (!$res){
				return FALSE;
			}
			else {
				return TRUE;
			}

		}

		public function delete_review($id_r){
			$sql="delete from reviews where id_r=".$id_r;

			$res = mysqli_query($this->db,$sql);

			if (!$res){
				return FALSE;
			}
			else {
				return TRUE;
			}
		}

	}
