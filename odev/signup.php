<?php
include("config.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $daire_no = $_POST['daire_no'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    //to prevent from mysqli injection
    $first_name = stripcslashes($first_name);
    $last_name = stripcslashes($last_name);
    $phone_number = stripcslashes($phone_number);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $re_password = mysqli_real_escape_string($conn, $re_password);

    $_SESSION["status"] = false;

    if($password != $re_password)
    {
        $_SESSION["message"] = "Şifre ve Şifre tekrarı uyuşmuyor";
    }
    else{
        $password_md5 = md5($password);
        $sql = "insert into users (username, first_name, last_name, phone_number, password, daire_no) 
VALUES('$username', '$first_name', '$last_name', '$phone_number', '$password_md5', $daire_no)";

        if( $conn->query($sql)=== TRUE) {
            $_SESSION["message"] = "New record created successfully";
            header("location: signin");
        } else {
            $_SESSION["status"]  = "error";
            $_SESSION["message"] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kayıt Ol</title>
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
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="images/signin.png" id="icon" alt="User Icon" />
            </div>
            <?php
                if(isset($_SESSION["status"]) &&$_SESSION["status"] == "error")
                    echo "<h1 style='color:red;font-size: large'>".$_SESSION["message"]."</h1>";

                if(isset($_SESSION["status"])){
                    unset($_SESSION["status"]);
                    unset($_SESSION["message"]);
                }

            ?>

            <!-- Login Form -->
            <form action="signup.php" method="post">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="Kullanıcı Adı-Eposta">
                <input type="text" id="first_name" class="fadeIn second" name="first_name" placeholder="İsim">
                <input type="text" id="last_name" class="fadeIn second" name="last_name" placeholder="Soyisim">

                <input type="text" id="phonenumber" class="fadeIn second" name="phone_number" placeholder="Telefon No">
                <input type="number" id="daire_no" class="fadeIn second" name="daire_no" placeholder="Daire No">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Şifre">
                <input type="text" id="re_password" class="fadeIn third" name="re_password" placeholder="Şifre Tekrar">

                <input type="submit" class="fadeIn fourth" value="Kayıt Ol">
                <br>
                <a href="signin">Zaten Üyeyim->Giriş Yap</a>

            </form>

        </div>
    </div>
</div>
</body>
</html>
