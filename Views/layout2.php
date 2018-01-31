<?php include 'Core/helper.class.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    </head>
    <body>
        
        <div class="wrapper">
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- logo for regular state and mobile devices -->
            <?php
            if($_SESSION['auth']['level']== 1)
            {
                echo('<span class="logo-lg"><b>ADMIN</b>M2L</span>');
            }
            elseif ($_SESSION['auth']['level'] == 2)
            {
                echo('<span class="logo-lg"><b>CHEF</b>M2L</span>');
            }
            else
            {
                echo('<span class="logo-lg"><b>UTILISATEUR</b>M2L</span>');
            }
            echo('<span class="logo-mini">M2L</span>');
            ?>
        </a>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
             <a class="navbar-brand" href="<?= BASE_URL; ?>/profil">
                            <img src="http://www.africabeauties.net/img/team/team-member.jpg" width="50px" height="50px" class="user-image" alt="User Image">
                            <span class="hidden-xs">Profil</span>
                        </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
           <?php
                    echo helper::dropdown('fa fa-btc','success',$_SESSION['auth']['credits'],'Crédits');
                    echo helper::dropdown('fa fa-calendar','danger',$_SESSION['auth']['NbJour'],'Jours de formation');
                    ?>
         <?php
                    if($_SESSION['auth']['level']== 1 || $_SESSION['auth']['level']== 2)
                    {
                        if ($_SESSION['auth']['level'] == 1)
                        {
                            echo helper::menu('admin','Accueil','fa fa-home');
                        }
                        elseif ($_SESSION['auth']['level'] == 2)
                        {
                            echo helper::menu('chef','Accueil','fa fa-home');
                        }
                        echo helper::menu('gestionUser','Gestion utilisateurs','fa fa-user-plus');
                        echo helper::menu('gestionPrestataire','Ajouter un Prestataire', 'fa fa-user-plus');
                        echo helper::menu('gestionFormation','Ajouter une Formation','glyphicon glyphicon-plus');
                    }
                    else
                    {
                        echo helper::menu('accueil','Accueil','fa fa-home');
                    }
                    echo helper::menu('calendar','Calendrier', 'fa fa-calendar');
                    echo '<li class="header">GESTION DU COMPTE</li>';
                    echo helper::menu('disconnect','Déconnexion','glyphicon glyphicon-log-out');
                    ?>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- sidebar menu: : style can be found in sidebar.less -->
           
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= $title ?>
                <hr>
            </h1>
        </section>
        <section class="content">
        <?= $content; ?>
        </section>
    </div>
        
        </div>

    </body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</html>

