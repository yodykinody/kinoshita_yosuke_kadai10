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
$madori=$_POST['madori'];
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

		<form method="post" action="estate_keiyaku_edit_do.php" enctype="multipart/form-data" id="estate">
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
		<p>仲介会社：<?php echo $moshikomiCompany;?>　
			<?php
			if(!($moshikomiTel1)==""){
				echo '電話番号：'.$moshikomiTel1.'-'.$moshikomiTel2.'-'.$moshikomiTel3;
			}else{
				echo "";
			}
			 ?>
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


		<br>
		<h3>上記の情報で修正しますか？</h3>

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

				 ?>
				<td><input type="submit" value="修正する"></td>
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
