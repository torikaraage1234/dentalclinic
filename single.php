<?php get_header('other'); ?>
<section id="content">
  <div id="content-wrap" class="container row pt-3">
    <div id="main" class="col-md-9">

       <?php // ループ開始
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
      <section>
        <?php the_content(); ?> <!-- 本文取得 -->
      </section>
      <?php // ループ終了
        endwhile;
      endif;
      ?>
    </div>

    <div class="btnpn">
      <?php if (get_previous_post()):?>
          <div class="btnpnleft">
            <div class="prev">
              <?php previous_post_link('%link', '前の記事へ'); ?>
            </div>
          </div>
      <?php endif; ?>

      <?php if (get_next_post()):?>
        <div class="btnpnright">
          <div class="next">
            <?php next_post_link('%link', '次の記事へ'); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer('other'); ?>