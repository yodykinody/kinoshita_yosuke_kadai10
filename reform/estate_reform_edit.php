<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail20.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" >
<script src="../datepicker-ja.js"></script>



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

			$sql=$dbh->prepare('SELECT * FROM estate WHERE code=?');
		  $sql->execute([$_REQUEST['code']]);
		  $rec=$sql->fetch(PDO::FETCH_ASSOC);

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


			}

			catch(Exception $e){
			  print 'ただいま障害により大変ご迷惑をお掛けしております。';
			  exit();
			}

			 ?>
			 <form method="post" action="estate_reform_edit_che.php">
			 <p style="margin-top:70px;font-size:16px;"><?php echo '物件名【'.$real_name.'　'.$roomNumber.'号室】　住所：'.$address?></p>

			 <table>
 				<tr>
 					<td style="font-size:16px;">部屋番号 : <input type="text" name="roomNumber" style="width:40px;font-size:16px;" value="<?php echo $roomNumber;?>">　</td>
 					<td style="font-size:16px;">家賃 : <input type="text" name="yachin" style="width:100px;font-size:16px;" value="<?php echo $yachin;?>"> 円　</td>
 					<td style="font-size:16px;">共益費 : <input type="text" name="kyoeki" style="width:70px;font-size:16px;" value="<?php echo $kyoeki;?>"> 円　</td>
 					<td style="font-size:16px;">敷金 : <input type="text" name="shiki" style="width:30px;font-size:16px;" value="<?php echo $shiki;?>">ヶ月　</td>
 					<td style="font-size:16px;">礼金 : <input type="text" name="rei" style="width:30px;font-size:16px;" value="<?php echo $rei;?>">ヶ月　</td>
					<td style="font-size:16px;">間取り : <select name="madoriType" style="font-size:14px;">
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

			 <p style="font-size:16px;">リフォーム完了予定日：<span class="calender"><input type="text" class="datepicker"  name="reformDay"  style="font-size:20px;height:30px;" value="<?php echo $reformDay; ?>"></span></p>

			 <p style="font-size:16px;">リフォーム内容：<textarea class="reform_naiyo" name="reform_naiyo" cols="300" placeholder="300字以内で入力して下さい。(未入力だと「クリーニング」の内容になります。)"><?php echo $reform_naiyo; ?></textarea></p>
 			<br>


			<p>鍵の所在地：<input type="text" name="keyLocation" style="width:200px;font-size:16px;" value="<?php echo $keyLocation;?>"></p>
			<br>
			<p>仲介会社アドレス（登録したアドレスに空室状況等をお送りします。）</p>
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




					<div class="photoGallery3">
					  <div class="bottomLine">
					    <table>
					      <?php
					      print '<input type="hidden" name="code" value="'.$real_code.'">';
								print '<input type="hidden" name="real_name" value="'.$real_name.'">';
								print '<input type="hidden" name="post1" value="'.$post1.'">';
								print '<input type="hidden" name="post2" value="'.$post2.'">';
								print '<input type="hidden" name="address" value="'.$address.'">';
								// print '<input type="hidden" name="roomNumber" value="'.$roomNumber.'">';
								// print '<input type="hidden" name="yachin" value="'.$yachin.'">';
								// print '<input type="hidden" name="kyoeki" value="'.$kyoeki.'">';
								// print '<input type="hidden" name="shiki" value="'.$shiki.'">';
								// print '<input type="hidden" name="rei" value="'.$rei.'">';
								// print '<input type="hidden" name="madori" value="'.$madori.'">';
								// print '<input type="hidden" name="madoriType" value="'.$madoriType.'">';
								// print '<input type="hidden" name="keyLocation" value="'.$keyLocation.'">';
								// print '<input type="hidden" name="email1" value="'.$email1.'">';
								// print '<input type="hidden" name="email2" value="'.$email2.'">';
								// print '<input type="hidden" name="email3" value="'.$email3.'">';
								// print '<input type="hidden" name="email4" value="'.$email4.'">';
								// print '<input type="hidden" name="email5" value="'.$email5.'">';
								// print '<input type="hidden" name="company1" value="'.$company1.'">';
								// print '<input type="hidden" name="company2" value="'.$company2.'">';
								// print '<input type="hidden" name="company3" value="'.$company3.'">';
								// print '<input type="hidden" name="company4" value="'.$company4.'">';
								// print '<input type="hidden" name="company5" value="'.$company5.'">';
								// print '<input type="hidden" name="other" value="'.$other.'">';
								// print '<input type="hidden" name="reformDay" value="'.$reformDay.'">';
								// print '<input type="hidden" name="reform_naiyo" value="'.$reform_naiyo.'">';

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

<script>
	 $(function() {
		 $(".datepicker").on('focus',function(){
			 $(".datepicker").datepicker();
			 $(".datepicker").datepicker("option", "showOn", 'both');
			 $(".datepicker").datepicker("option", "buttonImageOnly", true);
			 $(".datepicker").datepicker("option", "buttonImage", '../img/calender.png');
			 $(".datepicker").datepicker("option", "showOtherMonths", true);
			 $(".datepicker").datepicker("option", "selectOtherMonths", true);
			 $(".datepicker").datepicker("option", "changeYear", true);
			 $(".datepicker").datepicker("option", "changeMonth", true);
			 $(".datepicker").datepicker("option", "dateFormat", 'yy年mm月dd日');
			 $(".datepicker").datepicker("option", "minDate", '0');
		 });
	 });


</script>


</body>
</html>
