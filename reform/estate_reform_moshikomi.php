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
			 <form method="post" action="estate_reform_moshikomi_che.php">
			 <p style="margin-top:70px;font-size:16px;"><?php echo '物件名【'.$real_name.'　'.$roomNumber.'号室】　住所：'.$address?></p>

			 <table>
 				<tr>
 					<td style="font-size:15px;">部屋番号 : <input type="text" name="roomNumber" style="width:40px;font-size:16px;" value="<?php echo $roomNumber;?>">　</td>
 					<td style="font-size:15px;">家賃 : <input type="text" name="yachin" style="width:100px;font-size:16px;" value="<?php echo $yachin;?>"> 円　</td>
 					<td style="font-size:15px;">共益費 : <input type="text" name="kyoeki" style="width:70px;font-size:16px;" value="<?php echo $kyoeki;?>"> 円　</td>
 					<td style="font-size:15px;">敷金 : <input type="text" name="shiki" style="width:30px;font-size:16px;" value="<?php echo $shiki;?>">ヶ月　</td>
 					<td style="font-size:15px;">礼金 : <input type="text" name="rei" style="width:30px;font-size:16px;" value="<?php echo $rei;?>">ヶ月</td>
					<td style="font-size:15px;">間取り : <?php echo $madoriType; ?></td>
 				</tr>
 			</table>

			 <p style="font-size:16px;">リフォーム完了予定日：<span class="calender"><input type="text" class="datepicker"  name="akiyoteDay"  style="font-size:20px;height:30px;" value="<?php echo $reformDay; ?>"></span></p>

			 <p style="font-size:16px;">リフォーム内容：<textarea class="reform_naiyo" name="reform_naiyo" cols="300" placeholder="300字以内で入力して下さい。(未入力だと「クリーニング」の内容になります。)"><?php echo $reform_naiyo; ?></textarea></p>
 			<br>



			 <p style="font-size:16px;color:red;font-weight:bold;">
				 <td>申込会社：<input type="text" name="moshikomiCompany" style="font-size:16px;">　　</td>
				 <td>申込会社連絡先：
					 <input type="text" name="moshikomiTel1" style="font-size:16px;width:70px;" maxlength="4"> -
					 <input type="text" name="moshikomiTel2" style="font-size:16px;width:70px;" maxlength="4"> -
					 <input type="text" name="moshikomiTel3" style="font-size:16px;width:70px;" maxlength="4">
				 </td>
			 </p>



					<div class="photoGallery3">
						<p style="font-size:16px;font-weight:bold;">申込会社情報を入力して登録して下さい。</p>
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
								print '<input type="hidden" name="reformDay" value="'.$reformDay.'">';
								print '<input type="hidden" name="reform_naiyo" value="'.$reform_naiyo.'">';

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
