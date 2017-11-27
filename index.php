<?php include('header.php');

if(isset($_SESSION['login_user'])){
		echo "Welcome";
}
?>
	<div class="container main-content" style="height: 700px;margin-top: 100px;">
		<h1>Main Content</h1>
   </div>

<?php  include('footer.php');  ?>