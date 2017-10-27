<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail16.css">
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
			try
			{


			$real_code=$_GET['code'];

			$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
			$user='root';
			$password='';
			$dbh=new PDO($dsn,$user,$password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql='SELECT real_name,post1,post2,address,roomNumber,yachin,kyoeki,shiki,rei,madori,madoriType,keyLocation,email1,email2,email3,email4,email5,company1,company2,company3,company4,company5,other FROM estate WHERE code=?';
			$stmt=$dbh->prepare($sql);
			$data[]=$real_code;
			$stmt->execute($data);

			$rec=$stmt->fetch(PDO::FETCH_ASSOC);

			$real_name=$rec['real_name'];
			$post1=$rec['post1'];
			$post2=$rec['post2'];
			$address=$rec['address'];
			$roomNumber=$rec['roomNumber'];
			$yachin=$rec['yachin'];
			$kyoeki=$rec['kyoeki'];
			$shiki=$rec['shiki'];
			$rei=$rec['rei'];
			$madori=$rec['madori'];
			$madoriType=$rec['madoriType'];
			$keyLocation=$rec['keyLocation'];
			$email1=$rec['email1'];
			$email2=$rec['email2'];
			$email3=$rec['email3'];
			$email4=$rec['email4'];
			$email5=$rec['email5'];
			$company1=$rec['company1'];
			$company2=$rec['company2'];
			$company3=$rec['company3'];
			$company4=$rec['company4'];
			$company5=$rec['company5'];
			$other=$rec['other'];


			}

			catch(Exception $e){
			  print 'ただいま障害により大変ご迷惑をお掛けしております。';
			  exit();
			}

			 ?>
			 <form method="post" action="estate_moshikomi_che.php">
			 <p style="margin-top:70px;font-size:16px;"><?php echo '物件名【'.$real_name.'　'.$roomNumber.'号室】　住所：'.$address?></p>

			 <p><?php echo '家賃：'.number_format($yachin).'円　共益費：'.number_format($kyoeki).'円　'.$shiki.'ヶ月　'.$rei.'ヶ月　間取り：'.$madoriType; ?></p>

			 <p>
				 <td style="font-size:16px;">申込会社：<input type="text" name="moshikomiCompany" style="font-size:16px;">　　</td>
				 <td style="font-size:16px;">申込会社連絡先：
					 <input type="text" name="moshikomiTel1" style="font-size:16px;width:70px;"> -
					 <input type="text" name="moshikomiTel2" style="font-size:16px;width:70px;"> -
					 <input type="text" name="moshikomiTel3" style="font-size:16px;width:70px;">
				 </td>
			 </p>



					<div class="photoGallery3">
						<h3>申込会社情報を入力して登録して下さい。</h3>
					  <div class="bottomLine">
					    <table>
					      <?php
					      print '<input type="hidden" name="code" value="'.$real_code.'">';
								print '<input type="hidden" name="real_name" value="'.$real_name.'">';
								print '<input type="hidden" name="post1" value="'.$post1.'">';
								print '<input type="hidden" name="post2" value="'.$post2.'">';
								print '<input type="hidden" name="address" value="'.$address.'">';
								print '<input type="hidden" name="roomNumber" value="'.$roomNumber.'">';
								print '<input type="hidden" name="yachin" value="'.$yachin.'">';
								print '<input type="hidden" name="kyoeki" value="'.$kyoeki.'">';
								print '<input type="hidden" name="shiki" value="'.$shiki.'">';
								print '<input type="hidden" name="rei" value="'.$rei.'">';
								print '<input type="hidden" name="madori" value="'.$madori.'">';
								print '<input type="hidden" name="madoriType" value="'.$madoriType.'">';
								print '<input type="hidden" name="keyLocation" value="'.$keyLocation.'">';
								print '<input type="hidden" name="email1" value="'.$email1.'">';
								print '<input type="hidden" name="email2" value="'.$email2.'">';
								print '<input type="hidden" name="email3" value="'.$email3.'">';
								print '<input type="hidden" name="email4" value="'.$email4.'">';
								print '<input type="hidden" name="email5" value="'.$email5.'">';
								print '<input type="hidden" name="company1" value="'.$company1.'">';
								print '<input type="hidden" name="company2" value="'.$company2.'">';
								print '<input type="hidden" name="company3" value="'.$company3.'">';
								print '<input type="hidden" name="company4" value="'.$company4.'">';
								print '<input type="hidden" name="company5" value="'.$company5.'">';
								print '<input type="hidden" name="other" value="'.$other.'">';



					      print  '<tr>';
					      print '<td><input type="button" onclick="history.back()" value="戻る" style="margin-right:15px;"></td>';
					      print '<td><input type="submit" value="入力確認"></td>';
					      print '</tr>';
					      print '</form>';

					       ?>

					    </table>

			  </div>

			 </div>


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
