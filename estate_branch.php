<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <script src="jquery-2.1.3.min.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="sample.js"></script>
    <link rel="stylesheet" href="CSS/sample.css">
  </head>
  <body>

    <?php
    // session_start();
    // session_regenerate_id(true);
    // if(isset($_SESSION['login'])==false){
    //   print 'ログインされていません。';
    //   print '<br>';
    //   print '<a href="estate_login.php">ログイン画面へ</a>';
    //   exit();
    // }
     ?>

    <?php

    // $dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
    // $user='root';
    // $password='';
    // $dbh=new PDO($dsn,$user,$password);
    // $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //
    // $sql=$dbh->prepare('SELECT * FROM estate WHERE code=?');
    // $sql->execute([$_POST['code']]);
    // $rec=$sql->fetch(PDO::FETCH_ASSOC);
    $real_code=$_POST['code'];

    if(isset($_POST['disp'])==true){

      header('Location:estate_disp.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['disp'])==true){

      $real_code=$_POST['code'];
      header('Location:estate_disp.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['add'])==true){
      header('Location:estate_add.php');
      exit();
    }

    if(isset($_POST['edit'])==true){

      $real_code=$_POST['code'];
      header('Location:edit/estate_edit.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['moshikomi'])==true){

      $real_code=$_POST['code'];
      header('Location:moshikomi/estate_moshikomi.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['delete'])==true){

      $real_code=$_POST['code'];
      header('Location:estate_delete.php?code='.$real_code);
      exit();
    }


    if(isset($_POST['shinki'])==true){
      header('Location:add/estate_add.php');
      exit();
    }

    if(isset($_POST['owner'])==true){
      header('Location:owner/owner_disp.php');
      exit();
    }
    if(isset($_POST['kushitsu_connect'])==true){
      header('Location:kushitsu/estate_kushitsu_connect.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['moshikomi_connect'])==true){
      header('Location:moshikomi/estate_moshikomi_connect.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['moshikomi_cansel'])==true){
      header('Location:moshikomi/estate_moshikomi_cansel.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['moshikomi_edit'])==true){
      header('Location:moshikomi/estate_moshikomi_edit.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['keiyaku'])==true){
      header('Location:keiyaku/estate_keiyaku.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['keiyaku_edit'])==true){
      header('Location:keiyaku/estate_keiyaku_edit.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['akiyote'])==true){
      header('Location:akiyote/estate_akiyote.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['akiyote_moshikomi'])==true){
      header('Location:akiyote/estate_akiyote_moshikomi.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['akiyote_connect'])==true){
      header('Location:akiyote/estate_akiyote_connect_che.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['akiyote_edit'])==true){
      header('Location:akiyote/estate_akiyote_edit.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['akiyote_keiyaku'])==true){
      header('Location:akiyote/estate_akiyote_keiyaku.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['akiyote_moshikomi_connect'])==true){
      header('Location:akiyote/estate_akiyote_moshikomi_connect.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['akiyote_moshikomi_edit'])==true){
      header('Location:akiyote/estate_akiyote_moshikomi_edit.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['akiyote_moshikomi_cansel'])==true){
      header('Location:akiyote/estate_akiyote_moshikomi_cansel.php?code='.$real_code);
      exit();
    }


    if(isset($_POST['reform'])==true){
      header('Location:reform/estate_reform.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['reform_moshikomi'])==true){
      header('Location:reform/estate_reform_moshikomi.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['reform_connect'])==true){
      header('Location:reform/estate_reform_connect_che.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['reform_edit'])==true){
      header('Location:reform/estate_reform_edit.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['reform_complete'])==true){
      header('Location:reform/estate_reform_complete.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['reform_keiyaku'])==true){
      header('Location:reform/estate_reform_keiyaku.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['reform_moshikomi_connect'])==true){
      header('Location:reform/estate_reform_moshikomi_connect_do.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['reform_moshikomi_edit'])==true){
      header('Location:reform/estate_reform_moshikomi_edit.php?code='.$real_code);
      exit();
    }
    if(isset($_POST['reform_moshikomi_cansel'])==true){
      header('Location:reform/estate_reform_moshikomi_cansel.php?code='.$real_code);
      exit();
    }

    if(isset($_POST['other'])==true){
      header('Location:other/estate_other_room.php?code='.$real_code);
      exit();
    }





     ?>


  </body>
</html>
