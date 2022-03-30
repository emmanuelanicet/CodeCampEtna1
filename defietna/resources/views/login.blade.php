<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style_login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETNA</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="picture/etna.png" alt="logo web site" width="440" height="140">
            </div>
        </header>
        <div class="boxlogin">
            <form class="formulairelogin" action="/login" method="post">
                @csrf
                <div class="formulaire">
                    <input class="username" type="login" placeholder="Login" name="login">
                    <input class="password" type="password" placeholder="Password" name="password">
                </div>
                <div class="button2">
                    <button type="sumbit" class="button"
                        style="background-color:#1d74f5; color:#FFFFFF;"></i><span> Login </span>
                    </button>
                </div>  

            </form>

        </div>
    </div>
</body>

</html>
