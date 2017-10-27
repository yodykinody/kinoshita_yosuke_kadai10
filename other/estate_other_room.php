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

$dbh=null;


//物件選択
$dsn2='mysql:dbname=php_shop;host=localhost;charset=utf8';
$user2='root';
$password2='';
$dbh2=new PDO($dsn2,$user2,$password2);
$dbh2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql2='select * from estate where real_name="'.$real_name.'" order by roomNumber  ';
$stmt2=$dbh2->prepare($sql2);
$stmt2->execute();


$dbh2=null;




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

		<form method="post" action="estate_other_room_che.php" enctype="multipart/form-data" id="estate">
			<input type="hidden" name="code" value="<?php print $real_code; ?>">


		<p style="font-size:18px;font-weight:bold;">物件の情報をご入力下さい。</p>
		<span style="font-size:15px;">物件名：<input type="text" name="real_name" placeholder="物件名" style="font-size:15px;" value="<?php echo $real_name; ?>"></span></span><br>


		<p><span style="font-size:15px;">住所：〒<input type="text" name="post1" style="width:35px;font-size:15px;" value="<?php echo $post1;?>"></span> - <span><input type="text" name="post2" style="width:45px;font-size:15px;" value="<?php echo $post2;?>"></span>
		<input type="text" name="address" style="margin-left:10px;width:300px;font-size:15px;" value="<?php echo $address;?>">

		<table>
			<tr>
				<td style="font-size:15px;">部屋番号 : <input type="text" name="roomNumber" style="width:40px;font-size:16px;">　</td>
				<td style="font-size:15px;">家賃 : <input type="text" name="yachin" style="width:100px;font-size:16px;" value="<?php echo $yachin;?>"> 円　</td>
				<td style="font-size:15px;">共益費 : <input type="text" name="kyoeki" style="width:70px;font-size:16px;" value="<?php echo $kyoeki;?>"> 円　</td>
				<td style="font-size:15px;">敷金 : <input type="text" name="shiki" style="width:30px;font-size:16px;" value="<?php echo $shiki;?>">ヶ月　</td>
				<td style="font-size:15px;">礼金 : <input type="text" name="rei" style="width:30px;font-size:16px;" value="<?php echo $rei;?>">ヶ月</td>
			</tr>
		</table>
				<p style="font-size:15px;"><span style="color:red;">（部屋番号は<?php
				while(true){
					$rec2=$stmt2->fetch(PDO::FETCH_ASSOC);

					if($rec2==false){
						break;
					}
					echo $roomNumber2=$rec2['roomNumber'];
					echo '<span style="margin-right:8px;"></span>';
				};
				 ?>以外を選択して下さい。）</span></p>

		<br>
		<p>間取りのデータを選択して下さい。</p>
		<input type="file" name="madori" style="width:400px"><br>

		<p>間取りを選択して下さい。</p>
		<select name="madoriType">
<option value="1R"<? if($madoriType == "1R"){print " selected";} ?>>1R</option>
<option value="1K"<? if($madoriType == "1K"){print " selected";} ?>>1K</option>
<option value="1DK"<? if($madoriType == "1K"){print " selected";} ?>>1DK</option>
<option value="1LDK"<? if($madoriType == "1LDK"){print " selected";} ?>>1LDK</option>
<option value="2K"<? if($madoriType == "2K"){print " selected";} ?>>2K</option>
<option value="2DK"<? if($madoriType == "2K"){print " selected";} ?>>2DK</option>
<option value="2LDK"<? if($madoriType == "2LDK"){print " selected";} ?>>2LDK</option>
<option value="3K"<? if($madoriType == "3K"){print " selected";} ?>>3K</option>
<option value="3DK"<? if($madoriType == "3DK"){print " selected";} ?>>3DK</option>
<option value="3LDK"<? if($madoriType == "3LDK"){print " selected";} ?>>3LDK</option>
<option value="4DK"<? if($madoriType == "4DK"){print " selected";} ?>>4DK</option>
<option value="4LDK"<? if($madoriType == "4LDK"){print " selected";} ?>>4LDK</option>
<option value="5LDK"<? if($madoriType == "5LDK"){print " selected";} ?>>5LDK</option>
<option value="5LDK以上"<? if($madoriType == "5LDK以上"){print " selected";} ?>>5LDK以上</option>
		</select>

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


		<table>
			<tr>
				<td><input type="button" onclick="history.back()" value="戻る" ></td>
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
