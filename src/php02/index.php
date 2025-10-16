<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/common.css">
</head>
<body>

  <!-- header -->
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <!-- main -->
  <main>
    <div class="search-form__content">

    </div>
    <div class="search-form__hesding">
      <h2 class="search-form__content-title">日本と世界の時間比較</h2>
      <form class="search-form" action="result.php" metfot="get">
        <div class="search-form__item">
          <select class="search-form__item-select" name="city">
            <option value="シドニー">シドニー</option>
            <option value="上海">上海</option>
            <option value="モスクワ">モスクワ</option>
            <option value="ロンドン">ロンドン</option>
            <option value="ヨハネスブルク">ヨハネスブルク</option>
            <option value="ニューヨーク">ニューヨーク</option>
          </select>
        </div>
        <div class="search-form__button">
          <button class="search-form__button-submit" type1="submit">検索</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>