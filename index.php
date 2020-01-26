<?php
    include_once 'config.php';
   // header("Content-Type:text/html;charset='cp-1251'");

    function __autoload($file){
    	if(file_exists('controllers/'.$file.'.php')){
    		require_once 'controllers/'.$file.'.php';
    	}
    	else{
    		require_once 'model/'.$file.'.php';
    	}
    }

    if (isset($_GET['option'])){
    	$class=strip_tags($_GET['option']);
    	switch ($class){
    		case 'view':
    			$init = new View;
    		break;

    		default:
    			$init = new Index;
    		break;
    	}
    }
    else{
    	$init = new Index;
    }

    echo $init->get_body();
?>