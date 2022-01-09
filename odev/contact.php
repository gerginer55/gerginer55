<?php
    include("config.php");
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>İletişim | Bize Ulaşın</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>

<?php
include_once "navbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="text-align: center">
            <p style="color: orangered;font-size: large;font-weight: bold">Şikayet , Görüş ve Önerileriniz İçin Bize Ulaşın</p>
            <form id="contact" action="" method="post">

                <div class="row">
                    <div class="col-md12">
                        <input placeholder="Adınız" type="text" name="first_name" required autofocus>
                        <input placeholder="Soyadınız" type="text" name="last_name" required>
                        <input placeholder="Daire Numaranız" type="text" name="daire_no" required >

                        <input placeholder="E-Posta Adresiniz" type="email" name="email" required>
                        <input placeholder="Konu" type="text" name="subject" required>
                        <textarea placeholder="Lütfen Mesajınızı Buraya Yazın.." name="message" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit">GÖNDER</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>

</body>
</html>
