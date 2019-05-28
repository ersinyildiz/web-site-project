<?php
    include_once("../functions/dbconnect.php");
    session_start();
    if(isset($_SESSION["username"])){
        
    }
    else{
        header("location:u-admin.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/submenu.css" rel="stylesheet"></link>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Yönetici Paneli</title>
</head>
<body>
    <div class="page">
        <div class="header" style="margin-bottom:40px;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container"> 
                    <a class="navbar-brand" href="index.php">Umutcan</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <span class="navbar-text">
                                    <?php echo 'Giriş Başarılı, Hoşgeldin - '.$_SESSION["username"]; ?>
                                </span>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            <?php echo '<a href="logout.php">Çıkış</a>'; ?>  
                        </span>
                    </div>
                </div>      
            </nav>
        </div>
        <div class="content">
            <div class="container" >
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hobbies-tab" data-toggle="tab" href="#hobbies" role="tab" aria-controls="hobbies" aria-selected="false">Hobilerim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="phobia-tab" data-toggle="tab" href="#phobia" role="tab" aria-controls="phobia" aria-selected="false">Fobilerim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="schools-tab" data-toggle="tab" href="#schools" role="tab" aria-controls="schools" aria-selected="false">Bitirdiğim Okullar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="projects-tab" data-toggle="tab" href="#projects" role="tab" aria-controls="projects" aria-selected="false">Bitirdiğim Projeler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">İletişim</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="padding-top:20px;">
                            <form method="POST" action="insert.php">
                                <input type="hidden" name="id" value="1"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Site Başlığı</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Anasayfa" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">İçerik</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="content"><?php $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC); if($query->rowCount()){foreach( $query as $row ){if($row["page_id"]==1) echo $row["page_content"];}} ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab" style="padding-top:20px;">
                            <form method="POST" action="insert.php">
                                <input type="hidden" name="id" value="2" hidden>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Site Başlığı</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Hakkımda" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">İçerik</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="content"><?php $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC); if($query->rowCount()){foreach( $query as $row ){if($row["page_id"]==2) echo $row["page_content"];}} ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="hobbies" role="tabpanel" aria-labelledby="hobbies-tab" style="padding-top:20px;">
                            <form method="POST" action="insert.php">
                                <input type="hidden" name="id" value="3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Site Başlığı</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Hobilerim" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">İçerik</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="content"><?php $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC); if($query->rowCount()){foreach( $query as $row ){if($row["page_id"]==3) echo $row["page_content"];}} ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="phobia" role="tabpanel" aria-labelledby="phobia-tab" style="padding-top:20px;">
                            <form method="POST" action="insert.php">
                                <input type="hidden" name="id" value="4">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Site Başlığı</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Fobilerim" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">İçerik</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="content"><?php $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC);if($query->rowCount()){foreach( $query as $row ){if($row["page_id"]==4) echo $row["page_content"];}} ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="schools" role="tabpanel" aria-labelledby="schools-tab" style="padding-top:20px;">
                            <form method="POST" action="insert.php">
                                <input type="hidden" name="id" value="5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Site Başlığı</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Bitirdiğim Okullar" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">İçerik</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="content"><?php $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC); if($query->rowCount()){foreach( $query as $row ){if($row["page_id"]==5) echo $row["page_content"];}} ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="projects-tab" style="padding-top:20px;">
                            <form method="POST" action="insert.php">
                                <input type="hidden" name="id" value="6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Site Başlığı</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Bitirdiğim Projeler" readonly>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">İçerik</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="content"><?php $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC); if($query->rowCount()){foreach( $query as $row ){if($row["page_id"]==6) echo $row["page_content"];}} ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" style="padding-top:20px;">
                            <form method="POST" action="insert.php">
                                <input type="hidden" name="id" value="8">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Site Başlığı</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="İletişim" readonly>
                                </div>  
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">İçerik</label>
                                    <input type="text" class="form-control" name="content" id="formGroupExampleInput" value="<?php
                                            $query = $db->query("SELECT * FROM Accounts", PDO::FETCH_ASSOC);
                                            if ( $query->rowCount() ){
                                                foreach( $query as $row ){
                                                    if($row["account_id"]==1)
                                                        echo $row["email"];
                                                }
                                            }
                                        ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>