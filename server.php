<?php
  include('db.php');
  function isLoggedIn()
  {
    if (isset($_SESSION['user'])) {
      return true;
    }else{
      return false;
    }
  }

  function isAdmin()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'admin' || isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'god' ) {
      return true;
    }else{
      return false;
    }
  }
  function isGOD()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'god' ) {
      return true;
    }else{
      return false;
    }
  }
  function rand_number($length) {
			return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
	}
  function rand_text($length) {
			return substr(str_shuffle(str_repeat($x='0123456789QWERTYUIOPLKJHGFDSAZXCVBNM', ceil($length/strlen($x)) )),1,$length);
	}
?>
