<?php
//session_start();
//
//$err=0;
//if(isset($_POST['email'])&&strlen($_POST['loginEmail'])==0){$err++;}
//if(isset($_POST['password'])&&strlen($_POST['loginPassword'])==0){$err++;}
//
//if($err==0){
//    include 'db.php';
//
//    $sql='select * from korisnici where email= :email and password= :password ';
//
//    $query=$db->prepare($sql);
//
//    $query->bindValue(':email',$_POST['loginEmail'],PDO::PARAM_STR);
//    $query->bindValue(':password',$_POST['loginPassword'],PDO::PARAM_STR);
//
//    $query->execute();
//
//    $res=$query->fetchAll(PDO::FETCH_ASSOC);
//
//    if(count($res)!=0){//dali korisnikot postoi
//        $_SESSION['user']=$res[0];
        header('location: ../../index.php');
//    }else{//korisnikot ne postoi
//        header('location:login.php');
//    }
//}