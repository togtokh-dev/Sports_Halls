<!DOCTYPE html>
<?php
	include('server.php');
	if (!isLoggedIn()) {
		header('location: login.php');
	}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Нүүр</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script type="text/javascript" src="https://library.togtokh.dev/jquery/jquery-3.5.1.js"></script>
		<link rel="stylesheet" href="style.css">
  </head>
  <body>
		<div class="container">
      <div class="row m-2">
				<div class="col-xl-7 card p-3 " style=" margin-right: 20px; ">
					<div class="row mt-2">
				    <div class="form-group col-8">
				      <input type="text" class="form-control" style="height:50px;" id="int_var" placeholder="Хайх үг оруулах...">
				    </div>
				    <div class="form-group col-4" >
				      <select id="input_lan" class="form-control" style="height:50px;">
				        <option value="1" selected>English to Mongolia</option>
				        <option value="2">Монголоос Англи</option>
				      </select>
				    </div>
				  </div>
					<ul class="list-group mt-2 scrollbar" >
						<li class="list-group-item d-flex justify-content-between align-items-center center-text"><span class="spinner-border text-center" role="status" aria-hidden="true"></span>Үг хайгаагүй байна</li>
					</ul>
				</div>

				<div class="col-xl-4 card p-3 " >

					<form class="" id="profile">
						<input type="text" name="ajax_type" value="edit" hidden>
						<div class="mb-3 text-center">
								<label for="exampleInputEmail1" class="form-label h3"><?php echo $_SESSION['user']['user_name']; ?></label>
						</div>
						<hr class="line">

						<div class="medeelel">
							<label class="form-label">И-Мэйл хаяг: </label> <b><?php echo $_SESSION['user']['user_email']; ?></b>
						</div>
						<div class="">

						</div>

					</form>

					<button class="login-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Мэдээлэлээ өөрчилөх</button>
					<a href="?logout" class="btn btn-danger" style="border-radius: 20px;   padding: 14px 20px;">Гарах</a>
				  <div id="id01" class="modal">
						<div class="col-xl-6 mt-5 card p-3" style="">

						<form class="" id="profile">
							<input type="text" name="ajax_type" value="edit" hidden>
							<div class="mb-3 text-center">
								<label for="exampleInputEmail1" class="form-label h3">Мэдээлэлээ өөрчилөх</label>
							</div>
							<hr class="line">
							<div class="mb-3">
								<label class="form-label"><b>Нэр</b></label>
								<input type="text" id="username_edit"   class="form-control" placeholder="" value="<?php echo $_SESSION['user']['user_name']; ?>">
									<input type="text" id="id_edit" name="user_id"  class="form-control" placeholder="" value="<?php echo $_SESSION['user']['id']; ?>" hidden>
							</div>
							<div class="mb-3">
								<label class="form-label"><b>Хуучин нууц үг</b></label>
								<input type="password" id="password_old" name="password_old"  class="form-control" placeholder="Ab12345678">
							</div>
							<div class="mb-3">
								<label class="form-label"><b>Шинэ нууц үг</b></label>
								<input type="password" id="password_new" name="password_new"  class="form-control" placeholder="Ab12345678">
							</div>
							<button type="submit" id="submitBtn_edit">Нууц үг шинэчилэх</button>
						</form>

						</div>
				  </div>

				</div>
			</div>
		</div>
  </body>


	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}

	</script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="./js_code.js"></script>
</html>
