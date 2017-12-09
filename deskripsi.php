<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Enkripsi Gambar Menggunakan Base64</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <div class="row profile">
        <div class="col-md-3">
          <div class="profile-sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
              <img src="logo-uin-firdaus1.png" class="img-responsive" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                UINSGD BANDUNG
              </div>
              <div class="profile-usertitle-job">
                Kelompok 6
              </div>
            </div>
            <div class="profile-usermenu">
              <ul class="nav">
                <li>
                  <a href="index.php">
                  <i class="glyphicon glyphicon-home"></i>
                  Home </a>
                </li>
                <li>
                  <a href="enkripsi.php">
                  <i class="glyphicon glyphicon-export"></i>
                  Enkripsi </a>
                </li>
                <li class="active">
                  <a href="deskripsi.php">
                  <i class="glyphicon glyphicon-import"></i>
                  Dekripsi </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="profile-content">
            <form method="post" enctype="multipart/form-data">
              <label>Masukan Text yang di Deskripsi   :</label>
                <div class="form">
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                    <textarea class="form-control" rows="4" id="comment" name="teks"></textarea>
                  </div><br>
                  <button class="btn btn-primary" type="submit" id="submit" name="submit">Dekripsi</button><br><br>
                  <label for="comment">Hasil Deskripsi   :</label>
                  <?php
                    if(isset($_POST['submit'])){
                    $teks = @$_POST['teks'];
                  ?>
                  <br>
                  <img style="width: 300px; height: 300px;" border="0" src="data:image/jpeg;base64,<?php echo $teks;?>" class = "img-thumbnail img-responsive">
                </div>
            </form>
                <?php
                  }
                ?>
          </div>
        </div>
      </div>
    </div>
    <center >
      <h2 style="color: white; font-family: Lemon/Milk;">KRIPTOGRAFI</h2>
    </center>
    <br>
    <br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>