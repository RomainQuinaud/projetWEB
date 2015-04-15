<?php
session_start();
if(!isset($_SESSION['login']))
    header('Location: connexion.php');
?>
<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="../img/photo-justice.ico">

    <title>Camping paradis</title>

    <!-- Bootstrap core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="../css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>
<!--
<div class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#">Camping Paradis</a>

        </div>


        <div id="navbar" class="collapse navbar-collapse">

            <ul class="nav navbar-nav">

                <li><a href="index.php">Accueil</a></li>

                <li><a href="reservation.php">Réservation</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Déconnexion</a></li>

            </ul>

        </div><!--/.nav-collapse -->
<!--
    </div>

</div>
-->
<?php
include_once 'menu.php';
menu("infos.php");
?>

<div class="container">

    <div class="starter-template">

        <h1>Bienvenue au Camping Paradis</h1>

        <p> Page d'information</p>




            <footer class="row">
                <div class="col-lg-12">
                    Pied de page
                </div>
            </footer>


        </div></div>

</div><!-- /.container -->

<!-- Bootstrap core JavaScript

================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="../../../../../../Users/Romain%20QUINAUD/Desktop/save/Projet/bootstrap/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>