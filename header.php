<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>maRead Project</title>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Propeller css -->
    <link href="css/propeller.min.css" rel="stylesheet">
    <!-- Maread Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- TOT Style -->
    <link href="css/style_tot.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->

</head>

<body>
    <div class="container">
        <!-- Nav menu with side menu -->
        <nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar">
            <!-- <nav id="header" class="navbar navbar-inverse header--fixed hide-from-print pmd-navbar" role="banner"> -->
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="search-box col-md-4">
                    <button class="btn">
                        <i class="material-icons md-light">search</i>
                    </button>
                </div>
                <div class="navbar-header col-md-4">
                    <button class="pmd-ripple-effect navbar-toggle pmd-navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="javascript:void(0);" class="navbar-brand navbar-brand-custome"><img src="images/logo_mareads.png" /></a>
                </div>
                <div class="user-box col-md-4">
                    <div class="dropdown pmd-dropdown pmd-user-info">
                        <a href="javascript:void(0);" class="btn-user dropdown-toggle media" data-toggle="dropdown" aria-expanded="false">
                            <div class="media-left pmd-ripple-effect">
                                <img src="images/kla.jpg" width="40" height="40" alt="avatar">
                            </div>
                            <!-- <div class="media-body media-middle">
                            User
                        </div>
                        <div class="media-right media-middle">
                            <i class="material-icons md-dark pmd-sm">more_vert</i>
                        </div> -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="javascript:void(0);">Edit Profile</a></li>
                            <li><a href="add_story.php">Add Story</a></li>
                            <li><a href="javascript:void(0);">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pmd-navbar-sidebar">
                    <div id="box-row-2">
                        <ul class="nav navbar-nav">
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Romantic</span><span class="menu-desktop"><img src="images/menu_romantic.gif"></span> <span class="sr-only">(current)</span></a></li>
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Drama</span><span class="menu-desktop"><img src="images/menu_drama.gif"></span></a></li>
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Fantasy</span><span class="menu-desktop"><img src="images/menu_fantasy.gif"></span></a></li>
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Thriller</span><span class="menu-desktop"><img src="images/menu_thriller.gif"></span></a></li>
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Comedy</span><span class="menu-desktop"><img src="images/menu_comedy.gif"></span></a></li>
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Erotic</span><span class="menu-desktop"><img src="images/menu_erotic.gif"></span></a></li>
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Sci-fy</span><span class="menu-desktop"><img src="images/menu_scify.gif"></span></a></li>
                            <li><a class="pmd-ripple-effect" href="javascript:void(0);"><span class="menu-mobile">Gay</span><span class="menu-desktop"><img src="images/menu_gay.gif"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
            <div class="pmd-sidebar-overlay"></div>
        </nav>