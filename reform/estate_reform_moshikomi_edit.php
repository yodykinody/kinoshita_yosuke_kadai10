<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail20.css">
<!-- <link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script> -->

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

$real_code=$_GET['code'];

$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT real_name,post1,post2,address,roomNumber,yachin,kyoeki,shiki,rei,madori,madoriType,keyLocation,email1,email2,email3,email4,email5,company1,company2,company3,company4,company5,other,moshikomiCompany,moshikomiTel1,moshikomiTel2,moshikomiTel3,reformDay,reform_naiyo FROM estate WHERE code=?';
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


$dbh=null;


//物件選択


}
catch(Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}


// while(true){
// 	$rec2=$stmt2->fetch(PDO::FETCH_ASSOC);
//
// 	if($rec2==false){
// 		break;
// 	}
// 	$roomNumber2=$rec2['roomNumber'];
// 	$roomNumber2.='<span style="margin-right:8px;"></span>';
// }


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
          <ul>

          </ul>
        </div>
    </div>
    </div>
  </div>
  <!--//ヘッダーメニュー-->

	<div class="boxB">

		<form method="post" action="estate_reform_moshikomi_edit_che.php" enctype="multipart/form-data" id="estate">
			<input type="hidden" name="code" value="<?php print $real_code; ?>">


		<p style="font-size:18px;font-weight:bold;">物件の情報をご入力下さい。</p>
		<span style="font-size:15px;">物件名：<?php echo $real_name; ?></span></span><br>


		<p><span style="font-size:15px;">住所：〒<?php echo $post1;?></span> - <span><?php echo $post2;?>　</span>
		<?php echo $address;?>

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
				</select>
				</td>
			</tr>
		</table>


		<br>
		<p>間取りのデータを選択して下さい。</p>
		<input type="file" name="madori" style="width:400px"><br>
		<p>鍵の所在地：<input type="text" name="keyLocation" style="width:200px;font-size:16px;" value="<?php echo $keyLocation;?>"></p>
		<p>その他費用等</p>
		<p><textarea name="other" rows="4" cols="40" ><?php echo $other; ?></textarea></p>

		<br>

		<p style="font-size:16px;">リフォーム完了予定日：<span class="calender"><input type="text" class="datepicker"  name="reformDay"  style="font-size:20px;height:30px;" value="<?php echo $reformDay; ?>"></span></p>

		<p style="font-size:16px;">リフォーム内容：<textarea class="reform_naiyo" name="reform_naiyo" cols="300" placeholder="300字以内で入力して下さい。(未入力だと「クリーニング」の内容になります。)"><?php echo $reform_naiyo; ?></textarea></p>
	 <br>






		<p style="color:red;">申込会社：<input type=text name="moshikomiCompany" value="<?php echo $moshikomiCompany;?>" style="font-size:16px;">　
			電話番号：<input type=text name="moshikomiTel1" value="<?php echo $moshikomiTel1;?>" style="font-size:16px;width:70px;">-<input type=text name="moshikomiTel2" value="<?php echo $moshikomiTel2;?>" style="font-size:16px;width:70px;">-<input type=text name="moshikomiTel3" value="<?php echo $moshikomiTel3;?>" style="font-size:16px;width:70px;"></p>
			<br>

		<p>下記の仲介会社に申込連絡をします。</p>
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

		<br>


		<table class="return_button">
			<tr>
				<td><input type="button" onclick="history.back()" value="戻る" ></td>
				<?php
				print '<input type="hidden" name="real_name" value="'.$real_name.'">';
				print '<input type="hidden" name="post1" value="'.$post1.'">';
				print '<input type="hidden" name="post2" value="'.$post2.'">';
				print '<input type="hidden" name="address" value="'.$address.'">';

				 ?>
				<td><input type="submit" value="確認する"></td>
			</tr>
		</table>


		 </div>

	</form>




<!--コピーライト-->
  <div class="box6">
    <div class="box6-inner">
    <div class="copyright">
      <p>Copyright &copy; enjoy</p>
    </div>
    </div>
 </div>


 <!-- <script type="text/javascript">
 jQuery(document).ready(function(){
    jQuery("#real").validationEngine();
 });
 </script> -->

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
