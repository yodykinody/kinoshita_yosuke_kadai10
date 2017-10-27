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
			$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
		  $user='root';
		  $password='';
		  $dbh=new PDO($dsn,$user,$password);
		  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql=$dbh->prepare('SELECT * FROM estate WHERE code=?');
		  $sql->execute([$_REQUEST['code']]);
		  $rec=$sql->fetch(PDO::FETCH_ASSOC);

			$real_code=$rec['code'];
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
			$moshikomiCompany=$rec['moshikomiCompany'];
			$moshikomiTel1=$rec['moshikomiTel1'];
			$moshikomiTel2=$rec['moshikomiTel2'];
			$moshikomiTel3=$rec['moshikomiTel3'];

			$keiyakusya1=$rec['keiyakusya1'];
			$keiyaku1Tel1=$rec['keiyaku1Tel1'];
			$keiyaku1Tel2=$rec['keiyaku1Tel2'];
			$keiyaku1Tel3=$rec['keiyaku1Tel2'];

			$hosyonin1=$rec['hosyonin1'];
			$hosyonin1Tel1=$rec['hosyonin1Tel1'];
			$hosyonin1Tel2=$rec['hosyonin1Tel2'];
			$hosyonin1Tel3=$rec['hosyonin1Tel3'];



			$dbh=null;




}

catch(Exception $e){
  print 'ただいま障害により大変ご迷惑をお掛けしております。';
  exit();
}


	 ?>



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

	        </div>
	    </div>
	    </div>
	  </div>




		<div class="boxB">

			<p style="font-size:18px;font-weight:bold;"></p>
			<span style="font-size:15px;">物件名：<?php echo $real_name; ?></span></span><br>


			<p><span style="font-size:15px;">住所：〒<?php echo $post1; ?></span> - <span><?php echo $post2; ?></span>
			<?php echo $address; ?>

			<table>
				<tr>
					<td style="font-size:15px;">部屋番号 : <?php echo $roomNumber; ?>　</td>
					<td style="font-size:15px;">家賃 : <?php echo number_format($yachin); ?> 円　</td>
					<td style="font-size:15px;">共益費 : <?php echo number_format($kyoeki); ?> 円　</td>
					<td style="font-size:15px;">敷金 : <?php echo $shiki; ?>ヶ月　</td>
					<td style="font-size:15px;">礼金 : <?php echo $rei; ?>ヶ月　</td>
					<td style="font-size:15px;">間取り : <?php echo $madoriType; ?>　</td>
				</tr>
			</table>

			<?php echo $madori; ?>
			<br>


			<p>仲介会社：<?php echo $moshikomiCompany;?>
			<?php if(!($moshikomiTel1)==""){
				echo '　電話番号：'.$moshikomiTel1.'-'.$moshikomiTel2.'-'.$moshikomiTel3;
			}else{
				echo "";
			} ?>
		</p>
			<p>契約者：<?php echo $keiyakusya1; ?>
				<?php if(!($keiyaku1Tel1)==""){
					echo '　電話番号：'.$keiyaku1Tel1.'-'.$keiyaku1Tel2.'-'.$keiyaku1Tel3;
				}else{
					echo "";
				} ?>
			</p>

			<p>連帯保証人：<?php echo $hosyonin1; ?>
				<?php if(!($hosyonin1Tel1)==""){
					echo '　電話番号：'.$hosyonin1Tel1.'-'.$hosyonin1Tel2.'-'.$hosyonin1Tel3;
				}else{
					echo "";
				} ?>
			</p>


			<table>
				<?php


				print  '<tr>';
				print '<form method="post" action="../estate_branch.php">';
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
				print '<input type="hidden" name="moshikomiCompany" value="'.$moshikomiCompany.'">';
				print '<input type="hidden" name="moshikomiTel1" value="'.$moshikomiTel1.'">';
				print '<input type="hidden" name="moshikomiTel2" value="'.$moshikomiTel2.'">';
				print '<input type="hidden" name="moshikomiTel3" value="'.$moshikomiTel3.'">';

				print '<input type="hidden" name="keiyakusya1" value="'.$keiyakusya1.'">';
				print '<input type="hidden" name="keiyaku1Tel1" value="'.$keiyaku1Tel1.'">';
				print '<input type="hidden" name="keiyaku1Tel2" value="'.$keiyaku1Tel2.'">';
				print '<input type="hidden" name="keiyaku1Tel3" value="'.$keiyaku1Tel3.'">';

				print '<input type="hidden" name="hosyonin1" value="'.$hosyonin1.'">';
				print '<input type="hidden" name="hosyonin1Tel1" value="'.$hosyonin1Tel1.'">';
				print '<input type="hidden" name="hosyonin1Tel2" value="'.$hosyonin1Tel2.'">';
				print '<input type="hidden" name="hosyonin1Tel3" value="'.$hosyonin1Tel3.'">';

				print '<td><input type="button" onclick="history.back()" value="戻る"></td>';
				print '<td><input type="submit" name="akiyote" value="空き予定にする"></td>';
				print '<td><input type="submit" name="keiyaku_edit" value="情報修正"></td>';
				// print '<td><input type="submit" value="登録する"></td>';
				print '</tr>';


				 ?>

			</table>


			 </div>

</form>

<div class="box6">
	<div class="box6-inner">
	<div class="copyright">
		<p>Copyright &copy; enjoy</p>
	</div>
	</div>
</div>


<script type="text/javascript">
jQuery(document).ready(function(){
	 jQuery("#estate").validationEngine();
});
</script>

</body>
</html>
