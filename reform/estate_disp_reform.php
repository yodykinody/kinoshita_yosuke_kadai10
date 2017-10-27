<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="../CSS/detail20.css">
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
			$reformDay=$rec['reformDay'];
			$reform_naiyo=$rec['reform_naiyo'];



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

			<p style="font-size:18px;font-weight:bold;"></p>
			<span style="font-size:15px;">物件名：<?php echo $real_name; ?></span></span><br>


			<p><span style="font-size:15px;">住所：〒<?php echo $post1; ?></span> - <span><?php echo $post2; ?>　</span>
			<?php echo $address; ?>

			<table>
				<tr>
					<td style="font-size:15px;">部屋番号 : <?php echo $roomNumber; ?>　</td>
					<td style="font-size:15px;">家賃 : <?php echo number_format($yachin); ?> 円　</td>
					<td style="font-size:15px;">共益費 : <?php echo number_format($kyoeki); ?> 円　</td>
					<td style="font-size:15px;">敷金 : <?php echo $shiki; ?>ヶ月　</td>
					<td style="font-size:15px;">礼金 : <?php echo $rei; ?>ヶ月　</td>
					<td style="font-size:15px;">間取り : <?php echo $madoriType; ?></td>
				</tr>
			</table>
			<p>鍵の所在地：<?php echo $keyLocation; ?></p>
			<?php echo $madori; ?>
			<br>
			<p style="font-weight:bold;color:red;">リフォーム完了予定日：<?php echo $reformDay;  ?></p>
			<table class="reform_table">
				<tr>
					<td style="font-size:16px;font-weight:bold;vertical-align:top;">リフォーム内容：</td><td class="reform_naiyo_span">
						<?php echo nl2br($reform_naiyo); ?>
			 </td>
		 </tr>
		 </table>



			<p>仲介会社アドレス（リフォーム中である事を連絡をします。）</p>

			<table>
				<?php


				if(!($email1)=="" && ($company1)==""){
					echo '<tr>';
					echo "<td>1社目：$email1</td>";
					echo '</tr>';
				}else if(!($email1=="") && !($company1)==""){
					echo "<tr>";
					echo "<td>1社目：$email1</td>";
					echo '<td>'.'【'.$company1.'】'.'</td>';
					echo "</tr>";

				}
				 ?>



				 <?php
				 if(!($email2)=="" && ($company2)==""){
					 echo '<tr>';
					 echo "<td>2社目：$email1</td>";
					 echo '</tr>';
				 }else if(!($email2=="") && !($company2)==""){
					 echo "<tr>";
					 echo "<td>2社目：$email2</td>";
					 echo '<td>'.'【'.$company2.'】'.'</td>';
					 echo "</tr>";

				 }
					?>

					<?php
					if(!($email3)=="" && ($company3)==""){
						echo '<tr>';
						echo "<td>3社目：$email3</td>";
						echo '</tr>';
					}else if(!($email3=="") && !($company3)==""){
						echo "<tr>";
						echo "<td>3社目：$email3</td>";
						echo '<td>'.'【'.$company3.'】'.'</td>';
						echo "</tr>";
					}else if(($email3)=="" && !($company3)==""){
						echo '<tr>';
						echo '<td style="color:red;">3社目：アドレスが入力されていません。</td>';
						echo '<td>'.'【'.$company3.'】'.'</td>';
						echo '</tr>';
					}
					 ?>


					 <?php
					 if(!($email4)=="" && ($company4)==""){
						 echo '<tr>';
						 echo "<td>4社目：$email4</td>";
						 echo '</tr>';
					 }else if(!($email4=="") && !($company4)==""){
						 echo "<tr>";
						 echo "<td>4社目：$email4</td>";
						 echo '<td>'.'【'.$company4.'】'.'</td>';
						 echo "</tr>";

					 }
						?>


						<?php
						if(!($email5)=="" && ($company5)==""){
							echo '<tr>';
							echo "<td>5社目：$email1</td>";
							echo '</tr>';
						}else if(!($email5=="") && !($company5)==""){
							echo "<tr>";
							echo "<td>5社目：$email5</td>";
							echo '<td>'.'【'.$company5.'】'.'</td>';
							echo "</tr>";
						}
						 ?>

				 </table>


			<br>
			<br>
			<p>その他費用等</p>
			<p><?php  echo $other; ?></p>
			<br>
			<br>


			<table>
				<?php


				print  '<tr>';
				print '<form method="post" action="../estate_branch.php">';
				print '<input type="hidden" name="code" value="'.$real_code.'">';

				print '<td><input type="button" onclick="history.back()" value="戻る"></td>';
				print '<td><input type="submit" name="reform_complete" value="リフォーム完了"></td>';
				print '<td><input type="submit" name="reform_moshikomi" value="申込登録"></td>';
				print '<td><input type="submit" name="reform_connect" value="リフォーム連絡"></td>';
				print '<td><input type="submit" name="reform_edit" value="情報修正"></td>';
				// print '<td><input type="submit" value="登録する"></td>';
				print '</tr>';


				 ?>

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
