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

			try{

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


				$timedate=date("Y年n月j日 G時i分",time());







				$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
				$user='root';
				$password='';
				$dbh=new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql='UPDATE estate SET real_name=?,post1=?,post2=?,address=?,roomNumber=?,yachin=?,kyoeki=?,shiki=?,rei=?,madoriType=?,keyLocation=?,email1=?,email2=?,email3=?,email4=?,email5=?,company1=?,company2=?,company3=?,company4=?,company5=?,other=?,timedate=?,reform=?,kushitsu=? WHERE code=?';
				$stmt=$dbh->prepare($sql);
				$data[]=$real_name;
				$data[]=$post1;
				$data[]=$post2;
				$data[]=$address;
				$data[]=$roomNumber;
				$data[]=$yachin;
				$data[]=$kyoeki;
				$data[]=$shiki;
				$data[]=$rei;
				$data[]=$madoriType;
				$data[]=$keyLocation;
				$data[]=$email1;
				$data[]=$email2;
				$data[]=$email3;
				$data[]=$email4;
				$data[]=$email5;
				$data[]=$company1;
				$data[]=$company2;
				$data[]=$company3;
				$data[]=$company4;
				$data[]=$company5;
				$data[]=$other;
				$data[]=$timedate;
				$data[]=0;
				$data[]=1;
				$data[]=$real_code;



				$stmt->execute($data);

				$dbh=null;

			print '<p>【'.$real_name.'　'.$roomNumber.'号室】をリフォーム完了にしました。(空室物件一覧に表示されます。)	</p>';
			print '<br>';

			print '<p>下記の仲介会社に【'.$real_name.'　'.$roomNumber.'号室】がリフォーム完了した事を連絡しますか？</p>';


			function com_and_email($company,$email){
			if(!($company)=="" && !($email)==""){
					print '「'.$company.'」　アドレス：'.$email;
					print '<br>';
				}else if(($company=="") && !($email)==""){
					print '「会社名が未入力です。」　アドレス：'.$email;
					print '<br>';
				}
			}

			com_and_email($company1,$email1);
			com_and_email($company2,$email2);
			com_and_email($company3,$email3);
			com_and_email($company4,$email4);
			com_and_email($company5,$email5);




			}
			catch (Exception $e)
			{
				print 'ただいま障害により大変ご迷惑をお掛けしております。';
				exit();
			}



			 ?>

			 <div class="photoGallery3">
			 	<div class="bottomLine">

		<form method="post" action="estate_reform_complete_connect.php">
			 <table>
			 	<tr>
			 		<td><a href="../estate_list.php" ><div class="return_list">物件一覧に戻る</div></a></td>
					<?php
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
					 ?>

					<td><input type="submit" value="連絡をする"></td>
			 	</tr>
			 </table>
		 </form>

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
