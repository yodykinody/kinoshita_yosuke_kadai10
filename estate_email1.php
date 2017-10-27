<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="UTF-8">
<title>不動産管理</title>
<meta name="viewport" content="width=device-width">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="CSS/detail16.css">
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

	try{

	$dsn='mysql:dbname=php_shop;host=localhost;charset=utf8';
	$user='root';
	$password='';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$sql='SELECT code,real_name,post1,post2,address,roomNumber,yachin,kyoeki,shiki,rei,madori,madoriType,keyLocation,email1,email2,email3,email4,email5,company1,company2,company3,company4,company5,other,timedate,moshikomi="0" FROM estate WHERE 1';
	$sql='SELECT * FROM estate WHERE kushitsu="1" ORDER BY real_name  ASC,roomNumber';
	$stmt=$dbh->prepare($sql);
	$stmt->execute();


	$dbh=null;


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

	while(true){
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);


		//不動産変数
		$real_name=$rec['real_name'];
		$real_post1=$rec['post1'];
		$real_post2=$rec['post2'];
		$real_address=$rec['address'];
		$real_roomNumber=$rec['roomNumber'];
		$real_yachin=$rec['yachin'];
		$real_kyoeki=$rec['kyoeki'];
		$real_shiki=$rec['shiki'];
		$real_rei=$rec['rei'];
		$real_madori=$rec['madori'];
		$real_madoriType=$rec['madoriType'];
		$real_keyLocation=$rec['keyLocation'];
		$real_email1=$rec['email1'];
		$real_email2=$rec['email2'];
		$real_email3=$rec['email3'];
		$real_email4=$rec['email4'];
		$real_email5=$rec['email5'];
		$real_company1=$rec['company1'];
		$real_company2=$rec['company2'];
		$real_company3=$rec['company3'];
		$real_company4=$rec['company4'];
		$real_company5=$rec['company5'];
		$real_other=$rec['other'];



		//mainデータ
		$oshiraseya='info@oshirase.com';




		if($rec==false){
			break;
		}

		// print $real_name;
		// print $post1;
		// print $post2;
		// print $address;
		// print $roomNumber;
		// print $yachin;
		// print $shiki;
		// print $rei;
		// print $madori;
		// print $keyLocation;
		// print $email1;
		// print $email2;
		// print $email3;
		// print $company1;
		// print $company2;
		// print $company3;
		// print '<br>';


		$honbun="";
		$honbun.="\n";
		$honbun.="\n";
		$honbun.=$owner_lastname.''.$owner_firstname.'　様からの空室連絡です。';
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
		$honbun.='間取り：'.$real_madoriType;
		$honbun.="\n";
		$honbun.='鍵所在：'.$real_keyLocation;
		$honbun.="\n";
		$honbun.='その他、費用等：'.$real_other;

		$honbun.="\n";
		$honbun.="\n";

		$honbun.='「オーナー様情報」';
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

		$title='【空室連絡　'.$real_name.'　'.$real_roomNumber.'号室】　'.$real_address.'　'.number_format($real_yachin).'円　'.number_format($real_kyoeki).'円';
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
			continue;
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
			continue;
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
			continue;
			// break;
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
			continue;
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
			continue;
			// break;
		}













		print nl2br($honbun);
		print $title;





	}




}
	catch(Exception $e){
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		exit();
	}

	 ?>


	 <table>
		<tr>
			<td><a href="estate_list.php">戻る</a></td>

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
