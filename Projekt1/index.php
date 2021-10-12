<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>My Webpage</title>
</head>
<body class="body container">
    <div class="title header">
        <header>
            <h1>This is a header</h1>
        </header>
    </div>
    <div class="row middle">
        <div class="col-sm-8">
            <div class="content">
                <h2>Content</h2>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium enim deserunt vero eos amet dolorum eveniet placeat unde fuga! Recusandae, amet? Impedit, deleniti? Ad perferendis, esse mollitia eum ipsam voluptatibus! 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium enim deserunt vero eos amet dolorum eveniet placeat unde fuga! Recusandae, amet? Impedit, deleniti? Ad perferendis, esse mollitia eum ipsam voluptatibus! 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium enim deserunt vero eos amet dolorum eveniet placeat unde fuga! Recusandae, amet? Impedit, deleniti? Ad perferendis, esse mollitia eum ipsam voluptatibus! 
                </p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="content">
                <?php
                    if(isset($_GET['id']) && $_GET['id'] == 'reglap')
                    {
                        include('reg.php');
                    }
                    else
                    {
                        include('login.php');
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="title footer">
        <footer>
            <h1>This is a footer</h1>
        </footer>
    </div>
</body>
</html>