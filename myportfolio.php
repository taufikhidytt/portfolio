  <!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>my portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- awal navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#home" class="navbar-brand page-scroll"><b><i>Taufik Hidayat</i></b></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="#about" class="page-scroll">About</a></li>
           <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
           <li><a href="#contact" class="page-scroll">Contact</a></li>
         </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- awal jumbtron -->
    <div class="jumbotron text-center">
      <img src="img\IMG_20190617_211640_068.jpg" class="img-circle">
      <h1>TAUFIK HIDAYAT</h1>
      <h3><i>Mahasiswa Teknik Informatika</i></h3>
    </div>
    <!-- akhir jumbotron -->

    <!-- awal about -->
    <section class="about" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <h1>About</h1><hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-sm-offset-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-sm-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

      </div>
    </section>
    <!-- akhir about -->

    <!-- awal gallery -->
    <section class="portfolio" id="portfolio">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <h1>Gallery</h1><hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/IMG_20190618_081337_464.jpg">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/guillermo-latorre-1107700-unsplash.jpg">
            </a>
          </div>
          <div class="col-sm-4">
              <a href="" class="thumbnail">
                <img src="img/IMG_20190619_173348_490.jpg">
              </a>
          </div>
          <div class="col-sm-4">
                <a href="" class="thumbnail">
                  <img src="img/evan-leith-1150191-unsplash.jpg">
                </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/IMG_20181224_162856_489.jpg">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/IMG_20190618_231416_646.jpg">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir gallery -->

    <!-- awal contact -->
    <section class="contact" id="contact">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <h1>Contact</h1><hr>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <form>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="masukan nama lengkap">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="masukan email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="masukan password">
              </div>
              <div class="form-group">
                <label for="telp">Nomor Telpon</label>
                <input type="telp" class="form-control" id="telp" placeholder="masukan nomor telpon">
              </div>
              <select class="form-control">
                <option>--> Riwayat Pendidikan <--</option>
                <option>SDN Cipari 1</option>
                <option>SMPN 01 Panongan</option>
                <option>SMK Miftahul Jannah</option>
                <option>Universitas Raharja</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="7" placeholder="masukan pesan"></textarea>
              </div>
              <button type="button" class="btn btn-success">Submit Pesan</button>
            </form>
          </div>
        </div>
    </section>
    <!-- akhir contact -->

    <!-- awal footer -->
    <div class="footer">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2018 | Built by <a href="http://instagram.com/taufikhidytt_">Taufik Hidayat</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>
