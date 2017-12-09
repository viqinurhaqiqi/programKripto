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
                <li class="active">
                  <a href="enkripsi.php">
                  <i class="glyphicon glyphicon-export"></i>
                  Enkripsi </a>
                </li>
                <li>
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
              <label>Masukan Gambar   :</label>
              <div class="form">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                  <input id="upload" type="file" class="form-control" name="gambar">
                </div><br>
                <button class="btn btn-primary" type="submit" id="submit" name="submit">Enkripsi</button><br><br>
                <label for="comment">Hasil Enkripsi   :</label>
                <?php

                $valid_array = array('jpg','jpeg','png','gif','bmp');
                if(isset($_POST['submit']) && $_FILES['gambar']['size']>0){

                  $ext = @strtolower(end(@explode('.', $_FILES['gambar']['name'])));

                  if(in_array($ext, $valid_array)){

                    move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$_FILES['gambar']['name']);
                    
                    $enkripsi = base64_encode(file_get_contents('gambar/'.$_FILES['gambar']['name']));
                    ?>
                <textarea class="form-control" rows="4" id="comment"><?php echo $enkripsi; ?></textarea>
                <?php

                  }else{

                    echo "<br><div class='alert alert-danger'><strong>Maaf... file yang ada pilih bukan file gambar. Hanya file JPG, PNG, GIF atau BMP yang boleh diupload..!</strong></div>";

                  }

                  }

                ?>
              </div>
            </form>
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