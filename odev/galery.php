<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beyaz Saray Apartmanı Galerisi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {display:none;}
    </style>
</head>      
<body>
<?php
include_once "navbar.php";
?>
    <div class="container" style="text-align: center">
        <h1 style="color: orangered;font-weight: bold;font-size: large">Örnek Daire ve Apartman Girişi</h1>
        <div class="w3-content w3-display-container">
            <img class="mySlides" src="images/bina_girisi.jpg" style="width:100%">
            <img class="mySlides" src="images/bina_girisi_medivenler.jpg" style="width:100%">
            <img class="mySlides" src="images/salon.jpg" style="width:100%">
            <img class="mySlides" src="images/yatak_odasi.jpg" style="width:100%">
            <img class="mySlides" src="images/cocuk_odasi.jpg" style="width:100%">
            <img class="mySlides" src="images/mutfak.jpg" style="width:100%">
            <img class="mySlides" src="images/banyo.jpg" style="width:100%">

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex-1].style.display = "block";
            }
        </script>

</body>
</html>