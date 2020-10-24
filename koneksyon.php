<?php

// code for logging in
   if(isset($_POST["login"]))
   {
       if(isset($_POST['uname']) &&isset($_POST['pass']))
       {
         include("../dbKoneksyon.php");
         $username = htmlentities($_POST['uname']);
         $password =htmlentities($_POST['pass']);
         $loginSQL= "SELECT * from itilizate where imel=?;";
         $query = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($query, $loginSQL))
         {
           header("Location: index.php?SQLerror");
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

               $_SESSION['username']=$row['jwetNon'];
               $name=$row['imel'];
               $addPoints="UPDATE itilizate SET patisipasyonPwen= patisipasyonPwen+5 where imel='$name';";
               mysqli_query($conn,$addPoints);
               header("Location: FOWOM/index.html?login=success");
               exit();
             }
             else {
               header("Location: index.html?err=wrongpassword");
               exit();
             }
           }
           else {
             header("Location: index.php?NoSuchUser");
             exit();
           }
         }

       }

   }

   else {
     header("Location: konekte.php");
   }
