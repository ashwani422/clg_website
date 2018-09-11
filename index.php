<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>S.R.K. College of Computer Science & Education</title>
        <link rel="stylesheet" href="css/indexstyle.css" />
    </head>
    <body>
        <div id="big-container">
            <!--Header Image-->
            <img id="header" src="css/images/header.jpg" alt="Image not showing" />
            <section id="navBar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?p=history.php">History</a></li>
                    <li><a href="index.php?p=DDesk.php">Director's Desk</a></li>
                    <li><a href="index.php?p=Course.php">Course</a></li>
                    <li><a href="index.php?p=faculty.php">Faculty</a></li>
                    <li><a href="index.php?p=rules.php">Rules</a></li>
                    <li><a href="index.php?p=form.php">Apply</a></li>
                    <li><a href="index.php?p=contact.php">Contact</a></li>
                </ul>
            </section>
            <section id="content">
                <?php
                    if(isset($_GET['p'])){
                        $page=$_GET['p'];
                        if(file_exists($page)){
                            include("$page");
                        }
                        else
                            echo "Page not found.";
                    }
                    else{
                        if(file_exists("main.php"))
                            include_once("main.php");
                        else
                            echo "Page not found.";
                    }
                ?>
            </section>

            <div id="footer">Designed and developed by <b>"Ashwani Kumar"</b>.</div>
        </div>
    </body>
</html>