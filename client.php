<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel = "icon"
    href = "public/images/statue.jpg"
    type = "image/x-icon">
</head>

<body style="text-align: center;">

    <?php if($_GET['q'] == "login"){?>
        <div class="form-div">
            <form action="client.php" method="post">
                <h1>Client Login</h1>
                <a href="client.php?q=signup">Dont have account? Sign up </a>
            </form>
        </div>
    <?php }
    else if($_GET['q'] == "signup"){ ?>
        <div class="form-div">
            <form action="client.php" method="post">
                <h1>Client Signup</h1>
                <a href="client.php?q=login">Have account? Login in</a>
            </form>
        </div>
    <?php } ?>

    <script src="https://kit.fontawesome.com/2f7569df82.js" crossorigin="anonymous"></script>
</body>
</html>
