
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
    <?php

    if(isset($_POST['text1'])){ $sugar = $_POST['text1']; }
    if(isset($_POST['text2'])){ $sugar = $_POST['text2']; }

    switch($valaszt)
    {
        case "k":
            {
                echo(2*$sugar*pi());
                break;
            }
        case "t":
            {
                echo(pow($sugar, 2)*pi();
                break;
            }

        default{
            if($sugar!="" || $valaszt!=""){
                echo("Nincs ilyen művelet!");
            }
        }
    }
        /*$homerseklet=$_POST['text1'];
        if($homerseklet < 0)
        {
            echo("<h2 class='jeg'>Szilárd</h2>");
        }
        elseif($homerseklet > 100)
        {
            echo("<h2 class='goz'>Légnemű</h2>");
        }
        else
        {
            echo("<h2 class='viz'>Folyékony</h2>");
        }*/
    ?>
    </body>