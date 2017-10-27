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
				$moshikomiCompany=$_POST['moshikomiCompany'];
				$moshikomiTel1=$_POST['moshikomiTel1'];
				$moshikomiTel2=$_POST['moshikomiTel2'];
				$moshikomiTel3=$_POST['moshikomiTel3'];


			 ?>
			 <form method="post" action="estate_moshikomi_do.php">
			 <p style="margin-top:70px;font-size:16px;"><?php echo '物件名【'.$real_name.'　'.$roomNumber.'号室】　住所：'.$address?></p>

			 <p><?php echo '家賃：'.number_format($yachin).'円　共益費：'.number_format($kyoeki).'円　'.$shiki.'ヶ月　'.$rei.'ヶ月　間取り：'.$madoriType; ?></p>

			 <p>
				 <td style="font-size:16px;">申込会社：<?php echo $moshikomiCompany; ?>　　</td>
				 <td style="font-size:16px;">申込会社連絡先：
					 <?php echo $moshikomiTel1; ?> -
					 <?php echo $moshikomiTel2; ?> -
					 <?php echo $moshikomiTel3; ?>
				 </td>
			 </p>



					<div class="photoGallery3">
						<h3>上記の物件を申込にしますか？</h3>
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
								print '<input type="hidden" name="moshikomiCompany" value="'.$moshikomiCompany.'">';
								print '<input type="hidden" name="moshikomiTel1" value="'.$moshikomiTel1.'">';
								print '<input type="hidden" name="moshikomiTel2" value="'.$moshikomiTel2.'">';
								print '<input type="hidden" name="moshikomiTel3" value="'.$moshikomiTel3.'">';




					      print  '<tr>';
					      print '<td><input type="button" onclick="history.back()" value="戻る" style="margin-right:15px;"></td>';
					      print '<td><input type="submit" value="申込にする"></td>';
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


</body>
</html>
