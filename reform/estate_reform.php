<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail19.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" >

<script src="../datepicker-ja.js"></script>

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

			$timedate=$rec['timedate'];




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

			<form method="post" action="estate_reform_che.php" enctype="multipart/form-data" id="estate">
			<p style="font-size:20px;font-weight:bold;color:red;text-align:">リフォーム完了日：
<span class="calender"><input type="text" id="datepicker"  name="reformDay"  style="font-size:20px;height:30px;" placeholder="カレンダー表示"></span>
			</p>
			<p style="font-size:20px;font-weight:bold;">リフォーム内容：<textarea class="reform_naiyo" name="reform_naiyo" cols="300" placeholder="300字以内で入力して下さい。(未入力だと「クリーニング」の内容になります。)"></textarea></p>
			<br>

			<span style="font-size:15px;">物件名：<?php echo $real_name; ?></span></span><br>


			<p><span style="font-size:15px;">住所：〒<?php echo $post1;?></span> - <span><?php echo $post2;?>　</span>
			<?php echo $address;?>

			<table>
				<tr>
					<td style="font-size:15px;">部屋番号 : <?php echo $roomNumber;?>　</td>
					<td style="font-size:15px;">家賃 :<?php echo $yachin;?>円　</td>
					<td style="font-size:15px;">共益費 : <?php echo $kyoeki;?>円　</td>
					<td style="font-size:15px;">敷金 : <?php echo $shiki;?>ヶ月　</td>
					<td style="font-size:15px;">礼金 : <?php echo $rei;?>ヶ月　</td>
					<td style="font-size:15px;">間取り : <?php echo $madoriType;?></td>
				</tr>
			</table>


			<p>鍵の所在地：<?php echo $keyLocation;?></p>
			<br>
			<p>仲介会社のアドレス（リフォーム中である事を連絡します。）</p>
			<table>
				<tr>
						<td><input type="text" name="email1" placeholder="1社目アドレス" value="<?php echo $email1;?>" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company1" placeholder="会社名" value="<?php echo $company1;?>" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email2" placeholder="2社目アドレス" value="<?php echo $email2;?>" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company2" placeholder="会社名" value="<?php echo $company2;?>" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email3" placeholder="3社目アドレス" value="<?php echo $email3;?>" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company3" placeholder="会社名" value="<?php echo $company3;?>" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email4" placeholder="4社目アドレス" value="<?php echo $email4;?>" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company4" placeholder="会社名" value="<?php echo $company4;?>" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email5" placeholder="5社目アドレス" value="<?php echo $email5;?>" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company5" placeholder="会社名" value="<?php echo $company5;?>" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>


			</table>

			<br>
			<br>
			<p>その他費用等</p>
			<p><?php echo $other; ?></p>
			<br>
			<br>





			<table>
				<?php


				print  '<tr>';
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

				print '<td><input type="button" onclick="history.back()" value="戻る"></td>';
				print '<td><input type="submit" name="keiyaku_aki" value="入力確認"></td>';
				// print '<td><input type="submit" value="登録する"></td>';
				print '</tr>';


				 ?>

			</table>
		</form>


			 </div>

</form>

<div class="box6">
	<div class="box6-inner">
	<div class="copyright">
		<p>Copyright &copy; enjoy</p>
	</div>
	</div>
</div>


<!-- <script type="text/javascript">
jQuery(document).ready(function(){
	 jQuery("#estate").validationEngine();
});
</script> -->

<!-- カレンダー -->
<script>
  $(function() {
		$(function() {
	        $("#datepicker").datepicker();
	        $("#datepicker").datepicker("option", "showOn", 'both');
	        $("#datepicker").datepicker("option", "buttonImageOnly", true);
	        $("#datepicker").datepicker("option", "buttonImage", '../img/calender.png');
					$("#datepicker").datepicker("option", "showOtherMonths", true);
					$("#datepicker").datepicker("option", "selectOtherMonths", true);
					$("#datepicker").datepicker("option", "changeYear", true);
					$("#datepicker").datepicker("option", "changeMonth", true);
					$("#datepicker").datepicker("option", "dateFormat", 'yy年mm月dd日');
					$("#datepicker").datepicker("option", "minDate", '0');
	      });

  });
</script>


</body>
</html>
