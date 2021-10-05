<?php
    include('classes.php');
    if(isset($_POST['username']) && isset($_POST['password'])){
        
        $log = new LoginCheck($_POST['username'], $_POST['password']);
    }
    else{
        $log = new LoginCheck("", "");
    }
?>
<h2>Login</h2>
<form action=<?php echo $_SERVER['PHP_SELF'];?> method="POST">
    <div class="form-group">                        
        <label for="username">Username: </label>
        <input type="text" name="username" class="form-control" placeholder="Your username here..." value=<?php echo $log->get_logname();?>>
        <p class="error_p"><?php echo $log->get_lognameerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="password">Password: </label>
        <input type="password" name="password" class="form-control" placeholder="Your password here..." value=<?php echo $log->get_logpass();?>>
        <p class="error_p"><?php echo $log->get_logpasserr();?></p>
    </div>
    <input type="submit" class="btn btn-primary" value="Login"><br>
    <a href="index.php?id=reglap">Register</a>
</form>
<style>
    .error_p{
    color:red;
    font-size: small;
    }
</style>