<style>
    .error_p{
        color:red;
        font-size: 12px;
        min-height: 40px;
    }
</style>
<?php
    include('classes.php');
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['passagain'])){
        
        $log = new RegCheck($_POST['username'], $_POST['password'], $_POST['passagain'], $_POST['email'], $_POST['fullname']);
    }
    else{
        $log = new RegCheck("", "", "", "", "");
    }
?>

<h2>Registration</h2>
<form action=<?php echo $_SERVER['PHP_SELF'],"?id=reglap";?> method="POST">
    <div class="form-group">                        
        <label for="username">Username: </label>
        <input type="text" name="username" class="form-control" placeholder="Your username here..." value="<?php echo $log->get_name();?>">
        <p class="comment">Should be between 6 and 18 characters from the english alphabet</p>
        <p class="error_p" id="uerr"><?php echo $log->get_nameerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="password">Password: </label>
        <input type="password" name="password" class="form-control" placeholder="Your password here..." value="<?php echo $log->get_pass();?>">
        <p class="comment">Must have a number, a capital and a non-capital letter, between 8 and 15 characters from the english alphabet</p>
    <p class="error_p" id="perr"><?php echo $log->get_passerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="passagain">Password again: </label>
        <input type="password" name="passagain" class="form-control" placeholder="Your password here again..." value="<?php echo $log->get_passag();?>">
        <p class="comment">Must be the same as the previously given password</p>
        <p class="error_p" id="paerr"><?php echo $log->get_passagerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="email">E-mail: </label>
        <input type="email" name="email" class="form-control" placeholder="Your e-mail adress here..." value="<?php echo $log->get_email();?>">
        <p class="comment">Must be a valid e-mail adress</p>
        <p class="error_p" id="emerr"><?php echo $log->get_fullerr();?></p>
    </div>
    <div>                   
        <label for="fullname">Full name: </label>
        <input type="text" name="fullname" class="form-control" placeholder="Your full name here..." value="<?php echo $log->get_fullname();?>">
        <p class="comment">Your complete name</p>
        <p class="error_p" id="fnerr"><?php echo $log->get_emailerr();?></p>
    </div>
    <input type="submit" class="btn btn-primary" value="Register"><br>
    <a href="index.php?id=loglap">Login</a>
</form>
<script>
    $(document).ready(function () {
        
        $('input[name=username]').keyup(function () { 

            var regex = new RegExp(/^.*(?=.*[a-zA-Z]).*$/)

            if($('input[name=username]').val().length = 0){
                $("#uerr").html("The Username field can't be left empty!");
            }
            else if($('input[name=username]').val().length < 8){
                $("#uerr").html("Your username must not be shorter than 8 characters, your password is only " + $('input[name=username]').val().length + " characters long!");
            }
            else if(!regex.test($('input[name=username]').val())){
                $("#uerr").html("Wrong format!");
            }
            else{
                $("#uerr").html("");
            }
        });
        
        $('input[name=password]').keyup(function () {

            var regex = new RegExp(/^.*(?=.*[a-z])(?=.*[A-Z])(?=.*\d).*$/);

            if($('input[name=password]').val().length = 0){
                $("#perr").html("The Password field can't be left empty!");
            }
            else if($('input[name=password]').val().length < 8){
                $("#perr").html("Your password must not be shorter than 8 characters, your password is only " + $('input[name=password]').val().length + " characters long!");
            }
            else if(!regex.test($('input[name=password]').val())){
                $("#perr").html("Wrong format!");
            }
            else{
                $("#perr").html("");
            }
        });
        
        $('input[name=passagain]').keyup(function () { 
            if($('input[name=passagain]').val().length == 0){
                $("#paerr").html("The Password again field can't be left empty!");
            }
            else if($('input[name=password]').val() !== $('input[name=passagain]').val()){
                $("#paerr").html("The passwords do not match!");
            }
            else{
                $("#paerr").html("");
            }            
        });

        $('input[name=email]').keyup(function () { 
            if($('input[email]').val().length == 0){
                $("#emerr").html("The E-mail again field can't be left empty!");
            }
            else{
                $("#emerr").html("");
            }            
        });

        $('input[name=fullname]').keyup(function () { 
            if($('input[name=fullname]').val().length == 0){
                $("#fnerr").html("The Full name again field can't be left empty!");
            }
            else{
                $("#fnerr").html("");
            }            
        });
    });
</script>