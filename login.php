<?php
include(dirname(__FILE__).'/includes/core.php');

$title = 'Login';
include(dirname(__FILE__).'/includes/header.php');

$msg = "Please Login";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    // Find user
    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$query);
    
    // User found
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_row($result);
        $_SESSION['login_user'] = $user[0];

        // Redirect to homepage
        header('Location: index.php');
    } else {
        // User not found
        $msg = "<script type='text/javascript'>alert('Username Or Password Invalid!')</script>";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="main-login main-center" style="margin-top: 100px;">
            <form class="form-horizontal" method="post" action="">
                <h2 class="title text-center"><?php echo $msg; ?></h2>
                     <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">User Name</label>
                        <div class="cols-sm-10">
                                <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" value="<?php echo @$username;?>" />
                                </div>
                            </div>
                            <label for="name" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" value="<?php echo @$password;?>" />
                            </div>
                            <label for="name" class="cols-sm-2 control-label"></label>
                         <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit">Login</button>
                        </div>
                        <div class="login-register">
                            <a href="register.php">Register</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php  include(dirname(__FILE__).'/includes/footer.php');  ?>