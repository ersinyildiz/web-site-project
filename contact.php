<?php
    require_once('functions/dbconnect.php');
    $pid=7;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style_2.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Kişisel Web Sitem</title>
</head>
<body>
    <div class="page">
        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Umutcan</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php
                                $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                     foreach( $query as $row ){
                                         if($pid==$row['page_id']){
                                             ?>
                                                <li class="nav-item active">

                                        <?php }else{?> <li class="nav-item"> <?php } ?>
                                            <a class="nav-link" href="<?php echo $row['page_url']; ?>"><?php echo $row['page_title']; ?>
                                            </a>
                                            </li>
                                        <?php } } ?> 
                    </ul>
                </div>
            </div>
            
            </nav>
        </div>
        <div id="content">
            <div class="anailetisim container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="iletisimform">
					            <div class="mbottom">
                                    <h1 class="entry-title">   İletişim Formu  </h1>
                                </div>
								<form role="form" action="" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-lg" placeholder="Adınız" required="" name="isim" id="isim" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-lg" placeholder="Soyadınız" required="" name="soyisim" id="soyisim" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="E-Posta Adresiniz" required="" class="form-control input-lg" id="email" value="">
                                         </div>
                                        <div class="col-md-6">
                                            <input type="tel" name="tel" placeholder="Telefon" required="" class="form-control input-lg" id="tel" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="mesaj" class="form-control" rows="8" cols="80" placeholder="Mesajınız"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="gonder">FORMU GÖNDER</button></form></div>
                        </div>
                        <div class="col-md-5 iletisimbilgi">
                            <h1 class="entry-title">   İletişim Bilgileri   </h1>
                            <table class="mtop">
                                <tbody>
                                <tr>
                                    <td><strong>    Adres:      </strong></td>
                                    <td> Tece Kampüsü 33335 Mezitli / MERSİN</td>
                                </tr>
                                <tr>
                                    <td><strong>   Telefon:    </strong></td>
                                    <td>+90 123 123 12 12</td>
                                </tr>
                                <tr>
                                    <td><strong>Fax: </strong></td>
                                    <td>+90 123 132 32 32</td>
                                </tr>
                                <tr>
                                    <td><strong>E-Mail: </strong></td>
                                    <td>umutcan@gmail.com</td>
                                </tr>
                                </tbody>
                            </table>
                            <iframe style="margin:auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3199.563552530136!2d34.44238541126365!3d36.68499352500096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d87769f14bdeb9%3A0xb99813446e807e6d!2sMersin+Meslek+Y%C3%BCksekokulu+Tece+Kamp%C3%BCs%C3%BC!5e0!3m2!1str!2str!4v1507204199340" width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-area">
            <footer id="site-footer">
                <div class="site-info container">
                    <div class="row">
                        <nav id="social-menu" style="margin:auto;">
                            <ul id="social-menu-items" style="margin:10px;">
                                <li>
                                    <a href="#"> <img src="images/icon-twitter-48.png"> </a>   
                                </li>
                                <li>
                                    <a href="#"> <img src="images/icon-instagram-48.png"> </a> 
                                </li>
                                <li>
                                    <a href="#"> <img src="images/icon-facebook-48.png"> </a> 
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>