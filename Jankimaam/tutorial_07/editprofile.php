<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>Edit Profile Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"rel="stylesheet">
</head>
<body>
    <?php include_once("edit.php"); ?>
    <div class="container-fluid bg-light">
        <div class="row justify-content-center align-items-center"style="height: 100vh;">
            <div class="col-sm-6">
                <h1 class="text-center">Edit Profile</h1>
                <form method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control col-10" id="name" name="name" value="<?php echo $userData['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control col-10" id="email" name="email "value="<?php echo $userData['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="profile_pic">Profile Picture</label><br>
                        <img src="<?php echo 'profile_pictures/' . $userData['profile_pic']; ?>"style="height: 50px; width: 50px;"alt=""><br>
                        <input type="file"class="form-control-file"id="profile_pic"name="profile_pic">
                    </div>
                   
                    <button type="submit"class="btn btn-primary col-md-10">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php
        $userData;

    ?>
</body>

</html>
