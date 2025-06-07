
<?php get_header();?>
<!-- メインビジュアルここから -->
  <main>
    <section id="concept">
      <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/img/atmosleft.png" alt="水玉"></div>
      <div class="center">
        <h2>コンセプト</h2>
        <p>当院は、<br>小さなお子さまから<br>ご年配の方まで、<br>どなたでも<br>安心して通える<br>歯科クリニックを<br>目指しています。</p>
        <p>単に「治療をする」のではなく、<br>患者さんの不安を和らげ、<br>笑顔で通えることを大切にし、<br>最新の設備と<br>やさしい診療で<br>家族みんなの健康な歯を<br>守れるよう<br>サポートしていきます。</p>
      </div>
      <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/img/atmosright.png" alt="水玉"></div>
    </section>

    <section id="dcintro">
      <div>
        <h2>医院と医師紹介</h2>
        <div class="intro">
          <img src="<?php echo get_template_directory_uri(); ?>/img/overview1.png" alt="複数人">
          <p>皆様に安心して当院をご利用いただけますよう、最高の設備・スタッフで治療にあたります</p>
        </div>
        <div class="btn"><a class="more" href="<?php echo get_template_directory_uri(); ?>/clinic.html">詳細を見る</a></div>
      </div>

    </section>
    <section id="dctreat">
      <div>
        <h2>診療概要</h2>
        <div class="treat">
          <p>あなたに合った治療を提供いたします<br>安心してご利用ください</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/overview2.png" alt="治療場面">
        </div>
        <div class="treat_sp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/overview2.png" alt="治療場面">
          <p>あなたに合った治療を提供いたします<br>安心してご利用ください</p>
        </div>
        <div class="btn"><a class="more" href="<?php echo get_template_directory_uri(); ?>/treat.html">詳細を見る</a></div>
      </div>

    </section>
    <section class="blog">
      <div>
        <h2>ブログ・お知らせ</h2>
          <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
              // 投稿タイプ
              'post_type'      => 'post',
              // カテゴリー名
              'category_name' => 'trivia,notice',
              // 1ページに表示する投稿数
              'posts_per_page' => 3,
            );
          // データの取得
          $posts = get_posts($args);
          ?>

          <!-- ループ処理 -->
          <?php foreach($posts as $post): ?>
          <!-- 投稿データをセット -->
          <?php setup_postdata($post); ?>
          <div class="newslist">
            <div class="newsicon">
              <?php if (has_post_thumbnail()) : ?> <?php the_post_thumbnail(array(200,200)); ?> <?php else : ?> <img src="代わりのデフォルト画像パス" /> <?php endif ; ?>
            </div>
            <!-- <img class="newsicon" src="img/news1.png" alt="治療室1"> -->
            <p class="newstitle">
              <!-- パーマリンクを表示 投稿のタイトルを表示 -->
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </p>
          </div>
          <?php endforeach; ?>
          <!-- 使用した投稿データをリセット -->
          <?php wp_reset_postdata(); ?>
        <div class="btn"><a class="more" href="news.html">詳細を見る</a></div>
      </div>
    </section>

    <section id="dcaccess">
      <div>
        <h2>アクセス</h2>
        <div class="access">
          <p>さわやか歯科クリニック<br>
            〒105-0001<br>
            東京都港区虎ノ門１丁目３−１<br><br>
            東京メトロ 虎ノ門駅より直結・徒歩1分<br>
            駐車場はないので、
            近隣のコインパーキングをご利用ください</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.2806732290146!2d139.7494883!3d35.6700904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9278cad6bd%3A0xf8a15f79423fdee0!2z44CSMTA1LTAwMDEg5p2x5Lqs6YO95riv5Yy66JmO44OO6ZaA77yR5LiB55uu77yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1747548133648!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </main>
   <?php get_footer(); ?>
<!-- メインビジュアルここまで -->

