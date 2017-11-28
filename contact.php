<?php

include(dirname(__FILE__).'/includes/core.php');

$title = 'Contact';
include(dirname(__FILE__).'/includes/header.php');


if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$massage = $_POST['message'];
	$created_at = date('Y-m-d H:i:s');

	$query = "INSERT INTO contact (name, email, massage, created_at) VALUES ('$name','$email','$massage','$created_at')";
	$result = mysqli_query($conn,$query);
	
	if ($result) {
		header('Location: greeting.php');
	}
}
?>
<div class="container">
	<div class="row">
		
      <div class="col-md-6 col-md-offset-3">
      	<div class="contactus">
        <div class="well well-sm" style="margin-top: 150px;">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    		<?php echo @$error['name']; ?>
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
        </div>
      </div>
	</div>
</div>

<?php  include(dirname(__FILE__).'/includes/footer.php');  ?>