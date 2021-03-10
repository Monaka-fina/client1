<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/contact.css" />
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
      <h2>お問い合わせ × 出演依頼 × 取材等</h2>
    </div>
    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
      <div class="Form">
        <div class="Form-Item">
          <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required arbitrary">任意</span>会社名
          </p>
          <input type="text" name="company" class="Form-Item-Input" placeholder="例）株式会社○○○○">
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
          <input type="text" name="name" class="Form-Item-Input">
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
          <input type="text" name="tel" class="Form-Item-Input" placeholder="例）000-0000-0000">
        </div>
        <div class="Form-Item">
          <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
          <input type="email" name="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
        </div>
         <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お問い合わせ項目</p>
            <select name="select" class="Form-Item-Input">
                <option value="#">お問い合わせ項目を選択して下さい</option>
                <option value="">A</option>
                <option value="">B</option>
                <option value="">C</option>
                <option value="">出演依頼・取材・ご意見等</option>
              </select>
          </div>
        <div class="Form-Item">
          <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
          <textarea class="Form-Item-Textarea" name="content"></textarea>
        </div>
        <input type="submit" class="Form-Btn" value="確認する">
      </div>

    </form>  

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script type="text/javascript" src="js/index.js"></script>
</body>
</html>