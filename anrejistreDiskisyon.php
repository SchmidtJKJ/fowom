<?php

if(isset($_POST['diskisyon']))
 {
   include("../dbKoneksyon.php");
     if(isset($_POST['tit']) && isset($_POST['kontni']))
     {
       $sql = "INSERT INTO diskisyon (tit, kontni, dat, met, repons, likes, dislike, vues) VALUES (?,?,CURRENT_TIMESTAMP(),?,?,?,?,?);";
       $name=$_SESSION['user'];
       $dat=date('d/m/Y h:i:s a', time());
       $query = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($query, $sql))
        {
          header("Location: nouvoDiskisyon.php?SQLerror");
          exit();
        }
        else
        {
          $z=0;
          mysqli_stmt_bind_param($query,"ssiiiii", $_POST['tit'], $_POST['kontni'], $name,$z,$z,$z,$z);
          mysqli_stmt_execute($query);
          $addPoints="UPDATE itilizate SET patisipasyonPwen= patisipasyonPwen+15 where userID= '$name';";
          mysqli_query($conn,$addPoints);
          header("Location: diskisyon.php?Success");
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
