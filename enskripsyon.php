<?php

if(isset($_POST['enskri']))
 {
   include("../dbKoneksyon.php");
     if(isset($_POST['pass']) && isset($_POST['pass2']))
     {

       if($_POST['pass'] != $_POST['pass2'])
       {

         header("Location: nouvo_kont.php?PasswordsDontMatch");
         exit();
       }
     }

     if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
     {
       $checkEmail = "SELECT imel from itilizate where imel =? ;";
       $queryInit = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($queryInit, $checkEmail))
       {
         header("Location: nouvo_kont.php?SQLerror-for-email");
         exit();
       }
       else {
         mysqli_stmt_bind_param($queryInit,"s",$_POST['email']);
         mysqli_stmt_execute($queryInit);
         mysqli_stmt_store_result($queryInit);
         if(mysqli_stmt_num_rows($queryInit) > 0){
            header("Location: nouvo_kont.php?imel%sa%anrejistre%sou%golayiti%deja");
            exit();
          }

         $non = htmlentities($_POST['non']);
         $sinyati = htmlentities($_POST['sinyati']);
         $username = htmlentities($_POST['uname']);
         $PWD= htmlentities($_POST['pass']);
         $lokasyon= $_POST['lokasyon'];
         $sex= $_POST['seks'];
         $imel= htmlentities($_POST['email']);
         $laj= $_POST['laj'];
         $pwen= 30;
         $rezon= "Verifye imèl ou pou fowòm GolAyiti a";
         $headers= "From: GolAyiti <enfo@golayiti.com> \r\n";
         $headers.="MIME-Version: 1.0"."\r\n";
         $headers.= "Content-type:text/html;charset=UTF-8"."\r\n";
         $kod = md5(time().$imel);
         $email = "byenvini-email.html";
         $mesaj = file_get_contents($email);
         $mesaj = substr_replace($mesaj, $non,5420,0);
         $ajoute+= strlen($non);
         $lyen = "https://golayiti.com/verifikasyon.php?kod=$kod";
         $mesaj= substr_replace($mesaj, $lyen,6280+$ajoute,0);

         // Hashing the user's password
         $hashedPWD = password_hash($PWD, PASSWORD_DEFAULT);

         $sql = "INSERT INTO itilizate (non, sinyati, jwetNon,seks, imel, modpas, lokasyon, datEnskripsyon, denyeKoneksyon, patisipasyonPwen, gwoupLaj)
          VALUES (?,?,?,?,?,?,?,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP(),?,?);";

         $query = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($query, $sql))
         {
           header("Location: nouvo_kont.php?SQLerror");
           exit();
         }
         else {
           mysqli_stmt_bind_param($query,"sssisssii",$non, $sinyati, $username,$sex, $imel, $hashedPWD, $lokasyon, $pwen,$laj);
           mysqli_stmt_execute($query);


           $id="SELECT itilizate.userID from itilizate where imel = '$imel' ";
            $uID =0;
           $result= mysqli_query($conn, $id);
           $IDs = mysqli_fetch_all($result, MYSQLI_ASSOC);
           foreach ($IDs as $user ) {
             $uID =$user['userID'];
           }
           $verify = "INSERT INTO verifikasyon (met, token, dat) values ('$uID', '$kod',CURRENT_TIMESTAMP() );";
            $insert = mysqli_query($conn, $verify);
           if($insert){
                mail($imel, $rezon, $mesaj,$headers);
                header("Location: ../byenvini.php?registration=success");
                exit();
          }
         }
         header("Location: nouvo_kont.php?esnkripsyon=echek");
         exit();
    }

 }
}
 //if  the page was not accessed properly
 else {
   // code...
   header("Location: nouvo_kont.php?FormNotSet");
   exit();
 }


 ?>
