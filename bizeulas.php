<style>
body{
    border: 2px solid black;
    padding: 25px;
    background-repeat:no-repeat;
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

<html>
<head>
<title>HOTEL ELİZA</title>
<link rel="shortcut icon" href="el.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section class="contact-w3ls" id="contact">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
            <div class="contact-agileits">
                <h4>İletişim</h4>
                <p class="contact-agile2">Haber almak için kaydolun:</p>
                <form  method="post" name="sentMessage" id="contactForm" >
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Adınız - Soyadınız:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>  
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Telefon Numarası:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
                            <p class="help-block"></p>
                        
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">E-posta:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
                            <p class="help-block"></p>
                        
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Gönder" class="btn btn-primary"> 
                </form>
                <?php
                if(isset($_POST['sub']))
                {
                    $name =$_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $approval = "Not Allowed";
                    $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
                    
                    
                    if(mysqli_query($con,$sql))
                    echo"OK";
                    
                }
                ?>
            </div>
        </div>
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
<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
            <h4>İletişim Bilgileri</h4>
            <p class="contact-agile1"><strong>Telefon :</strong>+94 (65)222-44-55</p>
            <p class="contact-agile1"><strong>E-posta :</strong> <a href="mailto:name@example.com">INFO@ELİZAHOTEL.COM</a></p>
            <p class="contact-agile1"><strong>Açık Adres :</strong> 2547.sokak Gümüşlük mahallesi Bodrum/Muğla</p>
                                                                
            <div class="social-bnr-agileits footer-icons-agileinfo">
                
            </div>
            <iframe src="https://www.google.com/maps/place/G%C3%BCm%C3%BC%C5%9Fl%C3%BCk,+48970+Bodrum%2FMu%C4%9Fla/@37.052847,27.2379514,17.75z/data=!4m5!3m4!1s0x14be74edea1f3b03:0xdae5ace90d810a92!8m2!3d37.053183!4d27.244809" ></iframe>
        </div>
