<DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link href="<?= config_item('base_uri') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= config_item('base_uri') ?>/assets/css/n413_roster.css" rel="stylesheet">
        <script src="<?= config_item('base_uri') ?>/assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?= config_item('base_uri') ?>/assets/js/bootstrap.min.js"></script>
        <title>N413 Simple Login</title>

    </head>

    <body>
    <!-- BEGIN Bootstrap Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header"><!-- Mobile menu code -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>/basic">N413 Simple Log-In</a>
            </div> <!-- /.navbar-header -->
            <div id="navbar" class="collapse navbar-collapse">  <!-- Full-width menu code -->
                <ul class="nav navbar-nav">
                    <li id="home"><a href="<?php echo base_url(); ?>/basic">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav pull-right">
                    <li id="register"><a href="<?php echo base_url(); ?>/login/registration">Register</a></li>
                    <li id="login"><a href="<?php echo base_url(); ?>/login/logout">Logout</a></li>
                </ul>
            </div><!--/.collapse navbar-collapse -->
        </div><!--/.container -->
    </nav>
    <!-- END Bootstrap Navbar -->