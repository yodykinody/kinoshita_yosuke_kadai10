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
		$real_code=$_POST['code'];
		$reformDay=$_POST['reformDay'];
		$reform_naiyo=$_POST['reform_naiyo'];



		$real_name=$_POST['real_name'];
		$post1=$_POST['post1'];
		$post2=$_POST['post2'];
		$address=$_POST['address'];
		$roomNumber=$_POST['roomNumber'];
		$yachin=$_POST['yachin'];
		$kyoeki=$_POST['kyoeki'];
		$shiki=$_POST['shiki'];
		$rei=$_POST['rei'];
		$madoriType=$_POST['madoriType'];
		$keyLocation=$_POST['keyLocation'];
		$other=$_POST['other'];

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


			<br>

			<span style="font-size:15px;">物件名：<?php echo $real_name; ?></span></span><br>


			<p><span style="font-size:15px;">住所：〒<?php echo $post1;?></span> - <span><?php echo $post2;?>　</span>
			<?php echo $address;?>

			<table>
				<tr>
					<td style="font-size:15px;">部屋番号 : <?php echo $roomNumber;?>　</td>
					<td style="font-size:15px;">家賃 :<?php echo $yachin;?>円　</td>
					<td style="font-size:15px;">共益費 : <?php echo $kyoeki;?>円　</td>
					<td style="font-size:15px;">敷金 : <?php echo $shiki;?>ヶ月　</td>
					<td style="font-size:15px;">礼金 : <?php echo $rei;?>ヶ月　</td>
					<td style="font-size:15px;">間取り : <?php echo $madoriType;?></td>
				</tr>
			</table>



			<p>鍵の所在地：<?php echo $keyLocation;?></p>
			<br>

			<p style="font-size:16px;font-weight:bold;text-align:">リフォーム完了日：<?php echo $reformDay; ?>
			</p>
			<table class="reform_table">
				<tr>
					<td style="font-size:16px;font-weight:bold;vertical-align:top;">リフォーム内容：</td><td class="reform_naiyo_span"><?php
					$result=trim($reform_naiyo,"\x20\t\n\r\0\v　");
					if(mb_strlen($result)==0){
						$reform_naiyo="クリーニング";
						echo $reform_naiyo;
					}else{
						echo nl2br($reform_naiyo);
					}
				 ?>
			 </td>
		 </tr>
		 </table>


			<p>仲介会社のアドレス（リフォームが完了した事を連絡します。）</p>
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
			<p><?php echo $other; ?></textarea></p>
			<br>
			<br>





			<table>
				<?php


				print  '<h3>上記をリフォーム完了に変更しますか？</h3>';
				print '<form method="post" action="estate_reform_complete_do.php">';
				print '<input type="hidden" name="code" value="'.$real_code.'">';
				print '<input type="hidden" name="reformDay" value="'.$reformDay.'">';
				print '<input type="hidden" name="reform_naiyo" value="'.$reform_naiyo.'">';
				print '<input type="hidden" name="real_name" value="'.$real_name.'">';
				print '<input type="hidden" name="post1" value="'.$post1.'">';
				print '<input type="hidden" name="post2" value="'.$post2.'">';
				print '<input type="hidden" name="address" value="'.$address.'">';
				print '<input type="hidden" name="roomNumber" value="'.$roomNumber.'">';
				print '<input type="hidden" name="yachin" value="'.$yachin.'">';
				print '<input type="hidden" name="kyoeki" value="'.$kyoeki.'">';
				print '<input type="hidden" name="shiki" value="'.$shiki.'">';
				print '<input type="hidden" name="rei" value="'.$rei.'">';
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
				print '<td><input type="submit" value="変更する"></td>';
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


<!-- <script type="text/javascript">
jQuery(document).ready(function(){
	 jQuery("#estate").validationEngine();
});
</script> -->

<!-- カレンダー -->
<script>
  $(function() {
		$(function() {
	        $("#datepicker").datepicker();
	        $("#datepicker").datepicker("option", "showOn", 'both');
	        $("#datepicker").datepicker("option", "buttonImageOnly", true);
	        $("#datepicker").datepicker("option", "buttonImage", '../img/calender.png');
					$("#datepicker").datepicker("option", "showOtherMonths", true);
					$("#datepicker").datepicker("option", "selectOtherMonths", true);
					$("#datepicker").datepicker("option", "changeYear", true);
					$("#datepicker").datepicker("option", "changeMonth", true);
					$("#datepicker").datepicker("option", "dateFormat", 'yy年mm月dd日');
					$("#datepicker").datepicker("option", "minDate", '0');




	      });



  });
</script>


</body>
</html>
