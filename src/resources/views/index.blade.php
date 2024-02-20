<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
            @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text1">
              <input type="text" name="last_name" placeholder="山田" /><input type="text" name="first_name" placeholder="太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--button">
              <input type="radio" name="gender" value="male" />男性
              <input type="radio" name="gender" value="female" />女性
              <input type="radio" name="gender" value="other" />その他
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
          </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="building" name="building" placeholder="例:千駄ヶ谷マンション101" />
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類※</span>
          </div>
          <div class="form__group-content">
            <select class="category_id">
              <option value="choice">選択してください</option>
              <option value="delivery">1.商品のお届けについて</option>
              <option value="exchange">2.商品の交換について</option>
              <option value="trouble">3.商品トラブル</option>
              <option value="inquiry">4.ショップへのお問い合わせ</option>
              <option value="other">5.その他</option>
            </select>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>