<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail20.css">
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


			$real_code=$_GET['code'];

			$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
		  $user='root';
		  $password='';
		  $dbh=new PDO($dsn,$user,$password);
		  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql='SELECT real_name,post1,post2,address,roomNumber,yachin,kyoeki,shiki,rei,madori,madoriType,keyLocation,email1,email2,email3,email4,email5,company1,company2,company3,company4,company5,other,reformDay,reform_naiyo,moshikomiCompany,moshikomiTel1,moshikomiTel2,moshikomiTel3 FROM estate WHERE code=?';
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
			$reformDay=$rec['reformDay'];
			$reform_naiyo=$rec['reform_naiyo'];
			$moshikomiCompany=$rec['moshikomiCompany'];
			$moshikomiTel1=$rec['moshikomiTel1'];
			$moshikomiTel2=$rec['moshikomiTel2'];
			$moshikomiTel3=$rec['moshikomiTel3'];
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
					<td style="font-size:15px;">間取り : <?php echo $madoriType; ?></td>
				</tr>
			</table>



						<br>


						<p>鍵の所在地：<?php echo $keyLocation; ?></p>
						<p>その他費用等</p>
						<p><?php  echo $other; ?></p>
						<br>
						<p>リフォーム完了予定日：<?php echo $reformDay; ?></p>
						<table class="reform_table">
							<tr>
								<td style="font-size:16px;vertical-align:top;">リフォーム内容：</td><td class="reform_naiyo_span">
									<?php echo nl2br($reform_naiyo); ?>
						 </td>
					 </tr>
					 </table>
						<p style="color:red;font-weight:bold;">申込会社：<?php echo $moshikomiCompany;?>
						<?php if(!($moshikomiTel1)==""){
							echo '　電話番号：'.$moshikomiTel1.'-'.$moshikomiTel2.'-'.$moshikomiTel3;
						}else{
							echo "";
						} ?>
					</p>
					<br>


			<div class="photoGallery3">
			  <h3>上記の物件を申込解除しますか？</h3>
			  <div class="bottomLine">
			    <table>
			      <?php
			      print '<form method="post" action="estate_reform_moshikomi_cansel_do.php">';
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
						print '<input type="hidden" name="reformDay" value="'.$reformDay.'">';
						print '<input type="hidden" name="reform_naiyo" value="'.$reform_naiyo.'">';
						print '<input type="hidden" name="moshikomiCompany" value="'.$moshikomiCompany.'">';
						print '<input type="hidden" name="moshikomiTel1" value="'.$moshikomiTel1.'">';
						print '<input type="hidden" name="moshikomiTel2" value="'.$moshikomiTel2.'">';
						print '<input type="hidden" name="moshikomiTel3" value="'.$moshikomiTel3.'">';



			      print  '<tr>';
			      print '<td><input type="button" onclick="history.back()" value="戻る" style="margin-right:15px;"></td>';
			      print '<td><input type="submit" value="申込解除する"></td>';
			      print '</tr>';
			      print '</form>';

			       ?>

			    </table>
			 </div>
		 </div>
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
