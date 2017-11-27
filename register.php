<?php include('header.php'); 
//Check Errors
$error = array();
$msg = "Registration";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(empty($_POST['name'])){
        $error['name'] = "Name Is Required";
    }else{
        $name = $_POST['name'];
    }

    if(empty($_POST['email'])){
        $error['email'] = "Email Is Required";
    }else{
        $email = $_POST['email'];
    }

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email = $_POST['email'];
    }else{
        $error['email'] = "Please Enter Valid Email";
    }

    if(empty($_POST['username'])){
        $error['username'] = "Username Is Required";
    }else{
        $username = $_POST['username'];
    }

    if(empty($_POST['password'])){
        $error['password'] = "Password Is Empty";
    }else{
        $password = $_POST['password'];
    }

    if($password!=$cpassword){
        $error['password'] = "Password Not Match";
    }else{
        $password = $_POST['password'];
    }

    if(count($error) > 0){
        $msg = "Please Check Your Form Field";
    }else{
        $query = "INSERT INTO users (name,email,username,password) VALUES ('$name','$email','$username','$password')";
        $result = mysqli_query($conn,$query);
        $msg = "Your Registration Is Success";
    }
}      
?>
<div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 class="title"><?php echo @$msg;  ?></h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="">
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" value="<?php echo @$name;?>" />
                                </div>
                            </div>
                        </div>
                        <?php echo @$error['name']; ?>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" value="<?php echo @$email;?>"/>
                                </div>
                            </div>
                        </div>
                        <?php echo @$error['email']; ?>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" value="<?php echo @$username;?>"/>
                                </div>
                            </div>
                        </div>
                        <?php echo @$error['username']; ?>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" value="<?php echo @$password;?>"/>
                                </div>
                            </div>
                        </div>
                        <?php echo @$error['password']; ?>

                        <div class="form-group">
                            <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="cpassword" id="confirmpass"  placeholder="Confirm your Password"/>
                                </div>
                            </div>
                        </div>
                       <?php echo @$error['password']; ?>

                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit">Register</button>
                        </div>
                        <div class="login-register">
                            <a href="index.php">Login</a>
                         </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include('footer.php');  ?>