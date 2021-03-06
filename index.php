<?php
    require_once 'config.php';
    require_once 'lib/AUTH.php';

    if(isLoggedIn("S"))         header("Location: student/");
    else if(isLoggedIn("I"))    header("Location: instructor/");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/ixdata.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a href="./" class="brand" style="font-size: 2em;"><b><?php echo $PROJECT_NAME; ?></b></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="./"><i class="icon-home icon-large"></i> Home</a></li>
                            <li><a href="./course.php"><i class="icon-book icon-large"></i> Courses</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li><a href="./aboutXData.php"><i class="icon-cogs"></i> About XData</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="span8">
                    <div class="hero-unit">
                        <h1><?php echo $PROJECT_NAME; ?></h1>
                        <b>An SQL learning tool based on X-Data.</b><br><br>
                        <p>An interface to the ongoing XData project so that students and instructors can benefit from it, additionally getting rid of chances of human error by TAs while evaluating the SQL queries.</p>
                       <p> A learning tool, where instructors can add assignments for students, for which they are supposed to submit queries. And then students could test/submit queries and receive feedback/grade for their queries.</p>
                      <br>
                            <a href="./aboutXData.php" class="btn">Read more about XData...</a>
                        </p>
                    </div>
                </div>
                <div class="span4">
                    <center><div class="alert alert-info" id="loginMsg"><b><i class="icon-info-sign icon-large"></i> Please login with IIT-B LDAP to continue.</b></div></center>
                    <form class="form-horizontal well" name="loginForm">
                        <fieldset>
                            <legend>Instructor/Student Login</legend>
                            <div class="control-group">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-user-md icon-large"></i></span>
                                    <input type="text" class="input-xlarge" id="ldapUser" name="ldapUser">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-key icon-large"></i></span>
                                    <input type="password" class="input-xlarge" id="ldapPass" name="ldapPass">
                                </div>
                            </div>
                            <center><button type="submit" class="btn btn-primary btn-large"><i class="icon-signin"></i> &nbsp; Authenticate</button></center>
                        </fieldset>
                    </form>
                </div>
            </div>
            <hr>
            <footer>
                <p>Designed &amp; Created by SSH.<span class="pull-right">&copy; Copyright IIT Bombay, 2012.</span></p>
            </footer>
        </div>

        <!-- Load JS -->
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/ixdata.js"></script>
    </body>
</html>
