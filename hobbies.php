<?php
    require_once('functions/dbconnect.php');
    $pid=3;
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
            <div class="container content-area" id="content-area-container">
                <div class="entry-header">
                    <h1 class="entry-title">
                    <?php 
                            $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                     foreach( $query as $row ){
                                         if($pid==$row['page_id']){
                                            echo $row['page_title'];
                                         }
                                     }
                                }
                        ?></h1>
                </div>
                <div class="entry-content">
                    <p>
                        <?php 
                            $query = $db->query("SELECT * FROM Pages", PDO::FETCH_ASSOC);
                                if ( $query->rowCount() ){
                                     foreach( $query as $row ){
                                         if($pid==$row['page_id']){
                                            echo $row['page_content'];
                                         }
                                     }
                                }
                        ?>
                    </p>
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