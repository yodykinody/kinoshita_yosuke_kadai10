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
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION['login'])==false){
    print 'ログインされていません。';
    print '<br>';
    print '<a href="estate_login.php">ログイン画面へ</a>';
    exit();
  }
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
$keyLocation=$_POST['keyLocation'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$email3=$_POST['email3'];
$email4=$_POST['email4'];
$email5=$_POST['email5'];

$company1=$_POST['company1'];
$company2=$_POST['company2'];
$company3=$_POST['company3'];
$company4=$_POST['company4'];
$company5=$_POST['company5'];
$other=$_POST['other'];


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

		<form method="post" action="estate_edit_che.php" enctype="multipart/form-data" id="estate">
			<input type="hidden" name="code" value="<?php print $real_code; ?>">


		<p style="font-size:18px;font-weight:bold;">物件の情報をご入力下さい。</p>
		<span style="font-size:15px;">物件名：<input type="text" name="real_name" placeholder="物件名" style="font-size:15px;" value="<?php echo $real_name; ?>"></span></span><br>


		<p><span style="font-size:15px;">住所：〒<input type="text" name="post1" style="width:35px;font-size:15px;" value="<?php echo $post1;?>"></span> - <span><input type="text" name="post2" style="width:45px;font-size:15px;" value="<?php echo $post2;?>"></span>
		<input type="text" name="address" style="margin-left:10px;width:300px;font-size:15px;" value="<?php echo $address;?>">

		<table>
			<tr>
				<td style="font-size:15px;">部屋番号 : <input type="text" name="roomNumber" style="width:40px;font-size:16px;" value="<?php echo $roomNumber;?>">　</td>
				<td style="font-size:15px;">家賃 : <input type="text" name="yachin" style="width:100px;font-size:16px;" value="<?php echo $yachin;?>"> 円　</td>
				<td style="font-size:15px;">共益費 : <input type="text" name="kyoeki" style="width:70px;font-size:16px;" value="<?php echo $kyoeki;?>"> 円　</td>
				<td style="font-size:15px;">敷金 : <input type="text" name="shiki" style="width:30px;font-size:16px;" value="<?php echo $shiki;?>">ヶ月　</td>
				<td style="font-size:15px;">礼金 : <input type="text" name="rei" style="width:30px;font-size:16px;" value="<?php echo $rei;?>">ヶ月</td>
			</tr>
		</table>

		<br>
		<p>間取りのデータを選択して下さい。</p>
		<input type="file" name="madori" style="width:400px"><br>

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
