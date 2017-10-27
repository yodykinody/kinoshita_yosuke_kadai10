<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="CSS/detail17.css">
</head>
<body>


	<div class="boxA">

	  <!--トップ-->
	      <div class="boxA-inner">
	      <div class="box1">
	        <div class="site">
	          <h1><a href="top.html"><img src="image/img/logo.png"></a></h1>
	        </div>
	      </div>
	  <!--//トップ-->

	    <!--ヘッダーメニュー-->
	    <div class="box2">
	        <div class="menu">
						<p><a href="estate_logout.php" style="" class="logout">ログアウト</a></p>

	        </div>
	    </div>
	    </div>
	  </div>

<div class="boxB">

	<?php
	// session_start();
	// session_regenerate_id(true);
	// if(isset($_SESSION['login'])==false){
	// 	print 'ログインされていません。';
	// 	print '<br>';
	// 	print '<a href="estate_login.php">ログイン画面へ</a>';
	// 	exit();
	// }
	 ?>





	<?php



	try{

//物件一覧
	$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user='root';
	$password='';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// $sql='SELECT code,real_name,post1,post2,address,roomNumber,yachin,kyoeki,moshikomi="0" FROM estate WHERE 1';
	// $sql='SELECT * FROM estate WHERE moshikomi="0" ORDER BY timedate DESC';
	$sql='SELECT * FROM estate WHERE kushitsu="1" ORDER BY real_name  ASC,roomNumber';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();


	$dbh=null;

//申込一覧
	$dsn2='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user2='root';
	$password2='';
	$dbh2=new PDO($dsn2,$user2,$password2);
	$dbh2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// $sql2='SELECT * FROM estate WHERE moshikomi="1" ';
	// $sql2='SELECT * FROM estate WHERE moshikomi="1" ORDER BY timedate DESC';
	$sql2='SELECT * FROM estate WHERE moshikomi="1" ORDER BY real_name  ASC,roomNumber';
	$stmt2=$dbh2->prepare($sql2);
	$stmt2->execute();


	$dbh2=null;

	//空き予定
	$dsn3='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user3='root';
	$password3='';
	$dbh3=new PDO($dsn3,$user3,$password3);
	$dbh3->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// $sql='SELECT code,real_name,post1,post2,address,roomNumber,yachin,kyoeki,moshikomi="0" FROM estate WHERE 1';
	// $sql='SELECT * FROM estate WHERE moshikomi="0" ORDER BY timedate DESC';
	$sql3='SELECT * FROM estate WHERE akiyote="1" AND  moshikomi="0" ORDER BY real_name  ASC,roomNumber';
	$stmt3=$dbh3->prepare($sql3);
	$stmt3->execute();


	$dbh3=null;


	//リフォーム中
	$dsn4='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user4='root';
	$password4='';
	$dbh4=new PDO($dsn4,$user4,$password4);
	$dbh4->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// $sql='SELECT code,real_name,post1,post2,address,roomNumber,yachin,kyoeki,moshikomi="0" FROM estate WHERE 1';
	// $sql='SELECT * FROM estate WHERE moshikomi="0" ORDER BY timedate DESC';
	$sql4='SELECT * FROM estate WHERE reform="1" AND moshikomi="0" ORDER BY real_name  ASC,roomNumber';
	$stmt4=$dbh4->prepare($sql4);
	$stmt4->execute();


	$dbh4=null;




	print '<p class="title">空室物件一覧</p>';

	print '<form method="post" action="estate_branch.php">';

	while(true){
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);

		if($rec==false){
			break;
		}
		print '<a href="kushitsu/estate_disp.php?code='.$rec['code'].'">';
		print '物件名【'.$rec['real_name'].'】　　';
		print $rec['roomNumber'].'号室　　';
		// print '〒'.$rec['post1'].'-'.$rec['post2'].'　　';
		print $rec['address'].'　　';
		print number_format($rec['yachin']).'円　　';
		print number_format($rec['kyoeki']).'円　　';
		print $rec['timedate'];
		print '</a>';
		print '<br>';
	}

	print '<br>';
	print '<p class="title">申込物件一覧</p>';
	// print '<form method="post" action="estate_branch.php">';

	while(true){
		$rec2=$stmt2->fetch(PDO::FETCH_ASSOC);

		if($rec2==false){
			break;
		}
			if(($rec2['akiyote'])==0  && ($rec2['reform'])==0){
			print '<a href="moshikomi/estate_disp_moshikomi.php?code='.$rec2['code'].'">';
			print '物件名【'.$rec2['real_name'].'】　　';
			print $rec2['roomNumber'].'号室　　';
			// print '〒'.$rec2['post1'].'-'.$rec2['post2'].'　　';
			print $rec2['address'].'　　';
			print number_format($rec2['yachin']).'円　　';
			print number_format($rec2['kyoeki']).'円　　';
			print $rec2['timedate'];
			print '</a>';
			print '<br>';
		}else if(($rec2['akiyote'])==1){
			print '<a href="akiyote/estate_disp_akiyote_moshikomi.php?code='.$rec2['code'].'">';
			print '物件名【'.$rec2['real_name'].'】　　';
			print $rec2['roomNumber'].'号室　　';
			// print '〒'.$rec2['post1'].'-'.$rec2['post2'].'　　';
			print $rec2['address'].'　　';
			print number_format($rec2['yachin']).'円　　';
			print number_format($rec2['kyoeki']).'円　　';
			print '空き予定日：'.$rec2['akiyoteDay'].'';
			print '</a>';
			print '<br>';
		}else if(($rec2['reform'])==1){
			print '<a href="reform/estate_disp_reform_moshikomi.php?code='.$rec2['code'].'">';
			print '物件名【'.$rec2['real_name'].'】　　';
			print $rec2['roomNumber'].'号室　　';
			// print '〒'.$rec2['post1'].'-'.$rec2['post2'].'　　';
			print $rec2['address'].'　　';
			print number_format($rec2['yachin']).'円　　';
			print number_format($rec2['kyoeki']).'円　　';
			print 'リフォーム完了予定日：'.$rec2['reformDay'].'';
			print '</a>';
			print '<br>';
		}
	}
	print '<br>';
	print '<p class="title">空き予定物件一覧</p>';

	print '<form method="post" action="estate_branch.php">';

	while(true){
		$rec3=$stmt3->fetch(PDO::FETCH_ASSOC);

		if($rec3==false){
			break;
		}
		print '<a href="akiyote/estate_disp_akiyote.php?code='.$rec3['code'].'">';
		print '物件名【'.$rec3['real_name'].'】　　';
		print $rec3['roomNumber'].'号室　　';
		// print '〒'.$rec['post1'].'-'.$rec['post2'].'　　';
		print $rec3['address'].'　　';
		print number_format($rec3['yachin']).'円　　';
		print number_format($rec3['kyoeki']).'円　　';
		print '空き予定日：'.$rec3['akiyoteDay'].'';
		print '</a>';
		print '<br>';

	}
	print '<br>';
	print '<p class="title">リフォーム中物件一覧</p>';

	print '<form method="post" action="estate_branch.php">';

	while(true){
		$rec4=$stmt4->fetch(PDO::FETCH_ASSOC);

		if($rec4==false){
			break;
		}
		print '<a href="reform/estate_disp_reform.php?code='.$rec4['code'].'">';
		print '物件名【'.$rec4['real_name'].'】　　';
		print $rec4['roomNumber'].'号室　　';
		// print '〒'.$rec['post1'].'-'.$rec['post2'].'　　';
		print $rec4['address'].'　　';
		print number_format($rec4['yachin']).'円　　';
		print number_format($rec4['kyoeki']).'円　　';
		print 'リフォーム完了日：'.$rec4['reformDay'].'';
		print '</a>';
		print '<br>';
	}
	print '<br>';
	print '<a href="keiyaku/estate_list_keiyaku.php" class="keiyaku_list"><p>契約済一覧ページ</p></a>';



  print '<div class="select">';
	print '<input type="submit" name="shinki" value="新規">';
	print '<input type="submit" name="owner" value="オーナー情報">';
	print '</form>';
	print '</div>';
}
	catch(Exception $e){
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		exit();
	}

	 ?>




<a href="estate_email1.php"><div class="kushitsu">空室連絡</div></a>




</div>

<div class="box6">
	<div class="box6-inner">
	<div class="copyright">
		<p>Copyright &copy; enjoy</p>
	</div>
	</div>
</div>

</body>
</html>
