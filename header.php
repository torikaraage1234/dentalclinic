<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="さわやか歯科クリニック" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>さわやか歯科クリニック</title>
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <!-- slickの読み込み -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <?php wp_head(); ?>
  </head>


<body>
<!-- トップページヘッダーここから -->
  <header class="header">
    <div class="firstview_top">
      <div class="slider">
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/mv_animation1.png" alt="さわやか歯科クリニック"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/mv_animation2.png" alt="さわやか歯科クリニック"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/mv_animation3.png" alt="さわやか歯科クリニック"></div>
      </div>
      <div class="catchcopy">
        <p>地域の皆様が安心して通える、家族みんなのための歯科医院</p>
      </div>
    </div>

    <div class="reserve">
      <div class="cal">
        <div class="up"><a href="<?php echo get_template_directory_uri(); ?>/contact.html"><img src="<?php echo get_template_directory_uri(); ?>/img/reserve.png" alt="カレンダー"></a></div>
        <div class="down"><a href="<?php echo get_template_directory_uri(); ?>/contact.html">お問い合わせ</a></div>
      </div>
    </div>

    <div class="container_top">
      <div class="logo">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg" alt="企業ログ"></a>
      </div>
      <div class="menu">
        <a href="<?php echo get_template_directory_uri(); ?>/clinic.html" class="navlist">医院と医師</a>
        <a href="<?php echo get_template_directory_uri(); ?>/treat.html" class="navlist">診療</a>
        <a href="<?php echo get_template_directory_uri(); ?>/news.html" class="navlist">お知らせ</a>
      </div>

      <!-- ハンバーガーメニュー部分 -->
      <div class="nav">
        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
        <input id="drawer_input" class="drawer_hidden" type="checkbox">
        <!-- ハンバーガーアイコン -->
        <label for="drawer_input" class="drawer_open"><span></span></label>
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item"><a href="<?php echo get_template_directory_uri(); ?>/clinic.html">医院と医師</a></li>
            <li class="nav_item"><a href="<?php echo get_template_directory_uri(); ?>/treat.html">診療</a></li>
            <li class="nav_item"><a href="<?php echo get_template_directory_uri(); ?>/news.html">お知らせ</a></li>
          </ul>
        </nav>
      </div>

    </div>
  </header>
<!-- トップページヘッダーここまで -->