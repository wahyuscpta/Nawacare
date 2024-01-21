<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

    <style>
        body{
            background-color: #f9f9f9;
        }
        @media(max-width: 425px){
            .bg-login{
                width: 90%;
            }
        }
    </style>

<body>

    <div class="bg-login">
        <div class="row">

            <div class="col-lg">
                <div class="img-login p-2">
                    <img src="../images/img-login.svg" alt="">
                </div>
            </div>

            <div class="col-lg">
                <div class="login p-2">
                    <form action="process/login-process.php" method="POST">
                        <h4>Welcome Admin</h4>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="usn">
                        </div>
    
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
    
                        <button type="submit" name="btn-submit" class="btn tombol btn-block mt-5">LOGIN</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    
</body>
</html>