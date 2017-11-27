<?php include('header.php');
$msg = "Login Please";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $Password = $_POST['password'];

    $query = "SELECT username FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$query);

    if($result){
        $user = mysqli_fetch_row($result);
        $_SESSION['login_user'] = $user[0];
        header('Location: index.php');
    }else{
        $msg = "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
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
                    </div>
                </div>
            </form>
        </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php  include('footer.php');  ?>