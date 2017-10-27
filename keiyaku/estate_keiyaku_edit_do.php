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
	        </div>
	      </div>
	  <!--//トップ-->

	    <!--ヘッダーメニュー-->
	    <div class="box2">
	        <div class="menu">

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

				$real_code=$_POST['code'];



				$real_name=$_POST['real_name'];
				$post1=$_POST['post1'];
				$post2=$_POST['post2'];
				$address=$_POST['address'];
				$roomNumber=$_POST['roomNumber'];
				$yachin=$_POST['yachin'];
				$kyoeki=$_POST['kyoeki'];
				$shiki=$_POST['shiki'];
				$rei=$_POST['rei'];
				$madoriType=$_POST['madoriType'];

				$moshikomiCompany=$_POST['moshikomiCompany'];
				$moshikomiTel1=$_POST['moshikomiTel1'];
				$moshikomiTel2=$_POST['moshikomiTel2'];
				$moshikomiTel3=$_POST['moshikomiTel3'];

				$keiyakusya1=$_POST['keiyakusya1'];
				$keiyaku1Tel1=$_POST['keiyaku1Tel1'];
				$keiyaku1Tel2=$_POST['keiyaku1Tel2'];
				$keiyaku1Tel3=$_POST['keiyaku1Tel3'];

				$hosyonin1=$_POST['hosyonin1'];
				$hosyonin1Tel1=$_POST['hosyonin1Tel1'];
				$hosyonin1Tel2=$_POST['hosyonin1Tel2'];
				$hosyonin1Tel3=$_POST['hosyonin1Tel3'];




			$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
			$user='root';
			$password='';
			$dbh=new PDO($dsn,$user,$password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql='UPDATE estate SET real_name=?,post1=?,post2=?,address=?,roomNumber=?,yachin=?,kyoeki=?,shiki=?,rei=?,madoriType=?,moshikomiCompany=?,moshikomiTel1=?,moshikomiTel2=?,moshikomiTel3=?,keiyakusya1=?,keiyaku1Tel1=?,keiyaku1Tel2=?,keiyaku1Tel3=?,hosyonin1=?,hosyonin1Tel1=?,hosyonin1Tel2=?,hosyonin1Tel3=? WHERE code=?';
			$stmt=$dbh->prepare($sql);
			$data[]=$real_name;
			$data[]=$post1;
			$data[]=$post2;
			$data[]=$address;
			$data[]=$roomNumber;
			$data[]=$yachin;
			$data[]=$kyoeki;
			$data[]=$shiki;
			$data[]=$rei;
			$data[]=$madoriType;

			$data[]=$moshikomiCompany;
			$data[]=$moshikomiTel1;
			$data[]=$moshikomiTel2;
			$data[]=$moshikomiTel3;

			$data[]=$keiyakusya1;
			$data[]=$keiyaku1Tel1;
			$data[]=$keiyaku1Tel2;
			$data[]=$keiyaku1Tel3;

			$data[]=$hosyonin1;
			$data[]=$hosyonin1Tel1;
			$data[]=$hosyonin1Tel2;
			$data[]=$hosyonin1Tel3;

			$data[]=$real_code;



			$stmt->execute($data);

			$dbh=null;

			print '<h3>修正しました</h3>';

			}
			catch (Exception $e)
			{
				print 'ただいま障害により大変ご迷惑をお掛けしております。';
				exit();
			}



			 ?>


			 		<a href="estate_list_keiyaku.php"><div class="return_list">戻る</div></a>





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
