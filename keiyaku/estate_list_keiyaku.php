<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail17.css">
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
	$sql='SELECT * FROM estate WHERE keiyaku="1" ORDER BY real_name  ASC,roomNumber';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();


	$dbh=null;

	print '<p class="title">契約済一覧</p>';

	while(true){
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);

		if($rec==false){
			break;
		}
		print '<a href="estate_disp_keiyaku.php?code='.$rec['code'].'">';
		print '物件名【'.$rec['real_name'].'】　　';
		print $rec['roomNumber'].'号室　　';
		// print '〒'.$rec['post1'].'-'.$rec['post2'].'　　';
		print $rec['address'].'　　';
		print number_format($rec['yachin']).'円　　';
		print number_format($rec['kyoeki']).'円　　';
		print '契約日時'.$rec['timedate'];
		print '</a>';
		print '<br>';
	}

	// print '<form method="post" action="estate_branch.php">';

	// while(true){
	// 	$rec2=$stmt2->fetch(PDO::FETCH_ASSOC);
	//
	// 	if($rec2==false){
	// 		break;
	// 	}
	// 	print '<a href="moshikomi/estate_disp_moshikomi.php?code='.$rec2['code'].'">';
	// 	print '物件名【'.$rec2['real_name'].'】　　';
	// 	print $rec2['roomNumber'].'号室　　';
	// 	// print '〒'.$rec2['post1'].'-'.$rec2['post2'].'　　';
	// 	print $rec2['address'].'　　';
	// 	print number_format($rec2['yachin']).'円　　';
	// 	print number_format($rec2['kyoeki']).'円　　';
	// 	print $rec2['timedate'];
	// 	print '</a>';
	// 	print '<br>';
	// }


}
	catch(Exception $e){
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		exit();
	}

	 ?>




	 <a href="../estate_list.php"><div class="return_list">空室一覧へ戻る</div></a>




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
