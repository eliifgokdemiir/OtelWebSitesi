<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

   <style>
body{
    border: 2px solid black;
    padding: 25px;
    background-size: cover;
            
}

input{
    background-color: transparent;
    border: none;
    border-bottom: 1px solid black;
    border-radius: 5px;
}
select{
    background-color: transparent;
    border: none;
    border-bottom: 1px ;
}
input::placeholder{
    color: #000000;
}
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1{
    background-color: #4CAF50;
    border-radius: 4px;
}
.button1:hover {
    background-color: transparent;
    color: white;
    border: 2px solid #4CAF50;
}
.saga{
float:right;
padding:0 50px 0px;
color: #ffcc00;
font-style: bold;
font-size: 20px;
}

nav{
  float: left;
}
</style>
<title>HOTEL ELİZA</title>
<link rel="shortcut icon" href="el.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-top">
  <nav class="w3-bar w3-black">
    <a href="index.php" class="w3-button w3-bar-item"><img src="el.png" width="25" height="25"> HOTEL ELİZA</a>
    <a href="aboutc.php" class="w3-button w3-bar-item">HAKKIMIZDA</a>
    <a href="admin/login.php" class="w3-button w3-bar-item">GİRİŞ</a>
    <a href="odalar.php" class="w3-button w3-bar-item">ODALAR</a>
    <a href="foto.php" class="w3-button w3-bar-item">FOTOĞRAFLAR</a>
    <a href="bizeulas.php" class="w3-button w3-bar-item">BİZE ULAŞIN</a>
    <a href="form.php"  class="saga">REZERVASYON</a>
  </nav>
</div>
</head>
<body background="mann.jpg" align="center">

<br>
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Çıkış Yap</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Oda Kategorisi</h4>
                <hr>
                <ul>
                    <li><a href="admin/addroom.php">Oda Kategori Ekle</a></li>
                    
                  
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Rezervasyon</h4>
                <hr>
                <ul>
                    <li><a href="form.php">Hemen Rezervasyon</a></li>
                    <li><a href="show_all_room.php">Rezervasyon Görüntüle</a></li>
                    
                </ul>
            </div>
           <div class="col-md-3"></div>
        </div>
        
        
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Yönetici Ekle</h4>
                <hr>
                <ul>
                    <li><a href="admin/registration.php">Yönetici Ekle</a></li>
 
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>









    </div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>