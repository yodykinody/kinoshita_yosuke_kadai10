<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail16.css">
</head>
<body>
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

			<form method="post" action="estate_add_che.php" enctype="multipart/form-data" id="estate">
			<p style="font-size:18px;font-weight:bold;">物件の情報をご入力下さい。</p>
			<span style="font-size:15px;">物件名：<input type="text" name="real_name" placeholder="物件名" style="font-size:15px;"></span></span><br>


			<p><span style="font-size:15px;">住所：〒<input type="text" name="post1" style="width:35px;font-size:15px;"></span> - <span><input type="text" name="post2" style="width:45px;font-size:15px;"></span>
			<input type="text" name="address" style="margin-left:10px;width:300px;font-size:15px;" placeholder="住所を入力">

			<table>
				<tr>
					<td style="font-size:15px;">部屋番号 : <input type="text" name="roomNumber" style="width:40px;font-size:16px;">　</td>
					<td style="font-size:15px;">家賃 : <input type="text" name="yachin" style="width:100px;font-size:16px;"> 円　</td>
					<td style="font-size:15px;">共益費 : <input type="text" name="kyoeki" style="width:70px;font-size:16px;"> 円　</td>
					<td style="font-size:15px;">敷金 : <input type="text" name="shiki" style="width:30px;font-size:16px;">ヶ月　</td>
					<td style="font-size:15px;">礼金 : <input type="text" name="rei" style="width:30px;font-size:16px;">ヶ月</td>
				</tr>
			</table>

			<br>
			<p>間取りのデータを選択して下さい。</p>
			<input type="file" name="madori" style="width:400px"><br>

			<p>間取りを選択して下さい。</p>
			<select name="madoriType">
				<option value="" disabled selected>間取りを選択</option>
				<option value="1R">1R</option>
				<option value="1K">1K</option>
				<option value="1DK">1DK</option>
				<option value="1LDK">1LDK</option>
				<option value="2K">2K</option>
				<option value="2DK">2DK</option>
				<option value="2LDK">2LDK</option>
				<option value="3K">3K</option>
				<option value="3DK">3DK</option>
				<option value="3LDK">3LDK</option>
				<option value="4K">4K</option>
				<option value="4LDK">4LDK</option>
				<option value="5LDK">5LDK</option>
				<option value="5LDK以上">5LDK以上</option>
			</select>

			<br>
			<p>鍵の所在地：<input type="text" name="keyLocation" style="width:200px;font-size:16px;"></p>
			<br>
			<p>仲介会社アドレス（登録したアドレスに空室状況等をお送りします。）</p>
			<table>
				<tr>
						<td><input type="text" name="email1" placeholder="1社目アドレス" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company1" placeholder="会社名" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email2" placeholder="2社目アドレス" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company2" placeholder="会社名" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email3" placeholder="3社目アドレス" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company3" placeholder="会社名" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email4" placeholder="4社目アドレス" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company4" placeholder="会社名" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>

				<tr>
						<td><input type="text" name="email5" placeholder="5社目アドレス" style="margin-right:10px;font-size:15px;width:200px;"></td>
						<td><input type="text" name="company5" placeholder="会社名" style="margin-right:10px;font-size:15px;width:200px;" ></td>
				</tr>


			</table>

			<br>
			<br>
			<p>その他費用等</p>
			<p><textarea name="other" rows="4" cols="40" ></textarea></p>
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
