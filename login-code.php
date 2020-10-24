<?php
// code for logging in

   if(isset($_POST["login"]))
   {
       if(isset($_POST['uname']) &&isset($_POST['pass']))
       {
         include("../dbKoneksyon.php");
         $username = htmlentities($_POST['uname']);
         $password = htmlentities($_POST['pass']);

         $loginSQL= "SELECT * from itilizate where imel=?;";
         $query = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($query, $loginSQL))
         {
           header("Location: index.html?SQL-Error");
           exit();
         }
         else
         {
           mysqli_stmt_bind_param($query,"s",$username);
           mysqli_stmt_execute($query);
           $result= mysqli_stmt_get_result($query);

           if($row = mysqli_fetch_assoc($result))
           {

             if(password_verify($password, $row['modpas']))
             {
               if($row['aktivasyon']==0){
                 header("Location: ../byenvini.php?verifye%imel%ou%avanw%konekte");
                 exit();
               }
               $_SESSION['username']=$row['jwetNon'];
               $_SESSION['user'] = $row['userID'];
               $name=$row['imel'];
               $addPoints="UPDATE itilizate SET patisipasyonPwen= patisipasyonPwen+5 where imel='$name';";
               $updadteKoneksyon = "UPDATE itilizate SET denyeKoneksyon = CURRENT_TIMESTAMP() where imel='$name';";
               mysqli_query($conn, $updadteKoneksyon);
               mysqli_query($conn,$addPoints);
               header("Location: diskisyon.php?koneksyon=siksè");
               exit();
             }
             else {
                header("Location: konekte.php?imel=modpas la pa kòrèk");
                exit();

             }
           }
           else {
             header("Location: konekte.php?user=imel sa pa anrejistre");
             exit();

           }
         }

       }

   }

   ?>
