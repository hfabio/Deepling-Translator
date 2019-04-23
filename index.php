<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Deepling translation</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Deepling Translation</a>
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5 alert alert-dark">What are the Deepling saying?</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-9 mx-auto">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <form action="#" method="post">
                  <input type="text" name="msg" id="original" class="form-control form-control-lg" placeholder="Insert deepling text here...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Translate</button>
                </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </header>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-2">

      </div>
      <div class="col-lg-10 h-100 text-center text-lg-left my-auto">
        <?php
        if (isset($_POST['msg'])) {
          $msg = $_POST['msg'];
          require("replace.php");
          $traduzido = translate($msg);
          ?>
          <center><br><img src="img/jaul.gif"><br><hr></center>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Language</th>
                  <th>Message</th>
                </tr>
              </thead>
              <tbody>
                <tr><th scope="row"><p class="text-primary">Deepling:</p></th><td><p class="text-primary"><?php echo "  ".$msg; ?> </p></td></tr>
                <tr><th scope="row"><p class="text-success">Translated:</p></th><td><p class="text-success"> <?php echo '  '.$traduzido; ?> </p></td></tr>
                <tr><th scope="row"><abbr title="This part is under development!"><p class="text-danger">English:</p></abbr></th><td><p class="text-danger"> <?php echo '  '.toEnglish($traduzido); ?> </p></td></tr>
              </tbody>
            </table>
          <?php
        }else{
            ?>
            <p><center><img src="img/jaul.gif"><mark>Insert a text to be translated</mark></center><hr></p>
            <?php
        }
         ?>
      </div>
    </div>
  </div>
</body>



    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 h-100 text-center text-lg-center my-auto">
            <p class="text-muted text-center large mb-4 mb-lg-0">This site was developed by <span class="badge badge-info">Helton Fabio</span> and its a collaborative translation website.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
