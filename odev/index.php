<?php
    // Initialize the session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Beyaz Saray Apartmanı | 55</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
h1{
    color:rgb(18, 219, 0);text-align: center;
    font-family: 'Bebas Neue', cursive;
    font-size:55px ;
    
    
}  

.myDiv{
background-color: rgb(49, 49, 49);
border:10px outset rgb(156, 156, 156) ;
text-align:center ;
text-shadow:4px 4px 8px rgb(0, 0, 0) ;
opacity: 0.9;

}

#menu {
  width: auto;
font-size: 20px;
opacity:0.9 ;


}
  #menu a:hover {
    
    text-decoration:underline ;
  }
i {
margin-right:10px ;

}




#personel {
    border-collapse: collapse;
   
    opacity: 0.9;
    }
     
    #personel td, #personel th {
    background-color: rgb(105, 105, 105);
    border: 1px solid #ddd;
    padding: 8px;
    font-size: 20px;
    }
    #personel tr:hover {
    color:rgb(18, 219, 0);
    }
    #personel th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:rgb(18, 219, 0);
    color: rgb(0, 0, 0);
    font-size: 30px;
    }








@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
 
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
 

}
#contact input[type="text"],
#contact input[type="email"],
#contact textarea,
#contact button[type="submit"] {
    font: 500 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}
 
#contact {
    background: #555555;
    padding: 25px;
    margin: 100px 0 ;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 20px;
    
}
 
#contact h2 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 15px;
}

 

h2{

  color:rgb(18, 219, 0);text-align: center;
  font-family: 'Bebas Neue', cursive;
  font-size:55px ;

}  
 

 .daire {   
        padding: 25px;   
        background-color: rgb(116, 116, 116);  
        border-radius: 20px;
        
    }   

 .galeri{
      width: 100%;
      height: 100%;
      float: left;
      border-radius: 5px;
      box-shadow: 0 10px 10px 10px rgba(20, 23, 28, 0.15);
     
     
      
  
      
  }   
  .galrsm{
      background-color:rgb(18, 219, 0) ;
      width: 40%;
      height: 350px;
      border-radius: 10px;
      padding: 10px;
      opacity: 0.6;
      transition: opacity 0.8s;
      margin:10px;
      margin-left: 50px;
      
      
  }
  .galrsm:hover{
      opacity: 1;
  }
  #galerisection{
      width: 75%;
      height: 1000px;
      margin-left:300px;
      margin-top: 35px;
    
      
      
  }

  #binakurallar{
    width: 80%;
    margin: auto;
    height: auto;
    padding-left: 300px;
}


h3{
    color:rgb(18, 219, 0);text-align: center;
    font-family: 'Bebas Neue', cursive;
    font-size:30px ;
    
    
}  

h4{
    color:rgb(18, 219, 0);text-align: center;
    font-family: 'Bebas Neue', cursive;
    font-size:30px ;
    
    
} 
li{
    color:rgb(255, 255, 255) ;
    font-weight: bold;
    font-size: 20px;
}
p{
color:white;
font-weight: bold;
font-size: 20px;


}
#galerisection::-webkit-scrollbar{
    color: green;
    
}

</style>
</head>
<body>

    <?php
        include_once "navbar.php";
    ?>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Beyaz Saray Apartmanına Hoşgeldiniz</h1>

</div>

<div class="container mt-5">
  <div class="row">
   	<table id="personel">
      <tbody><tr>
      <th>Daire No</th>
      <th>Ad</th>
      <th>Soyad</th>
      <th>Telefon No</th>
      </tr>
      <tr>
      <td>1</td>
      <td>Asuman</td>
      <td>Göldağ</td>
      <td>05364521625</td>
      </tr>
      <tr>
      <td>2</td>
      <td>Ünlüsoy</td>
      <td>Mansur</td>
      <td>05324423653</td>
      </tr>
      <tr>
      <td>3</td>
      <td>Cansen</td>
      <td>Karaburun</td>
      <td>05453276982</td>
      </tr>
      <tr>
      <td>4</td>
      <td>Ülküsel</td>
      <td>Özkahraman</td>
      <td>05364787687</td>
      </tr>
      <tr>
      <td>5</td>
      <td>Funda</td>
      <td>Sığırcı</td>
      <td>05384545625</td>
      </tr>
      <tr>
      <td>6</td>
      <td>Edibe</td>
      <td>Farımaz</td>
      <td>05354365775</td>
      </tr>
      <tr>
      <td>7</td>
      <td>Uluer</td>
      <td>Akgül</td>
      <td>05399643245</td>
      </tr>
      <tr>
      <td>8</td>
      <td>Tarımer</td>
      <td>Zımba</td>
      <td>05395442672</td>
      </tr>
      <tr>
      <td>9</td>
      <td>Şule</td>
      <td>Alaca</td>
      <td>05967535435</td>
      </tr>
      <tr>
      <td>10</td>
      <td>Hafız</td>
      <td>Bayduz</td>
      <td>05369734642</td>
      </tr>
      </tbody></table>
  </div>
</div>

</body>
</html>
