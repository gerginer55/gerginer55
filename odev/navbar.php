<?php
$ROOT =  "http://".$_SERVER['HTTP_HOST']."/odev";
$parsed_url = explode('/',$_SERVER["REQUEST_URI"]);
$_SESSION["active_li"] = end($parsed_url);
//print_r($_SESSION);
//echo $ROOT;
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">
            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                 width="40" height="40" class="rounded-circle" style="float:left">
            <?php if(isset($_SESSION["user"]))
                echo "<p style='color: white;float:left;margin: 0;padding-top: 5px'>".$_SESSION["user"]["first_name"].
                    " ".$_SESSION["user"]["last_name"]."</p>";
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item <?php if($_SESSION["active_li"] == "index" || $_SESSION["active_li"] == "") echo "active"?>">
                    <a class="nav-link <?php if($_SESSION["active_li"] == "index" || $_SESSION["active_li"] == "") echo "active"?>" href="<?php echo $ROOT?>">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if($_SESSION["active_li"] == "about") echo "active"?>" href="<?php echo $ROOT?>/about">Apartman Hakkında</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if($_SESSION["active_li"] == "galery") echo "active"?>" href="<?php echo $ROOT?>/galery">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if($_SESSION["active_li"] == "contact") echo "active"?>" href="<?php echo $ROOT?>/contact">İletişim</a>
                </li>
                <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
                    ?>
                    <li class="nav-item d-flex">
                        <a class="nav-link" href="<?php echo $ROOT?>/signout">Log Out</a>
                    </li>
                    <?php
                }else{
                    ?>
                    <li class="nav-item d-flex">
                        <a class="nav-link <?php if($_SESSION["active_li"] == "signin") echo "active" ?>" href="<?php echo $ROOT?>/signin">Giriş Yap</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
