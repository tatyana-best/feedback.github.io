<?php
	class Index  extends AController{
		public function __construct(){
			
		}

		public function get_body(){
			if(!empty($_GET['id_a'])){
				 unset($_SESSION['id_a']);
				 unset($_GET['id_a']);	
				 header('Location: index.php');
				 exit();
			}
			$db=new Model(HOST, USER, PASS, DB, CODE);
			$name_r=trim($_POST['name_r']);
			$text_r=trim($_POST['text_r']);
			if (!empty($name_r) && !empty($text_r)){				
				$db->insert_review($name_r,$text_r);
				header('Location: index.php');
				exit();
			}
			if (!empty($_GET['id_r'])){
				$id_r=(int)$_GET['id_r'];
				$db->delete_review($id_r);
				unset($_GET['id_r']);
				header('Location: index.php');
				exit();
			}
			$text = $db->get_all_db();
			return $this->render('index', array('title' => 'Главная страница', 'text' => $text));
		}


	}
