<?php
    include("config.php");
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]== true)
        header("location: "."http://".$_SERVER['HTTP_HOST']."/odev/index");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $password_md5 = md5($password);
        $sql = "select *from users where username = '$username' and password = '$password_md5'";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        if($count == 1){
            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $row;
            echo "<h1> Login successful</h1>";
            header("location: ". $ROOT."/index");
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
            $_SESSION["loggedin"] = false;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Giriş Yap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

</head>
<body>
<?php
include_once "navbar.php";
?>
    <div class="container">
        <div class="wrapper fadeInDown">
            <?php
                if(isset($SESSION["status"]) && $SESSION["status"] == "error")
                    echo "<h1 style='color:red;font-size: large'>".$SESSION["message"]."</h1>";
                else if(isset($SESSION["status"]) && $SESSION["status"] && $SESSION["status"] == "success")
                    echo "<h1 style='color:green;font-size: large'>".$SESSION["message"]."</h1>";

                if(isset($SESSION["status"]) && $SESSION["status"]) {
                    unset($SESSION["status"]);
                    unset($SESSION["message"]);
                }
                ?>
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="images/signin.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form action="signin.php" method="post">
                    <input type="text" id="login" class="fadeIn second" name="username" placeholder="Kullanıcı Adı-Eposta">
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="Şifre">

                    <input type="submit" class="fadeIn fourth" value="Giriş Yap">
                    <br>
                    <a href="signup">Kayıt Ol</a>

                </form>

            </div>
        </div>
    </div>
</body>
</html>
