<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | MARKETPLACE</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password"class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
            if (isset($_POST['submit'])){
                session_start();
                include 'db.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".md5($pass)."'");
                    echo '<script>window.location="home.php"</script>';
                }else{
                    echo '<script>alert("Username atau Password Anda salah!")</script>';
                }
        ?>

</div>
</body>
</html>