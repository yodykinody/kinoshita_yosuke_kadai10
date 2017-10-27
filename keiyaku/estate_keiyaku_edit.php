<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail16.css">
<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

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

$sql='SELECT * FROM estate WHERE code=?';
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

		<form method="post" action="estate_keiyaku_edit_che.php" enctype="multipart/form-data" id="estate">
			<input type="hidden" name="code" value="<?php print $real_code; ?>">


		<p style="font-size:18px;font-weight:bold;">契約物件情報</p>
		<span style="font-size:15px;">物件名：<?php echo $real_name; ?></span></span><br>


		<p><span style="font-size:15px;">住所：〒<?php echo $post1;?></span> - <span><?php echo $post2;?>　</span>
		<?php echo $address;?>

		<table>
			<tr>
				<td style="font-size:15px;">部屋番号 : <?php echo $roomNumber;?>　</td>
				<td style="font-size:15px;">家賃 : <?php echo $yachin;?> 円　</td>
				<td style="font-size:15px;">共益費 : <?php echo $kyoeki;?> 円　</td>
				<td style="font-size:15px;">敷金 : <?php echo $shiki;?>ヶ月　</td>
				<td style="font-size:15px;">礼金 : <?php echo $rei;?>ヶ月</td>
				<td style="font-size:15px;">間取り : <?php echo $madoriType;?></td>
			</tr>
		</table>


		<br>
		<p><?php echo $madori; ?></p>
		<p>仲介会社：<?php echo $moshikomiCompany;?>　電話番号：
			<input type="text" name="moshikomiTel1" value="<?php echo $moshikomiTel1; ?>" style="font-size:16px;width:70px;" >-
			<input type="text" name="moshikomiTel2" value="<?php echo $moshikomiTel2; ?>" style="font-size:16px;width:70px;">-
			<input type="text" name="moshikomiTel3" value="<?php echo $moshikomiTel3; ?>" style="font-size:16px;width:70px;">
		</p>

			 <p>契約者：<input type="text" name="keiyakusya1" value="<?php echo $keiyakusya1; ?>" style="font-size:16px;">　電話番号：
				 <input type="text" name="keiyaku1Tel1" value="<?php echo $keiyaku1Tel1; ?>" style="font-size:16px;width:70px;" >-
				 <input type="text" name="keiyaku1Tel2" value="<?php echo $keiyaku1Tel2; ?>" style="font-size:16px;width:70px;">-
				 <input type="text" name="keiyaku1Tel3" value="<?php echo $keiyaku1Tel3; ?>" style="font-size:16px;width:70px;">
			 </p>

			 <p>連帯保証人：<input type="text" name="hosyonin1" value="<?php echo $hosyonin1; ?>" style="font-size:16px;">　電話番号：
				<input type="text" name="hosyonin1Tel1" value="<?php echo $hosyonin1Tel1; ?>" style="font-size:16px;width:70px;">-
				<input type="text" name="hosyonin1Tel2" value="<?php echo $hosyonin1Tel2; ?>" style="font-size:16px;width:70px;">-
				<input type="text" name="hosyonin1Tel3" value="<?php echo $hosyonin1Tel3; ?>" style="font-size:16px;width:70px;">
			</p>




		<table class="return_button">
			<tr>
				<td><input type="button" onclick="history.back()" value="戻る" ></td>
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
				print '<input type="hidden" name="moshikomiCompany" value="'.$moshikomiCompany.'">';
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


 <script type="text/javascript">
 jQuery(document).ready(function(){
    jQuery("#real").validationEngine();
 });
 </script>



</body>

</html>
