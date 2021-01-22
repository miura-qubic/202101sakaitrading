<!DOCTYPE html>
<html lang="ja">

<head>
	<!-- トップページの場合 <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#"> -->
	<!-- 記事の場合 <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="堺商事採用サイト">
	<title>エントリー確認画面 | 堺商事採用サイト</title>

	<!-- ファビコン -->
	<link rel="shortcut icon" href="./images/common/favicon.png" />
	<link rel="apple-touch-icon" href="./images/common/favicon.png" />
	<!-- ファビコン -->

	<!-- OGP設定 -->
	<!-- <meta property="og:url" content="ページの URL" /> -->
	<!-- TOPページの場合は「website」、WEBサイト上の記事ページなど、TOPページ以外には「article」 -->
	<!-- <meta property="og:type" content="ページの種類" />  -->
	<!-- <meta property="og:title" content="ページの タイトル" /> -->
	<!-- <meta property="og:description" content="ページのディスクリプション" /> -->
	<!-- <meta property="og:site_name" content="サイト名" /> -->
	<!-- <meta property="og:image" content="サムネイル画像の URL" /> -->
	<!-- FacebookのOGP設定 -->
	<!-- <meta property="fb:app_id" content="FacebookアプリID">  -->
	<!-- Summary・summary_large_image -->
	<!-- <meta name="twitter:card" content="カードの種類" />  -->
	<!-- <meta name="twitter:site" content="@ユーザー名" /> -->
	<!-- OGP設定 -->

	<!-- Googleフォント読み込み -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- Googleフォント読み込み -->

	<!-- CSS読み込み -->
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" type="text/css" href="./css/desktop.css?20210121_5" media="screen and (min-width: 768px)">
	<link rel="stylesheet" type="text/css" href="./css/tab.css"
		media="screen and (min-width: 768px) and (max-width: 1025px)">
	<link rel="stylesheet" type="text/css" href="./css/smart.css?20210121_4" media="screen and (max-width: 767px)">
	<!-- CSS読み込み -->

	<!-- JS読み込み -->
	<script defer src="./js/all.min.js"></script>
	<!-- JS読み込み -->

	<!--[if lt IE 9]>
	<script type="text/javascript" src="./js/selectivizr-min.js" defer></script>
	<script type="text/javascript" src="./js/html5shiv.min.js" defer></script>
	<![endif]-->
</head>

<body class="preload">
	<div id="wrapper">
		<header>
			<div class="logo"><a href="./" class="fade"><img src="./images/common/logo.svg" alt="堺商事株式会社 採用サイト"><p>RECRUITING SITE 2022</p></a></div>
			<nav>
				<ul>
					<li><a href="./special_contents.html">堺商事と学ぶ</a></li>
					<li><a href="./interview.html">社員の声</a></li>
					<li><a href="./data.html">数字で見る</a></li>
					<li><a href="./lineup.html">取扱商品</a></li>
					<li><a href="./jobinfo.html">募集要項</a></li>
					<li><a href="./entry.html">エントリー</a></li>
				</ul>
			</nav>

			<div class="menu_open is_sp" id="menu_open">
				<span></span>
				<span></span>
			</div>

		</header>
		<main>

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ entry01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="entry01 lower_mv">
				<div class="lower_mv_in">
					<div class="lower_ttl txt_anime">
							<div class="container">
							<p class="txt01 anime01"><span>エントリー</span></p>
							<h1 class="anime02"><img src="./images/entry/mv_ttl.svg" alt="ENTRY"></h1>
						</div>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ entry01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->
			
			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ entry02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="entry02 confirm bg_frame">
				<div class="container">
					<div class="box">
						<div class="copy fadein fadein01">
							<p>下記の内容で送信します。</p>
						</div>

<?php
	$name = htmlspecialchars($_POST['name'], ENT_QUOTES, "utf-8");
	$kana = htmlspecialchars($_POST['kana'], ENT_QUOTES, "utf-8");
	$sex = htmlspecialchars($_POST['sex'], ENT_QUOTES, "utf-8");
	$year = htmlspecialchars($_POST['year'], ENT_QUOTES, "utf-8");
	$month = htmlspecialchars($_POST['month'], ENT_QUOTES, "utf-8");
	$day = htmlspecialchars($_POST['day'], ENT_QUOTES, "utf-8");
	$zip1 = htmlspecialchars($_POST['zip1'], ENT_QUOTES, "utf-8");
	$zip2 = htmlspecialchars($_POST['zip2'], ENT_QUOTES, "utf-8");
	$addr1 = htmlspecialchars($_POST['addr1'], ENT_QUOTES, "utf-8");
	$tel01 = htmlspecialchars($_POST['tel01'], ENT_QUOTES, "utf-8");
	$tel02 = htmlspecialchars($_POST['tel02'], ENT_QUOTES, "utf-8");
	$tel03 = htmlspecialchars($_POST['tel03'], ENT_QUOTES, "utf-8");
	$email = htmlspecialchars($_POST['mail'], ENT_QUOTES, "utf-8");
	$university = htmlspecialchars($_POST['university'], ENT_QUOTES, "utf-8");
	$undergraduate = htmlspecialchars($_POST['undergraduate'], ENT_QUOTES, "utf-8");
	$department = htmlspecialchars($_POST['department'], ENT_QUOTES, "utf-8");
	$grdyear = htmlspecialchars($_POST['grdyear'], ENT_QUOTES, "utf-8");
	$grdmonth = htmlspecialchars($_POST['grdmonth'], ENT_QUOTES, "utf-8");
	$trigger = htmlspecialchars($_POST['trigger'], ENT_QUOTES, "utf-8");
?>

						<form action="mail.php" method="post">
							<div class="item">
								<div class="inner"><label for="name">お名前<span>【必須】</span></label></div>
								<div class="inner"><?php echo $name; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label for="name">ふりがな<span>【必須】</span></label></div>
								<div class="inner"><?php echo $kana; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label for="sex">性別<span>【必須】</span></label></div>
								<div class="inner"><?php echo $sex; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label for="birthday">生年月日<span>【必須】</span></label></div>
								<div class="inner"><?php echo $year . '年' . $month . '月' . $day . '日'; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label for="zip">ご住所<span>【必須】</span></label></div>
								<div class="inner">
									<?php echo '〒' . $zip1 . '-' . $zip2; ?><br>
									<?php echo $addr1; ?>
								</div>
							</div>
							<div class="item">
								<div class="inner"><label for="tel01">電話番号<span>【必須】</span></label></div>
								<div class="inner"><?php echo $tel01 . '-' . $tel02 . '-' . $tel03; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label for="mail">メールアドレス<span>【必須】</span></label></div>
								<div class="inner"><?php echo $email; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label>大学・学部・学科<span>【必須】</span></label></div>
								<div class="inner"><?php echo $university . '　' . $undergraduate . '　' . $department; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label for="birthday">卒業（予定）年・月<span>【必須】</span></label></div>
								<div class="inner"><?php echo $grdyear . '年 ' . $grdmonth . '月'; ?></div>
							</div>
							<div class="item">
								<div class="inner"><label for="trigger">堺商事を知ったきっかけ</label></div>
								<div class="inner"><?php echo $trigger; ?></div>
							</div>

							<div class="submit">
								<button type="submit"><span>送信</span></button>

								<input type="hidden" name="name" value="<?php echo $name; ?>">
								<input type="hidden" name="kana" value="<?php echo $kana; ?>">
								<input type="hidden" name="sex" value="<?php echo $sex; ?>">
								<input type="hidden" name="year" value="<?php echo $year; ?>">
								<input type="hidden" name="month" value="<?php echo $month; ?>">
								<input type="hidden" name="day" value="<?php echo $day; ?>">
								<input type="hidden" name="zip1" value="<?php echo $zip1; ?>">
								<input type="hidden" name="zip2" value="<?php echo $zip2; ?>">
								<input type="hidden" name="addr1" value="<?php echo $addr1; ?>">
								<input type="hidden" name="tel01" value="<?php echo $tel01; ?>">
								<input type="hidden" name="tel02" value="<?php echo $tel02; ?>">
								<input type="hidden" name="tel03" value="<?php echo $tel03; ?>">
								<input type="hidden" name="mail" value="<?php echo $email; ?>">
								<input type="hidden" name="university" value="<?php echo $university; ?>">
								<input type="hidden" name="undergraduate" value="<?php echo $undergraduate; ?>">
								<input type="hidden" name="department" value="<?php echo $department; ?>">
								<input type="hidden" name="grdyear" value="<?php echo $grdyear; ?>">
								<input type="hidden" name="grdmonth" value="<?php echo $grdmonth; ?>">
								<input type="hidden" name="trigger" value="<?php echo $trigger; ?>">
							</div>
						</form>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ entry02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ 募集要項 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<div class="section recruit_wrap grd01">
				<div class="container">
					<div class="box">
						<p>世界は、近い。</p>
						<div class="btn lightblue">
							<a href="./jobinfo.html"><span>募集要項を見る</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ 募集要項 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->
		</main>
		<footer>
			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ フッター ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<div class="container">
				<div class="box">
					<div class="logo">
						<img src="./images/common/logo.svg" alt="堺商事株式会社">
					</div>
	
					<ul>
						<li><a href="./#mv"><span>トップ</span></a></li>
						<li><a href="./special_contents.html"><span>堺商事と学ぶ</span></a></li>
						<li><a href=" ./interview.html"><span>社員の声</span></a></li>
						<li><a href="./data.html"><span>数字で見る</span></a></li>
						<li><a href="./lineup.html"><span>取扱商品</span></a></li>
						<li><a href="./jobinfo.html"><span>募集要項</span></a></li>
						<li><a href="./entry.html"><span>エントリーフォーム</span></a></li>
					</ul>
					<div class="site_link">
						<a href="https://www.sakaitrading.co.jp/index.html" target="_blank" rel="noopener"><span>堺商事コーポレートサイト</span></a>
					</div>
	
					<p class="copyright">Copyright© Sakai Trading Co. Ltd. All Rights Reserved.</p>
				</div>
			</div>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ フッター ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->
		</footer>
	</div>

	<!-- JS読み込み -->
	<script type="text/javascript" src="./js/jquery-3.2.1.min.js" defer></script>
	<script type="text/javascript" src="./js/jquery.inview.min.js" defer></script>
	<script src="./js/ofi.min.js" defer></script>
	<script src="./js/picturefill.min.js" defer></script>
	<script type="text/javascript" src="./js/jquery.zip2addr.js" defer></script>
	<script type="text/javascript" src="./js/myscript.js" defer></script>
	<!-- JS読み込み -->

</body>

</html>