<?php

if(isset($_POST['dislike']))
 {
   include("../dbKoneksyon.php");

       $id = $_POST['id'];
       $name= $_SESSION['user'];
       $sql = "UPDATE diskisyon SET dislike = dislike+1 where diskisyonID = '$id';";
       $addPoints="UPDATE itilizate SET patisipasyonPwen= patisipasyonPwen+1 where userID= '$name';";
       mysqli_query($conn,$addPoints);
       mysqli_query($conn,$sql);
       $_SESSION['diskisyonID']= $id;
       header('Location: ' . $_SERVER['HTTP_REFERER']);
       exit();

   }


   if(isset($_POST['repons-dislike']))
    {
      include("../dbKoneksyon.php");

          $id = $_POST['id'];
          $name= $_SESSION['user'];
          $sql = "UPDATE repons SET dislike = dislike+1 where reponsID = '$id';";
          $addPoints="UPDATE itilizate SET patisipasyonPwen= patisipasyonPwen+1 where userID= '$name';";
          mysqli_query($conn,$addPoints);
          mysqli_query($conn,$sql);
          header('Location: ' . $_SERVER['HTTP_REFERER']);
          exit();

      }
