<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Insight</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/ct-paper.css">
    <link type="text/css" rel="stylesheet" href="assets/css/demo.css">
    <!-- <link type="text/css" rel="stylesheet" href="assets/css/example.css"> -->
    <link type="text/css" rel="stylesheet" href="bootstrap3/css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet" href="bootstrap3/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="bootstrap3/css/font-awesome.css">

  </head>
  <body>

  <div class="container">
    
       <div id="navbar">

        <nav class="navbar navbar-ct-danger" role="navigation" style="height:50%">

          <div class="container-fluid">

            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

              </button>

              <a class="navbar-brand" href="#">Insight</a>

            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav">

                <li><a href="#">What is project Insight?</a></li>

                <li class="active"><a href="#">Red Faction</a></li>

                <li><a href="#">Red Jungle Map</a></li>

                <li class="dropdown">

                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Knowledge Base <b class="caret"></b></a>

                  <ul class="dropdown-menu">

                    <li><a href="#">Monsters</a></li>

                    <li><a href="#">Monster drops</a></li>

                    <li><a href="#">Strategy</a></li>

                    <li class="divider"></li>

                    <li><a href="#">Weapon</a></li>

                    <li class="divider"></li>

                    <li><a href="#">Armor</a></li>

                  </ul>

                </li>

              </ul>

            </div><!-- /.navbar-collapse -->

          </div><!-- /.container-fluid -->

        </nav>

    </div><!--  end navbar -->

  @yield('content')

  <footer>
  <div class="container-fluid" style="bottom:0">
  <div class="row" >
    <h4 style="color:black;"">This site was made by Fahmi</h4>
  </div>
  </div>
  </footer>

  <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap-select.js" type="text/javascript"></script>
  <script src="assets/js/ct-paper-checkbox.js" type="text/javascript"></script>
  <script src="assets/js/ct-paper-radio.js" type="text/javascript"></script>
  <script src="assets/js/ct-paper.js" type="text/javascript"></script>
  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  
  
  </body>

</html>