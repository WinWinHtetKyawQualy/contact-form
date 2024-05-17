<!-- <?php 
if(isset($_POST['']))
?> -->
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Description" content="">
		<meta name="Keywords" content="">
		<meta name="format-detection" content="telephone=no">
		<!-- Google Material icon fonts -->
		<link rel="stylesheet" href="css/destyle.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- CSS custom -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/contact.css">

	<title>お問い合わせ| 株式会社ハウジングロビー</title>
	</head>
<body>

<div class="wrap">
	<!-- ヘッダ背景イメージ -->
	<div class="header-img">
		<img src="img/img-header-general.jpg" alt="">
	</div><!-- /.heading-img -->
	<!-- ロゴ、ユーティリティヘッダ -->
	<div class="heading-wrap">
		<div class="heading">
			<a href="index.html"><svg class="lower-header-logo-xs" viewBox="0 0 283.8 94.6"><use href="img/logo.svg#logo" style="fill:#2B2610;" /></svg>
			<svg class="lower-header-logo-long" viewBox="0 0 246 31"><use href="img/logo_long.svg#logolong" /></svg></a>

			<ul class="nav-util lower-util" id="NAVUTIL">
			</ul>
		</div>
	</div><!-- /.heading-wrap -->
	<!-- メインメニュー -->
	<div class="lower-megamenu-wrap" id="MEGA">
		<div class="header" id="MEGAMENU">
		</div><!--/.header-->
	</div><!-- /.megamenu-wrap-->
	<!-- スペーサー -->
	<div class="spacer"></div>
	<!-- カテゴリーメニュー -->
	<div class="container cat-menu-wrap">
		<div class="cat-menu">
			<div class="cat-menu-tit"><p>お問い合わせ<br class="br-xs-none"><span class="en">Contact</span></p></div>
			<div class="cat-menu-list-wrap">
					<ul class="cat-menu-list">
						<li><a class="sublink disable" href="">お問い合わせ</a></li>
					</ul>
			</div>
		</div>
	</div><!-- /.cat-menu-wrap -->
	<!-- パンくずリスト -->
	<div class="inner-controll">
		<div class="container container-index">
			<ul class="breadcrumbs">
				<li><a href="index.html">HOME</a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>
	</div><!-- /.inner-controll -->

	<div class="main-wrap w100 white pt50 pb150">
		<div class="container container-lower">

			<div class="index-tit-wrap">
				<div class="index-tit-cat">
					<p class="en">Contact</p>
					<h1 class="ja">お問い合わせ</h1>
				</div>
			</div><!-- /.tit-wrap -->


			<div class="contact-wrap">
				<div class="process">
					<div class="step active">
						<p class="step-num">STEP 1</p>
						<p class="step-desc">内容入力</p>
					</div>
					<i class="fa fa-arrow-right"></i>
					<div class="step">
						<p class="step-num">STEP 2</p>
						<p class="step-desc">内容確認</p>
					</div>
					<i class="fa fa-arrow-right"></i>
					<div class="step">
						<p class="step-num">STEP 3</p>
						<p class="step-desc">送信完了</p>
					</div>
				</div><!-- /.process -->

				<p class="text-sm-center mb15 font16">お問い合わせ種別を選択し、各項目のご記入をお願いいたします。</p>
				<ul class="contact-note mb30">
					<li class="text-sm-center">お問い合わせ後、各担当者からご連絡させていただきます。</li>
					<li class="text-sm-center">お問い合わせ内容により、ご連絡まで数日いただく場合がございます。</li>
				</ul>

				<!-- FORM -->
				<form id="contact-form" method="post" enctype="multipart/form-data">
					<!-- 問合せ種別 -->
					<fieldset id="fieldset-top">
						<div>
							<h2 class="font-notosans700 font20 text-center">お問い合わせ種別</h2>
							<p class="required mb15 choice-inst">お問合せ内容の種別をお選びください。</p>
						</div>
						<div class="choice_wrap">
								<label for="choice01-1">
									<input type="radio" id="choice01-1" name="choice01" value="choice01-1" />
									<span>入居者様からのお問い合わせ<span class="font12">（あなたが入居中の場合）</span></span>
								</label>
						
								<label for="choice01-2">
									<input type="radio" id="choice01-2" name="choice01" value="choice01-2" />
									物件オーナー様・賃貸経営に関するお問い合わせ
								</label>
						
								<label for="choice01-3">
									<input type="radio" id="choice01-3" name="choice01" value="choice01-3" />
									賃貸のお部屋探しの方
								</label>

								<label for="choice01-4">
									<input type="radio" id="choice01-4" name="choice01" value="choice01-4" />
									弊社への各種お問い合わせ及び、ご相談
							</label>
						</div>
						<!-- <p class="error">必須項目です。選択をお願いします。</p> -->
					</fieldset>

					<!-- お名前 -->
					<fieldset id="name">
						<!-- お名前（漢字） -->
						<div class="input-text-wrap mb10">
							<label class="label-input-text required" for="name01">お名前（漢字）</label>
							<div class="inputs" id="kanji-name">
								<div style="display:grid; grid-template-columns: 1fr 1fr; gap:8px;">
									<input class="w100" type="text" id="name01-1" name="name01" placeholder="姓">
									<input class="w100" type="text" id="name01-2" name="name01" placeholder="名">
								</div>
							</div>
						</div>
						<!-- お名前（フリガナ） -->
						<div class="input-text-wrap">
							<label class="label-input-text required" for="name02">お名前（フリガナ）</label>
							<div class="inputs" id="katakana-name">
								<div style="display:grid; grid-template-columns: 1fr 1fr; gap:8px;">
									<input class="w100" type="text" id="name02-1" name="name02" placeholder="セイ"> 
									<input class="w100" type="text" id="name02-2" name="name02" placeholder="メイ">
								</div>
							</div>
						</div>
					</fieldset>

					<p class="font14 text-sm-center mb5" id="lessor-text">※お問い合わせの方とご契約者名が異なる場合は、賃貸人名義もご記入ください。</p>
					
					<fieldset id="lessor-name">
						<!-- <legend>賃貸人名</legend>-->
						<!-- お名前（漢字） -->
						<div class="input-text-wrap mb10">
							<label class="label-input-text optional" for="name03">賃貸人名（漢字）</label>
							<div class="inputs">
								<div style="display:grid; grid-template-columns: 1fr 1fr; gap:8px;">
									<input class="w100" type="text" id="name03-1" name="name03" placeholder="姓">
									<input class="w100" type="text" id="name03-2" name="name03" placeholder="名">
								</div>
								<!-- <p class="error">必須項目です。ご記入をお願いします。</p> -->
							</div>
						</div>
						<!-- お名前（フリガナ） -->
						<div class="input-text-wrap">
							<label class="label-input-text optional" for="name04">賃貸人名（フリガナ）</label> 
							<div class="inputs">
								<div style="display:grid; grid-template-columns: 1fr 1fr; gap:8px;">
									<input class="w100" type="text" id="name04-1" name="name04" placeholder="セイ"> 
									<input class="w100" type="text" id="name04-2" name="name04" placeholder="メイ">
								</div>
								<!-- <p class="error">必須項目です。ご記入をお願いします。</p> -->
							</div>

						</div>
					</fieldset>

					<fieldset>
						<!-- メールアドレス -->
						<div class="input-text-wrap">
							<label class="label-input-text required" for="email01">メールアドレス</label>
							<div class="inputs">
								<p class="font12 mb5">半角英数文字でご入力ください。</p>
								<p class="font12 mb10">ご退去のご依頼の方は、退去後も連絡の取れるアドレスをご記入ください。</p>
								<input class="w100" type="email" id="email01" name="email01" placeholder="例）aaa@example.com">
								<!-- <p class="error">必須項目です。ご記入をお願いします。</p>
								<p class="error">半角英数文字でご記入ください。</p>
								<p class="error">正確にご記入ください。</p> -->
							</div>
						</div>
					</fieldset>

					<fieldset>
						<!-- メールアドレス（確認用） -->
						<div class="input-text-wrap">
							<label class="label-input-text required" for="email02">メールアドレス（確認用）</label>
							<div class="inputs">
								<input class="w100" type="email" id="email02" name="email02" placeholder="例）aaa@example.com">
								<!-- <p class="error">必須項目です。ご記入をお願いします。</p>
								<p class="error">半角英数文字でご記入ください。</p>
								<p class="error">正確にご記入ください。</p> -->
							</div>
						</div>
					</fieldset>

					<fieldset id="address">
						<div class="input-text-wrap">
							<label class="label-input-text required" for="address">ご住所</label>
							<div class="inputs" id="address-no">
								<div>
									<p class="font12 mb5">建物名称まで正確にご記入ください。</p>
									<p class="font12 mb10">駐車場の解約の場合は、区画番号を最後にご記入ください。</p>
								<div class="input-flex mb10" id="postal-number">
										<input class="postal" type="text" id="address01" name="address" size="5" placeholder="例）000"> -
										<input class="postal" type="text" id="address02" name="address" size="7" placeholder="0000"> 
										<!-- <p class="error">必須項目です。ご記入をお願いします。</p> -->
									</div>
									<input class="w100" type="text" id="address03" name="address" placeholder="ご住所">
								</div>
								<!-- <p class="error">必須項目です。ご記入をお願いします。</p> -->
							</div>
						</div>
					</fieldset>

					<fieldset>
						<div class="input-text-wrap">
							<label class="label-input-text required" for="tel">電話番号</label>
							<div class="inputs" id="phone-no">
								<p class="font12 mb5">半角数字でご入力ください。</p>
								<p class="font12 mb10">ご退去のご依頼の方は、退去後も連絡の取れるアドレスをご記入ください。</p>
							<div class="input-flex">
									<input type="tel" id="tel01" name="tel" size="5" placeholder="例）000"> - 
									<input type="tel" id="tel02" name="tel" size="5" placeholder="0000"> - 
									<input type="tel" id="tel03" name="tel" size="5" placeholder="0000">
								</div>
								<!-- <p class="error">必須項目です。ご記入をお願いします。</p>
								<p class="error">半角数字でご記入ください。</p> -->
							</div>
						</div>
					</fieldset>

					<!-- 入居者用の依頼内容種別 -->
					<fieldset class="fieldset-resident" id="fieldset-resident">
						<p class="required mb15 choice-inst">ご依頼内容：下記より該当する依頼内容をお選びください。（複数選択可）</p>

						<div class="choice_wrap">
							<label for="resident01">
								<input type="checkbox" id="resident01" name="resident_request_type" value="resident01" />
								車庫証明発行依頼
								</label>
					
							<label for="resident02">
								<input type="checkbox" id="resident02" name="resident_request_type" value="resident02" />
								退去証明・賃料証明発行依頼
							</label>
					
							<label for="resident03">
								<input type="checkbox" id="resident03" name="resident_request_type" value="resident03" />
								名義変更手続きの依頼
								</label>

							<label for="resident04">
								<input type="checkbox" id="resident04" name="resident_request_type" value="resident04" />
								婚姻等による契約者名義変更について（苗字の変更含む）
							</label>

							<label for="resident05">
								<input type="checkbox" id="resident05" name="resident_request_type" value="resident05" />
								解約手続き（駐車場の解約を含む）
							</label>

							<label for="resident06">
								<input type="checkbox" id="resident06" name="resident_request_type" value="resident06" />
								契約の更新手続きについて
							</label>

							<label for="resident07">
								<input type="checkbox" id="resident07" name="resident_request_type" value="resident07" />
								建物や室内の不具合について（共用部含む）
							</label>

							<label for="resident08">
								<input type="checkbox" id="resident08" name="resident_request_type" value="resident08" />
								賃料等のお支払いについて
							</label>

							<label for="resident09">
								<input type="checkbox" id="resident09" name="resident_request_type" value="resident09" />
								その他、ご相談やお困りごとについて
							</label>
						</div>
						<!-- <p class="error">必須項目です。選択をお願いします。</p> -->
					</fieldset>

					<!-- オーナー様用の問合せ内容種別 -->
					<fieldset class="fieldset-owner" id="fieldset-owner">
						<p class="required choice-inst mb15">ご要望ご相談内容：下記より該当される内容をお選びください。（複数選択可）</p>

						<div class="choice_wrap">
							<label for="owner01">
								<input type="checkbox" id="owner01" name="owner_request_type" value="owner01" />
								物件の募集をお願いしたい
								</label>
					
							<label for="owner02">
								<input type="checkbox" id="owner02"  name="owner_request_type" value="owner02" />
								管理委託に関して相談をしたい
							</label>
					
							<label for="owner03">
								<input type="checkbox" id="owner03" name="owner_request_type" value="owner03" />
								建物の修繕及びリノベーションの相談をしたい
								</label>

							<label for="owner04">
								<input type="checkbox" id="owner04" name="owner_request_type" value="owner04" />
								ホームステージングの相談をしたい
								</label>

							<label for="owner05">
								<input type="checkbox" id="owner05" name="owner_request_type" value="owner05" />
								賃貸物件の空室対策について相談をしたい
								</label>

							<label for="owner06">
								<input type="checkbox" id="owner06" name="owner_request_type" value="owner06" />
								土地・建物の売買について相談をしたい
								</label>

							<label for="owner07">
								<input type="checkbox" id="owner07" name="owner_request_type" value="owner07" />
								物件等の購入について相談をしたい
								</label>

							<label for="owner08">
								<input type="checkbox" id="owner08" name="owner_request_type" value="owner08" />
								相続関連の相談をしたい
								</label>

							<label for="owner09">
								<input type="checkbox" id="owner09" name="owner_request_type" value="owner09" />
								空き家・民泊運営について相談したい
								</label>

							<label for="owner10">
								<input type="checkbox" id="owner10" name="owner_request_type" value="owner10" />
								その他
								</label>
							</div>
							<!-- <p class="error">必須項目です。選択をお願いします。</p> -->
					</fieldset>

					<!-- 賃貸物件をお探しの方用の問合せ内容種別 -->
					<fieldset class="fieldset-search" id="fieldset-search">
						<p class="required choice-inst mb15">ご要望ご相談内容：下記より該当される内容をお選びください。（複数選択可）</p>
						<div class="choice_wrap">
							<label for="search01">
								<input type="checkbox" id="search01" name="search_request_type" value="search01" />
								賃貸アパート、マンションを探している
							</label>
					
							<label for="search02">
								<input type="checkbox" id="search02"  name="search_request_type" value="search02" />
								賃貸一戸建て、借家を探している
							</label>
					
							<label for="search03">
								<input type="checkbox" id="search03" name="search_request_type" value="search03" />
								駐車場を探している
							</label>

							<label for="search04">
								<input type="checkbox" id="search04" name="search_request_type" value="search04" />
								店舗、テナントを探している
							</label>

							<label for="search05">
								<input type="checkbox" id="search05" name="search_request_type" value="search05" />
								その他
							</label>
						</div>

						<!-- <p class="error">必須項目です。選択をお願いします。</p> -->
					</fieldset>

					<fieldset>
						<!-- お問い合わせ内容 -->
						<div class="input-text-wrap">
							<label class="label-input-text" for="message">お問い合わせ内容</label>
							<div class="inputs">
								<!-- <input type="email" id="email01" name="email01" placeholder="例）aaa@example.com"> -->
								<textarea class="" name="message" id="message" cols="30" rows="8" placeholder="ご自由にお書きください。（400文字まで）"></textarea>
								<!-- <p class="error">必須項目です。ご記入をお願いします。</p>
								<p class="error">半角英数文字でご記入ください。</p>
								<p class="error">正確にご記入ください。</p> -->
							</div>
						</div>
					</fieldset>

					<div class="btn-wrap">
						<!-- <input type="reset" value="リセット" /> -->
						<button type="reset" class="reset" id="rest-btn">リセット</button>
						<!-- <input type="submit" value="この内容で確認する" /> -->
						<button type="submit" class="submit" id="check-btn">この内容で確認する</button>
					</div>

				</form>
		
			</div><!-- /.sitemap-wrap -->


		</div><!-- /.container -->
	</div><!-- /.main-wrap.w100.white-->

</div><!-- /.wrap -->

<!-- フッター -->
<div id="FOOTER" class="footer-wrap">
</div>
<!-- /.footer -->

<!-- ページトップボタン -->
<a href="#top" class="pagetop"></a>

<!--オーバーレイ nav-->
<nav id="OVERLAY">
</nav>

<!--共通ハンバーガー-->
<header class="d-md-none" id="hamburger">
  <div id="nav_toggle"> <span></span> <span></span> <span></span> </div>
</header>

		<script src="js/common.js"></script>
		<script>
			//NAVUTIL呼び出し
      fetch("include_nav_util.html")
      .then(response => {return response.text()})
      .then(data => {document.getElementById("NAVUTIL").innerHTML = data;});

			//MEGAMENU呼び出し
      fetch("include_megamenu.html")
      .then(response => {return response.text()})
      .then(data => {document.getElementById("MEGAMENU").innerHTML = data;});

			//FOOTER呼び出し
			fetch("include_footer.html")
			.then(response => {return response.text()})
			.then(data => {document.getElementById("FOOTER").innerHTML = data;});

			//OVERLAY呼び出し
      fetch("include_nav_overlay.html")
      .then(response => {return response.text()})
      .then(data => {document.getElementById("OVERLAY").innerHTML = data;});
		</script>
		<script src="js/form-validate.js"></script>

</body>
</html>
