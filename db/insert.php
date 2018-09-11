<?php

    session_start();

    $host='localhost';
    $user='root';
    $password='';
    $db='clgDB';

    $mysqli=new mysqli($host,$user,$password,$db);	//To connect to the database.

    if(isset($_POST['submit'])){

    	$fstname=$mysqli->real_escape_string($_POST['fstname']);
    	$lstname=$mysqli->real_escape_string($_POST['lstname']);
    	$fname=$mysqli->real_escape_string($_POST['fname']);
    	$mname=$mysqli->real_escape_string($_POST['mname']);
    	$d=$mysqli->real_escape_string($_POST['d']);
    	$m=$mysqli->real_escape_string($_POST['m']);
    	$y=$mysqli->real_escape_string($_POST['y']);
    	$adrs=$mysqli->real_escape_string($_POST['adrs']);
    	$contact=$mysqli->real_escape_string($_POST['contact']);
    	$aimg=$mysqli->real_escape_string("css/images/".$_FILES['aimg']['name']);
        $aimgtype=$mysqli->real_escape_string($_FILES['aimg']['type']);
        $aimgsize=$mysqli->real_escape_string($_FILES['aimg']['size']);
        $course=$mysqli->real_escape_string($_POST['course']);
    	$yophs=$mysqli->real_escape_string($_POST['yophs']);
    	$yopi=$mysqli->real_escape_string($_POST['yopi']);
    	$yopg=$mysqli->real_escape_string($_POST['yopg']);
    	$simg=$mysqli->real_escape_string("css/images/".$_FILES['simg']['name']);
        $simgtype=$mysqli->real_escape_string($_FILES['simg']['type']);
        $simgsize=$mysqli->real_escape_string($_FILES['simg']['size']);
        
        if ($aimgtype=="image/jpg" || $aimgtype=="image/jpeg" || $aimgtype=="image/png") {
            if ($aimgsize<50000) {
                if(copy($_FILES['aimg']['tmp_name'],$aimg)){
                    $_SESSION['aimage']=$aimg;
                    
                    if ($simgtype=="image/jpg" || $simgtype=="image/jpeg" || $simgtype=="image/png") {
                        if ($simgsize<40000) {
                            if(copy($_FILES['simg']['tmp_name'],$simg)){
                                $_SESSION['simage']=$simg;
                                
                                $sql="INSERT INTO students (
    								fstname,
    								lstname,
    								fname,
    								mname,
    								d,
    								m,
    								y,
    								adrs,
    								contact,
    								aimg,
    								course,
    								yophs,
    								yopi,
    								yopg,
    								simg
    							)"."VALUES(
    								'$fstname',
    								'$lstname',
    								'$fname',
    								'$mname',
    								'$d',
    								'$m',
    								'$y',
    								'$adrs',
    								'$contact',
    								'$aimg',
    								'$course',
    								'$yophs',
    								'$yopi',
    								'$yopg',
    								'$simg'
    							)";
                                
                                if($mysqli->query($sql)){
                                    $aimage=$_SESSION['aimage'];
                                    $simage=$_SESSION['simage'];

                                    echo "Student details added to the database.:><br/><br/>";
                                    echo "<b>Name:</b> $fstname $lstname<br/>";
                                    echo "<b>DOB:</b> $d/$m/$y<br/>";
                                    echo "<b>Contact no.:</b> $contact<br/>";
                                    echo "<b>Father's name:</b> $fname<br/>";
                                    echo "<b>Mother's name:</b> $mname<br/>";
                                    echo "<b>Address:</b> $adrs<br/>";
                                    echo "<b>Photo:</b><br/><img src='$aimage' height='100px' width='100px' /><br/>";
                                    echo "<b>Signature:</b><br/><img src='$simage' height='50px' width='100px' /><br/>";
                                }
                                else
                                    echo $mysqli->error;	
                            }
                            else
                                echo "Can't copy the image.";
                        }
                        else
                            echo "insert signatuere image file less than 40kb.<br/>"; 
                    }
                    else
                        echo "Please insert a image of type jpg or jpeg or png.<br/>";
                }
                else
                    echo "Can't copy the image.";
            }
            else
                echo "insert photo image less than 50kb.<br/>";
        }
        else
            echo "Please insert a image of type jpg,jpeg or png.<br/>";

    }
    else {
        echo "Submitting method not matched.";
    }
        
    	
      	    

    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <style>
            body{
                background-color: #E8E8E8;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>