<h2>Registration</h2>
<form action="" method="post">
    <div class="form-group">                        
        <label for="username">Username: </label>
        <input type="text" name="username" class="form-control" placeholder="Your username here...">
        <p class="comment">Should be between 6 and 18 characters from the english alphabet</p>
    </div>
    <div class="form-group">                        
        <label for="password">Password: </label>
        <input type="password" name="password" class="form-control" placeholder="Your password here...">
        <p class="comment">Must have a number, a capital and a non-capital letter, between 8 and 15 characters from the english alphabet</p>
    </div>
    <div class="form-group">                        
        <label for="password again">Password again: </label>
        <input type="password" name="password again" class="form-control" placeholder="Your password here again...">
        <p class="comment">Must be the same as the previously given password</p>
    </div>
    <div class="form-group">                        
        <label for="e-mail">E-mail: </label>
        <input type="email" name="e-mail" class="form-control" placeholder="Your e-mail adress here again...">
        <p class="comment">Must be a valid e-mail adress</p>
    </div>
    <input type="submit" class="btn btn-primary" value="Register"><br>
    <a href="index.php?id=loglap">Login</a>
</form>