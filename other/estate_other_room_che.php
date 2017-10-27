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

	$real_name=$_POST['real_name'];
	$post1=$_POST['post1'];
	$post2=$_POST['post2'];
	$address=$_POST['address'];
	$roomNumber=$_POST['roomNumber'];
	$yachin=$_POST['yachin'];
	$kyoeki=$_POST['kyoeki'];
	$shiki=$_POST['shiki'];
	$rei=$_POST['rei'];
	$madori=$_FILES['madori'];
	$madoriType=$_POST['madoriType'];
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

	        </div>
	    </div>
	    </div>
	  </div>




		<div class="boxB">

			<p style="font-size:18px;font-weight:bold;">物件の情報</p>
			<span style="font-size:15px;">物件名：<?php echo $real_name; ?></span></span><br>


			<p><span style="font-size:15px;">住所：〒<?php echo $post1; ?></span> - <span><?php echo $post2; ?></span>
			<?php echo $address; ?>

			<table>
				<tr>
					<td style="font-size:15px;">部屋番号 : <?php echo $roomNumber; ?>　</td>
					<td style="font-size:15px;">家賃 : <?php echo number_format($yachin); ?> 円　</td>
					<td style="font-size:15px;">共益費 : <?php echo number_format($kyoeki); ?> 円　</td>
					<td style="font-size:15px;">敷金 : <?php echo $shiki; ?>ヶ月　</td>
					<td style="font-size:15px;">礼金 : <?php echo $rei; ?>ヶ月</td>
				</tr>
			</table>

			<br>
			<?php if($madori['size']>0){
						if($madori['size']>1000000){
							print '画像が大きすぎます。';
						}else{
							move_uploaded_file($madori['tmp_name'],'./img/'.$madori['name']);
							print '<img src="./img/'.$madori['name'].'" style="width:200px;">';
						}
					}
			 ?>

			<br>
			<p>間取り：<?php echo $madoriType; ?></p>
			<p>鍵の所在地：<?php echo $keyLocation; ?></p>
			<br>
			<p>仲介会社アドレス（登録したアドレスに空室状況等をお送りします。）</p>

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
				print  '<p>上記の物件を作成します。</p>';
				print '<form method="post" action="../add/estate_add_do.php">';
				print '<input type="hidden" name="real_name" value="'.$real_name.'">';
				print '<input type="hidden" name="post1" value="'.$post1.'">';
				print '<input type="hidden" name="post2" value="'.$post2.'">';
				print '<input type="hidden" name="address" value="'.$address.'">';
				print '<input type="hidden" name="roomNumber" value="'.$roomNumber.'">';
				print '<input type="hidden" name="yachin" value="'.$yachin.'">';
				print '<input type="hidden" name="kyoeki" value="'.$kyoeki.'">';
				print '<input type="hidden" name="shiki" value="'.$shiki.'">';
				print '<input type="hidden" name="rei" value="'.$rei.'">';
				print '<input type="hidden" name="madori" value="'.$madori['name'].'">';
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

				print  '<tr>';
				print '<td><input type="button" onclick="history.back()" value="戻る" style="margin-right:15px;"></td>';
				print '<td><input type="submit" value="作成する"></td>';
				print '</tr>';
				print '</form>';

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
