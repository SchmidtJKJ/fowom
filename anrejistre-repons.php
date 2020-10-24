<?php

if(isset($_POST['repons']))
 {
   include("../dbKoneksyon.php");
     if(isset($_POST['komante']))
     {
       $sql = "INSERT INTO repons (diskisyon, met, kontni, dat, likes, dislike) VALUES (?,?,?,CURRENT_TIMESTAMP(),?,?);";
       $name= $_SESSION['user'];
       $dat=date('d/m/Y h:i:s a', time());
       $query = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($query, $sql))
        {
          header("Location: diskisyon.php?SQLerror");
          exit();
        }
        else
        {
          $Uid=$_SESSION['user'];
          $z=0;
          $Did= $_POST['diskisyon'];
          $comment = htmlspecialchars($_POST['komante']);
          mysqli_stmt_bind_param($query,"iisii",$Did,$Uid,$comment,$z,$z);
          mysqli_stmt_execute($query);
          $_SESSION['diskisyonID'] = $Did;
          $addPoints="UPDATE itilizate SET patisipasyonPwen= patisipasyonPwen+7 where userID= '$name';";
          $updateRepons = "UPDATE diskisyon SET repons = repons+1 where diskisyonID = '$Did';";
          mysqli_query($conn,$addPoints);
          mysqli_query($conn,$updateRepons);
          header("Location: yon_diskisyon.php");
          exit();

        }
     }
     else
      {
         header("Location: diskisyon.php?ranpliFomNan");
         exit();
       }

   }

   else {
     // code...
     header("Location: diskisyon.php?FormNotSet");
     exit();
   }
 ?>
