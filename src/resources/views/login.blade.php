<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class=register-form__content>
      <div class=login-form__heading>
        <h2>Login</h2>
      </div>
      <form class="form">
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text1">
            <input type="text" name="last_name" placeholder="例:test@example.com" />
          </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">パスワード</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text1">
            <input type="text" name="last_name" placeholder="例:coachtech1106" />
          </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
      </div>
</body>

</html>