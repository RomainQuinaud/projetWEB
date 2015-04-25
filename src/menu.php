
<?php



function menu($page)
{
    ?>





    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="toto">

            <div class="navbar-header">

                <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false"
                        data-target="#navbar" data-toggle="collapse" type="button">

        <span class="sr-only">

            Toggle navigation

        </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="infos.php">CampFind</a>

            </div>


            <div id="navbar" class="navbar-collapse collapse" aria-expanded="true" style="height: 0.733333px;">

                <ul class="nav navbar-nav">

                    <li <?php if ($page == 'index.php') echo 'class="active"' ?>><a href="index.php">Accueil</a></li>

                    <li <?php if ($page == 'reservation.php') echo 'class="active"' ?>><a href="reservation.php">Réservation</a>
                    </li>


                    <li><a class="disableFocus"><?php echo $_SESSION['login']?> </a></li>

                    <li><a href="deco.php">Déconnexion</a></li>


                </ul>

            </div>
            <!--/.nav-collapse -->

        </div>

    </nav>




    <!--

 Fixed navbar 

-->
    <!--
        <nav class="navbar navbar-default navbar-fixed-top">


            <div class="container">

                <div class="navbar-header">

                    <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">

            <span class="sr-only">

                Toggle navigation

            </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">

                        Project name

                    </a>


                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 0.733333px;">


                    <ul class="nav navbar-nav">

                        <li class="active">
                            <a href="#">

                                Home

                            </a>
                        </li>
                        <li>
                            <a href="#about">

                                About

                            </a>
                        </li>
                        <li>
                            <a href="#contact">

                                Contact

                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown" href="#">

                                Dropdown

                                <span class="caret"></span>

                            </a>
                            <ul class="dropdown-menu" role="menu">

                                <li>
                                    <a href="#">

                                        Action

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        Another action

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        Something else here

                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">

                                    Nav header

                                </li>
                                <li>
                                    <a href="#">

                                        Separated link

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        One more separated link

                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!--

                /.nav-collapse

                -->
    <!--
</div>


</nav>-->
<?php
}
?>