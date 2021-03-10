<?php
	// フォームのボタンが押されたら
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// フォームから送信されたデータを各変数に格納
        $company = $_POST["company"];
		$name = $_POST["name"];
        $tel = $_POST["tel"];
		$email = $_POST["email"];
		$select = $_POST["select"];
		$content  = $_POST["content"];
	}

	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する

		// 日本語をメールで送る場合のおまじない
        	mb_language("ja");
		mb_internal_encoding("UTF-8");
		//mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");

        	// 件名を変数subjectに格納
        	$subject = "［自動送信］お問い合わせ内容の確認";

        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name}　様


お申し込みありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 会社名 】
{$company}

【 お名前 】
{$name}

【 電話番号 】
{$tel}

【 メール 】
{$email}

【 項目 】
{$select}

【 内容 】
{$content}
===================================================

内容を確認のうえ、ご連絡させて頂きます。
しばらくお待ちください。
EOM;

		$fromEmail = "takasuv102@gmail.com";
		$fromName = "RYOTA|MASTUSHITA";
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";
    $to = "takasuv102@gmail.com";
		//"ryotamastushita.surfingschool@monakadesign.sakura.ne.jp";
		// メール送信を行う
		mb_send_mail($email, $subject, $body, $header, $to,);

 		// サンクスページに画面遷移させる
		header("Location: https://ryota-mastushita-surfingschool.com/php/thanks.php");
		exit;
	}
?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/confirm.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pro surfer|松下諒大</title>
</head>
<body>
    <header>
        <h1>
          <a href="">RYOTA|MASTUSHITA</a>
        </h1>
        <nav class="pc-nav">
          <ul>
            <li><a href="index.html">TOP</a></li>
            <li><a href="index.html">PROFILE</a></li>
            <li><a href="order.html">SERVICE</a></li>
            <li><a href="order.html">PRICE</a></li>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>
        </nav>
      </header>

    <div class="contact-wrapper">
      <h1>CONTACT</h1>
      <h2>お問い合わせ × Coaching × 出演依頼 × 取材等</h2>
    </div>
        <form action="confirm.php" method="post">
            <input type="hidden" name="company" value="<?php echo $company; ?>">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="select" value="<?php echo $select; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>記入内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>









    <!--<form action="confirm.php" method="post" name="form" onsubmit="return validate()">-->
      <div class="Form">
        <div class="Form-Item">
          <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required arbitrary">確認</span>会社名
          </p>
          <p class="Form-Item-Input"><?php echo $company; ?></p>
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">確認</span>氏名</p>
          <p class="Form-Item-Input"><?php echo $name; ?></p>
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">確認</span>電話番号</p>
          <p class="Form-Item-Input"><?php echo $tel; ?></p>
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">確認</span>メールアドレス</p>
          <p class="Form-Item-Input"><?php echo $email; ?></p>
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">確認</span>お問い合わせ項目</p>
          <p class="Form-Item-Input"><?php echo $select; ?></p>
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">確認</span>お問い合わせ内容</p>
          <p class="Form-Item-Textarea"><?php echo nl2br($content); ?></p>
        </div>
        <input type="submit" class="Form-Btn" value="送信">
      </div>
    </form>  

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script type="text/javascript" src="js/index.js"></script>
</body>
</html>