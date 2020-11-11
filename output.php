<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" rel="stylesheet">
    <title>KUISSSSSS</title>

    <?php 
    $nama=$_POST["nama"];
    $nim=$_POST["nim"];
    $alamat=$_POST["alamat"];
    $tempat=$_POST["tempat"];
    $tgl=$_POST["tgl"];
    $kelamin=$_POST["gender"];
    $agama=$_POST["agama"];
    ?>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">KUIS 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="form.html">Form</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perulangan.php">Perulangan</a>
            </li>
          </ul>
        </div>
      </nav>

      <h2 class="h2">Biodata Mahasiswa</h2><hr>
      <table cellpadding="20">
          <tr>
              <td width="300px">
                  <font margin-left="50px">NIM</font>
              </td>
              <td width="600px" colspan="2">  
                        <?php
                            echo ": $nim";
                        ?>
              </td>
          </tr>
          <tr>
            <td width="300px">
                <font margin-left="50px">Nama</font>
            </td>
            <td colspan="2">
                  <div class="form-group">
                  <?php
                            echo ": $nama";
                        ?>
                  </div>
            </td>
        </tr>
        <tr>
            <td width="300px">
                <font margin-left="50px">Tempat, Tanggal Lahir</font>
            </td>
            <td>
                  <div class="form-group">
                  <?php
                            echo ": $tempat, $tgl";
                        ?>
                  </div>
            </td>
        </tr>
        <tr>
            <td width="300px">
                <font margin-left="50px">Alamat</font>
            </td>
            <td colspan="2">
                  <div class="form-group">
                  <?php
                            echo ": $alamat ";
                        ?>
                  </div>
            </td>
        </tr>
        <tr>
            <td width="300px">
                <font margin-left="50px">Jenis Kelamin</font>
            </td>
            <td>
                  <div class="form-group">
                  <?php
                            echo ": $kelamin";
                        ?>
                  </div>
            </td>
        </tr>
        <tr>
            <td width="300px">
                <font margin-left="50px">Agama</font>
            </td>
            <td>
                  <div class="form-group">
                  <?php
                            echo ": $agama";
                        ?>
                    </select>
                  </div>
            </td>
        </tr>
      </table>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>