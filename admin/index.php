<?php 
    session_start();
    include "./config/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>
<body>

    <section class="login">
        <div class="login-container">
            <h2 class="login-title">Login</h2>
            <form class="login-form" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-input" >
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-input" >
                </div>
                <button type="submit" name="login_btn" class="form-button">Login</button>

                <?php if(isset($_SESSION['login_error'])):?>
                    <p class="errot_p"><?= $_SESSION['login_error'];?></p>
                <?php endif; unset($_SESSION['login_error'])?>

            </form>
        </div>
    </section>

    <?php 
        if(isset($_POST['login_btn'])){
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $select = "SELECT * FROM user";
            $result = mysqli_query($conn,$select);
            $view = mysqli_fetch_assoc($result);


            if($username == $view['user_name'] && $password ==$view['password'] ){
                $_SESSION['username'] = $view['user_name'];
                $_SESSION['password'] = $view['password'];
                header("location: http://localhost/Movei/admin/post/post.php");

            }else{
                $_SESSION['login_error'] = "username and password not match!!";
                header("location: http://localhost/Movei/admin/");

            }

        }
    
    ?>
    
</body>
</html>