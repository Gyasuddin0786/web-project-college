<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
    <style>
        .form{
            width: 25rem;
            height: 15rem;
            margin-top: 10rem;
            margin-left: 30rem;
            background-color: aquamarine;
        }
        .form .input{
            margin-top: 1rem;
            padding-top: .4rem;
            width: 15rem;
        }
        #submit{
            margin-left: 10rem;
        }
    </style>
</head>
<body>
    <form action="welcom.php" method="post" class="form">
        <div class="box">
            <div>
                <label>Username</label>
            <input type="email" name="email" maxlength="50" class="input"><br><br>
            </div>
            <div>
                <label>password</label>
            <input type="password" name="password" maxlength="8" class="input"><br><br>
            </div>
            <div>
                <label>Enroll</label>
            <input type="text" name="enroll" maxlength="12" class="input"><br><br>
            <div>
            <input type="submit" value="submit" name="submit" id="submit">
            </div>

            </div>
        </div>
    </form>
</body>
</html>