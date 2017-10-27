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

	<?php

	try{

			$real_code=$_POST['code'];
			$real_name=$_POST['real_name'];
			$real_post1=$_POST['post1'];
			$real_post2=$_POST['post2'];
			$real_address=$_POST['address'];
			$real_roomNumber=$_POST['roomNumber'];
			$real_yachin=$_POST['yachin'];
			$real_kyoeki=$_POST['kyoeki'];
			$real_shiki=$_POST['shiki'];
			$real_rei=$_POST['rei'];
			$real_madori=$_POST['madori'];
			$real_madoriType=$_POST['madoriType'];
			$real_keyLocation=$_POST['keyLocation'];
			$real_akiyoteDay=$_POST['akiyoteDay'];
			$real_email1=$_POST['email1'];
			$real_email2=$_POST['email2'];
			$real_email3=$_POST['email3'];
			$real_email4=$_POST['email4'];
			$real_email5=$_POST['email5'];
			$real_company1=$_POST['company1'];
			$real_company2=$_POST['company2'];
			$real_company3=$_POST['company3'];
			$real_company4=$_POST['company4'];
			$real_company5=$_POST['company5'];
			$real_other=$_POST['other'];
			$real_moshikomiCompany=$_POST['moshikomiCompany'];
			$real_moshikomiTel1=$_POST['moshikomiTel1'];
			$real_moshikomiTel2=$_POST['moshikomiTel2'];
			$real_moshikomiTel3=$_POST['moshikomiTel3'];


			// $timedate=date("Y年n月j日 G時i分",time());
			$timedate=$_POST['timedate'];






	$dsn2='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user2='root';
	$password2='';
	$dbh2=new PDO($dsn2,$user2,$password2);
	$dbh2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql2='SELECT lastname,firstname,post1,post2,address,tel1,tel2,tel3,fax1,fax2,fax3,cell1,cell2,cell3,email FROM owner WHERE code=1';
	$stmt2=$dbh2->prepare($sql2);
	$stmt2->execute();
	$rec2=$stmt2->fetch(PDO::FETCH_ASSOC);

	$dbh=null;

	//オーナー変数
	$owner_lastname=$rec2['lastname'];
	$owner_firstname=$rec2['firstname'];
	$owner_post1=$rec2['post1'];
	$owner_post2=$rec2['post2'];
	$owner_address=$rec2['address'];
	$owner_tel1=$rec2['tel1'];
	$owner_tel2=$rec2['tel2'];
	$owner_tel3=$rec2['tel3'];
	$owner_fax1=$rec2['fax1'];
	$owner_fax2=$rec2['fax2'];
	$owner_fax3=$rec2['fax3'];
	$owner_cell1=$rec2['cell1'];
	$owner_cell2=$rec2['cell2'];
	$owner_cell3=$rec2['cell3'];
	$owner_email=$rec2['email'];



		//不動産変数



		//mainデータ
		$oshiraseya='info@oshirase.com';



		$honbun="";
		$honbun.="\n";
		$honbun.="\n";
		$honbun.=$owner_lastname.''.$owner_firstname.'　様からの申込連絡です。';
		$honbun.="\n";
		$honbun.="\n";
		$honbun.='物件名：【'.$real_name.'　'.$real_roomNumber.'号室】';
		$honbun.="\n";
		$honbun.='住　所：〒'.$real_post1.'-'.$real_post2.'　'.$real_address;
		$honbun.="\n";
		$honbun.='家賃：'.number_format($real_yachin).'円';
		$honbun.="\n";
		$honbun.='共益費：'.number_format($real_kyoeki).'円';
		$honbun.="\n";
		$honbun.='敷金：'.$real_shiki.'ヶ月';
		$honbun.="\n";
		$honbun.='礼金：'.$real_rei.'ヶ月';
		$honbun.="\n";
		$honbun.='鍵所在：'.$real_keyLocation;
		$honbun.="\n";
		$honbun.='間取り：'.$real_madoriType;
		$honbun.="\n";
		$honbun.='その他、費用等：'.$real_other;
		$honbun.="\n";
		$honbun.='空き予定日：'.$real_akiyoteDay;
		$honbun.="\n";
		$honbun.='<h3 style="color:red;">上記の物件が'.$timedate.'に申込になっています。</h3>';


		$honbun.="\n";

		$honbun.='「オーナー情報」';
		$honbun.="\n";
		$honbun.='オーナー名：'.$owner_lastname.$owner_firstname;
		$honbun.="\n";

		if(!($owner_tel1)==""){
			$honbun.='電話番号：'.$owner_tel1.'-'.$owner_tel2.'-'.$owner_tel3;
		}
		$honbun.="\n";
		if(!($owner_fax1)==""){
			$honbun.='Ｆ Ａ Ｘ ：'.$owner_fax1.'-'.$owner_fax2.'-'.$owner_fax3;
		}
		$honbun.="\n";
		if(!($owner_cell1)==""){
			$honbun.='携帯電話：'.$owner_cell1.'-'.$owner_cell2.'-'.$owner_cell3;
		}
		$honbun.="\n";
		if(!($owner_email)==""){
			$honbun.='Email：'.$owner_email;
		}
		$honbun.="\n";

		$title='【申込連絡　'.$real_name.'　'.$real_roomNumber.'号室】　'.$real_address.'　'.number_format($real_yachin).'円　'.number_format($real_kyoeki).'円';
		$honbun=html_entity_decode($honbun,ENT_QUOTES,'UTF-8');
		mb_language('Japanese');
		mb_internal_encoding('UTF-8');

		if(!($real_email1)=="" && ($real_email2)=="" && ($real_email3)=="" && ($real_email4)=="" && ($real_email5)==""){
			$header="From:".$owner_email;
			$header.="\n";
			$header.="Bcc:".$real_email1;
			mb_send_mail($oshiraseya,$title,$honbun,$header);
			print $real_email1.'に送信しました。';
			print '<br>';
			print '<br>';
			print nl2br($title);
			print nl2br($honbun);
			print '<br>';
			print '<br>';
			print '<a href="../estate_list.php">戻る</a>';
			print '<br>';
			print '<br>';
			print '<br>';
			exit();
			// break;
		}else if(!($real_email1)=="" && !($real_email2)=="" && ($real_email3)=="" && ($real_email4)=="" && ($real_email5)==""){
			$header="From:".$owner_email;
			$header.="\n";
			$header.="Bcc:$real_email1,$real_email2";
			mb_send_mail($oshiraseya,$title,$honbun,$header);
			print $real_email1.'　　'.$real_email2.'に送信しました。';
			print '<br>';
			print '<br>';
			print nl2br($title);
			print nl2br($honbun);
			print '<br>';
			print '<br>';
			print '<a href="../estate_list.php">戻る</a>';
			print '<br>';
			print '<br>';
			print '<br>';
			exit();
			// break;
		}else if(!($real_email1)=="" && !($real_email2)=="" && !($real_email3)=="" && ($real_email4)=="" && ($real_email5)==""){
			$header="From:".$owner_email;
			$header.="\n";
			$header.="Bcc:$real_email1,$real_email2,$real_email3";
			mb_send_mail($oshiraseya,$title,$honbun,$header);
			print $real_email1.'　　'.$real_email2.'　　'.$real_email3.'に送信しました。';
			print '<br>';
			print '<br>';
			print nl2br($title);
			print nl2br($honbun);
			print '<br>';
			print '<br>';
			print '<a href="../estate_list.php">戻る</a>';
			print '<br>';
			print '<br>';
			print '<br>';
			exit();
		}else if(!($real_email1)=="" && !($real_email2)=="" && !($real_email3)=="" && !($real_email4)=="" && ($real_email5)==""){
			$header="From:".$owner_email;
			$header.="\n";
			$header.="Bcc:$real_email1,$real_email2,$real_email3,$real_email4";
			mb_send_mail($oshiraseya,$title,$honbun,$header);
			print $real_email1.'　　'.$real_email2.'　　'.$real_email3.'　　'.$real_email4.'に送信しました。';
			print '<br>';
			print '<br>';
			print nl2br($title);
			print nl2br($honbun);
			print '<br>';
			print '<br>';
			print '<a href="../estate_list.php">戻る</a>';
			print '<br>';
			print '<br>';
			print '<br>';
			exit();
			// break;
		}else if(!($real_email1)=="" &&  !($real_email2)=="" && !($real_email3)=="" && !($real_email4)=="" && !($real_email5)==""){
			$header="From:".$owner_email;
			$header.="\n";
			$header.="Bcc:$real_email1,$real_email2,$real_email3,$real_email4,$real_email5";
			mb_send_mail($oshiraseya,$title,$honbun,$header);
			print $real_email1.'　　'.$real_email2.'　　'.$real_email3.'　　'.$real_email4.'　　'.$real_email5.'に送信しました。';
			print '<br>';
			print '<br>';
			print nl2br($title);
			print nl2br($honbun);
			print '<br>';
			print '<br>';
			print '<a href="../estate_list.php">戻る</a>';
			print '<br>';
			print '<br>';
			print '<br>';
			exit();
			// break;
		}

		print nl2br($honbun);
		print $title;
		print '<br>';


}
	catch(Exception $e){
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		exit();
	}

	 ?>


	 <table>
		<tr>
			<!-- <td><a href="estate_list.php">戻る</a></td> -->

		</tr>
	 </table>








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
