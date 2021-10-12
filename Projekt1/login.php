<style>
    .error_p{
        color:red;
        font-size: 12px;
        min-height: 40px;
    }
</style>
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
<form action=<?php echo $_SERVER['PHP_SELF'],"?id=loglap";?> method="POST">
    <div class="form-group">                        
        <label for="username">Username: </label>
        <input type="text" name="username" class="form-control" placeholder="Your username here..." value=<?php echo $log->get_logname();?>>
        <p class="error_p" id="uerr"><?php echo $log->get_lognameerr();?></p>
    </div>
    <div class="form-group">                        
        <label for="password">Password: </label>
        <input type="password" name="password" class="form-control" placeholder="Your password here..." value=<?php echo $log->get_logpass();?>>
        <p class="error_p" id="perr"><?php echo $log->get_logpasserr();?></p>
    </div>
    <input type="submit" class="btn btn-primary" value="Login"><br>
    <a href="index.php?id=reglap">Register</a>
</form>
<script>
    $(document).ready(function () {
        
        $('input[name=username]').keyup(function () { 

            var regex = new RegExp(/^.*(?=.*[a-zA-Z]).*$/)

            if($('input[name=username]').val().length < 1){
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

            if($('input[name=password]').val().length < 1){
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
    });
</script>