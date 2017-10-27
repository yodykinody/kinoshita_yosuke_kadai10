<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail18.css">

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

			<form method="post" action="estate_akiyote_che.php" enctype="multipart/form-data" id="estate">
			<p style="font-size:25px;font-weight:bold;color:red;text-align:">空き予定日：
<span class="calender"><input type="text" id="datepicker"  name="akiyoteDay"  style="font-size:25px;height:30px;" placeholder="カレンダー表示"></span>
			</p>
			<br>

			<p style="font-size:18px;font-weight:bold;">前回（契約日：<?php  echo $timedate ?>）の条件です。</p>
			<span style="font-size:15px;">物件名：<input type="text" name="real_name" placeholder="物件名" style="font-size:15px;" value="<?php echo $real_name; ?>"></span></span><br>


			<p><span style="font-size:15px;">住所：〒<input type="text" name="post1" style="width:35px;font-size:15px;" value="<?php echo $post1;?>"></span> - <span><input type="text" name="post2" style="width:45px;font-size:15px;" value="<?php echo $post2;?>"></span>
			<input type="text" name="address" style="margin-left:10px;width:300px;font-size:15px;" value="<?php echo $address;?>">

			<table>
				<tr>
					<td style="font-size:15px;">部屋番号 : <input type="text" name="roomNumber" style="width:40px;font-size:16px;" value="<?php echo $roomNumber;?>">　</td>
					<td style="font-size:15px;">家賃 : <input type="text" name="yachin" style="width:100px;font-size:16px;" value="<?php echo $yachin;?>"> 円　</td>
					<td style="font-size:15px;">共益費 : <input type="text" name="kyoeki" style="width:70px;font-size:16px;" value="<?php echo $kyoeki;?>"> 円　</td>
					<td style="font-size:15px;">敷金 : <input type="text" name="shiki" style="width:30px;font-size:16px;" value="<?php echo $shiki;?>">ヶ月　</td>
					<td style="font-size:15px;">礼金 : <input type="text" name="rei" style="width:30px;font-size:16px;" value="<?php echo $rei;?>">ヶ月　</td>
					<td style="font-size:15px;">間取り : <select name="madoriType" style="font-size:14px;">
							<option value="1R"<? if($madoriType == "1R"){print " selected";} ?>>1R</option>
							<option value="1K"<? if($madoriType == "1K"){print " selected";} ?>>1K</option>
							<option value="1DK"<? if($madoriType == "1DK"){print " selected";} ?>>1DK</option>
							<option value="1LDK"<? if($madoriType == "1LDK"){print " selected";} ?>>1LDK</option>
							<option value="2K"<? if($madoriType == "2K"){print " selected";} ?>>2K</option>
							<option value="2DK"<? if($madoriType == "2DK"){print " selected";} ?>>2DK</option>
							<option value="2LDK"<? if($madoriType == "2LDK"){print " selected";} ?>>2LDK</option>
							<option value="3K"<? if($madoriType == "3K"){print " selected";} ?>>3K</option>
							<option value="3DK"<? if($madoriType == "3DK"){print " selected";} ?>>3DK</option>
							<option value="3LDK"<? if($madoriType == "3LDK"){print " selected";} ?>>3LDK</option>
							<option value="4DK"<? if($madoriType == "4DK"){print " selected";} ?>>4DK</option>
							<option value="4LDK"<? if($madoriType == "4LDK"){print " selected";} ?>>4LDK</option>
							<option value="5LDK"<? if($madoriType == "5LDK"){print " selected";} ?>>5LDK</option>
							<option value="5LDK以上"<? if($madoriType == "5LDK以上"){print " selected";} ?>>5LDK以上</option>
					</select></td>
				</tr>
			</table>

			<br>
			<p>間取りデータ</p>
			<input type="file" name="madori" style="width:400px"><br>



			<br>
			<p>鍵の所在地：<input type="text" name="keyLocation" style="width:200px;font-size:16px;" value="<?php echo $keyLocation;?>"></p>
			<br>
			<p>以前の仲介会社のアドレス（空き予定である事を連絡します。）</p>
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
			<p><textarea name="other" rows="4" cols="40" ><?php echo $other; ?></textarea></p>
			<br>
			<br>





			<table>
				<?php


				print  '<tr>';
				print '<input type="hidden" name="code" value="'.$real_code.'">';


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
