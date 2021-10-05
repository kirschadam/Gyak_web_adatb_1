<?php
    include('classes.php');
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password again'])){
        
        $log = new RegCheck($_POST['username'], $_POST['password'], $_POST['password again'], $_POST['fullname'], $_POST['email']);
    }
    else{
        $log = new RegCheck("", "", "", "", "");
    }
?>

<h2>Registration</h2>
<form action=<?php echo $_SERVER['PHP_SELF'];?> method="POST">
    <div class="form-group">                        
        <label for="username">Username: </label>
        <input type="text" name="username" class="form-control" placeholder="Your username here...">
        <p class="comment">Should be between 6 and 18 characters from the english alphabet</p>
        <p class="error_p"><?php echo $log->get_nameerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="password">Password: </label>
        <input type="password" name="password" class="form-control" placeholder="Your password here...">
        <p class="comment">Must have a number, a capital and a non-capital letter, between 8 and 15 characters from the english alphabet</p>
    <p class="error_p"><?php echo $log->get_passerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="password again">Password again: </label>
        <input type="password" name="password again" class="form-control" placeholder="Your password here again...">
        <p class="comment">Must be the same as the previously given password</p>
        <p class="error_p"><?php echo $log->get_passagerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="e-mail">E-mail: </label>
        <input type="email" name="e-mail" class="form-control" placeholder="Your e-mail adress here...">
        <p class="comment">Must be a valid e-mail adress</p>
        <p class="error_p"><?php echo $log->get_fullerr();?></p>
    </div>
    <div>                   
        <label for="fullname">Full name: </label>
        <input type="text" name="fullname" class="form-control" placeholder="Your full name here...">
        <p class="comment">Your complete name</p>
        <p class="error_p"><?php echo $log->get_emailerr();?></p>
    </div>
    <input type="submit" class="btn btn-primary" value="Register"><br>
    <a href="index.php?id=loglap">Login</a>
</form>
<style>
    .error_p{
    color:red;
    font-size: small;
    }
</style>