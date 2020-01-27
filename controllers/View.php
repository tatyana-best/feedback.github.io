<?php
	class View extends AController {

		public function __construct(){
	
		}

		public function get_body(){
			$login=trim($_POST['login']);
			$password=trim($_POST['password']);
			if (!empty($login) && !empty($password)){
				$db=new Model(HOST, USER, PASS, DB, CODE);				
				$id_a=$db->get_admin($login,$password);
				if($id_a){
					$_SESSION['id_a']=$id_a;
					$text = $db->get_all_db();
					header('Location: index.php');				
					exit();
				}	
				else{
					$text='Неверны логин или пароль!';						
				}			
			}
			else{
				$text='';						
			}
			return $this->render('view', array('title' => 'Авторизация', 'text' => $text));				
		}
	}
