<?php

    if (isset($_POST["email"])){

        $kime = "enesgurdag@outlook.com";
        $konu = $_POST["subject"];

        $mesaj = "<h2>".$_POST["message"]."</h2>";
        $baslik = "From: ".$_POST["name"]."<".$_POST["email"].">\r\n";
        $baslik .= "Reply-to : tekerkerem@gmail.com\r\n";
        $baslik .= "Content-type: text/html\r\n";

?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Super Charger for Cars</title>
    <meta charset="UTF-8">

<link rel="shortcut icon" type="image/x-icon" href="\img\icon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css"
        href="\css\style.css">

</head>
<body>
    <div class="container-fluid" style="padding: 0;">
        <header class="my-header">
            <div class="my-links">
                <ul>
                    <li><a href="index.php">Anasayfa</a></li>
                    <li><a href="about.php">Tarihçe</a></li>
                    <li><a href="#">Ürünlerimiz</a></li>
                    <li><a href="https://www.google.com/maps/search/%C5%9Farj+istasyonu+haritas%C4%B1/@41.0108972,29.0430757,10z" target="blank">İstasyon Lokasyonları</a></li>
                    <li><a href="contact.php">İletişim</a></li>
                </ul>
            </div>
        </header>
        <div class="row my-content">
            <div class="col-1"> </div>
            <div class="col-10">
    <div class="my-contact">
        <h1>BİZE ULAŞIN</h1>
    <form class="my-contact-form">
    <form action="" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1" style="color:white;font-size: 30px;">E-mail Adresi</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail adresinizi giriniz...">
          <medium id="emailHelp" class="form-text text-muted">*E-mail adresiniz kimseyle paylaşılmayacaktır.</medium>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" style="color:white;font-size: 30px;">Mesajınız</label>
          <input type="text" class="form-control" name="message" id="exampleInputPassword1" placeholder="Mesajınızı giriniz...">
          
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1" style="color:white;">Okudum , kabul ediyorum.</label>
        </div>
        <button type="submit" class="btn btn-primary">Mesaj Gönder</button>
        
      </form>
      </form>
    </div>
</div>
<div class="col-1"> </div>
</div>
    <footer>

        <div class="my-general-footer">
            <div class="my-copyright">
                <p> &copy Copyright Muhammed Enes GÜRDAĞ 30717060 </p>
            </div>

            <div class="my-footer">
                <ul>
                    <li><a href="https://facebook.com/softengenes" target="blank" class="fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/enesgurdag" target="blank" class="fa fa-twitter"></a></li>
                    <li><a href="https://instagram.com/enesgurdag/" target="blank" class="fa fa-instagram"></a></li>
                </ul>
            </div>
        </div>

    </footer>

</body>

</html>