<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="index.php" method="post">
    <div class="container">
        <div class="row row-col-lg-3 row-col-md-3 row-col-sm-12 row-col-s-12">
            <div class="col-lg-4 border border-info rounded mt-5 pb-4 border-3">
                <div class="col">
                    <h2 class="text-center mt-2">Login</h2>
                    <?php if(isset($_GET['error'])){?>
                        <p class="error"><?php echo $_GET['error'];?></p>
                        <?php }?>
                    <label for="email" class="p-2 mt-5 fs-5">username</label>
                    <input type="email" name="email" placeholder="username" name="username" class="col border border-1 rounded-bottom">
                </div>
                <div class="col">
                    <label for="password" class="p-2 mt-5 fs-5">password</label>
                    <input type="password" name="password" placeholder="password" name="password" class="col border border-1 rounded-bottom">
                </div>
                <div>
                    <input type="submit" value="Submit" class="btn btn-primary mt-2 pt-2 d-grid gap-2 col-3 mx-auto">
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<?php
// if(isset($_POST['username']) && isset($_POST['password'])){
//     function validate($data){
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }
//     $username = validate($_POST['username']);
//     $password = validate($_POST['password']);
//     if(empty($username)){
//         header("Location: login.php?error = user name is required");
//         exit();
//     }
//     elseif(empty($password)){
//         header("Location: login.php?error = user password is required");
//         exit();

//     }
//     else{
//         echo "Valid input";
//     }

// }else{
//     header("Location: login.php?error");
//     exit();
// }
?>
</form>
</body>
</html>