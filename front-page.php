<?php get_header(); ?>

    <!-- main -->
    <main id="main" class="main">
    <!-- InstanceBeginEditable name="main" -->

      <!-- mainvisual -->
      <div class="mainvsl">
        <!-- <div class="mainvsl__imgbox"></div> -->
        <div class="mainvsl__slogan">
            <p class="mainvsl__slogan__sentence">小さなことから<br>お手伝い。</p>
            <img class="mainvsl__slogan__deco" src="<?php echo get_template_directory_uri(); ?>/imgs/top/top_mainvsl_img02.png" alt="">
        </div>
      </div>
      <!-- //mainvisual -->

      <!-- contents -->
      <div id="contents">
        <section class="feature wrap">
          <h2 data-h2subttl="feature">design cubitsについて</h2>
          <p class="lh-l">design cubitsは大阪でホームページ・デザイン・イラストの提案・制作を行うフリーランスの個人事務所です。デザインから構築、公開、運用まで一貫して行います。お客様にウェブの知識がなくても、やりたいことや予算をヒアリングし、その中で最適なものをご提案いたします。</p>
        </section><!-- //feature -->
        
        <section class="services wrap">
          <h2 data-h2subttl="services">サービス紹介</h2>
          <ul class="services__list noicon">
            <li class="services__list__item ">
              <figure class="services__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon01.png" alt=""><!-- get_template_directory_uri();はテーマディレクトリの URI（URL）を取得するテンプレートタグ -->
              </figure>
              <h4 class="services__name">Webサイトデザイン</h4>
            </li>
            <li class="services__list__item">
              <figure class="services__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon02.png" alt="">
              </figure>
              <h4 class="services__name">LP / バナー</h4>
            </li>
            <li class="services__list__item">
              <figure class="services__icon">
                <img src="imgs/services_icon03.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon03.png" alt="">
              </figure>
              <h4 class="services__name">コーディング</h4>
            </li>
            <li class="services__list__item">
              <figure class="services__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon04.png" alt="">
              </figure>
              <h4 class="services__name">イラスト / ロゴ</h4>
            </li>
            <li class="services__list__item">
              <figure class="services__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon05.png" alt="">
              </figure>
              <h4 class="services__name">サイト運営サポート</h4>
            </li>
            <li class="services__list__item">
              <figure class="services__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon06.png" alt="">
              </figure>
              <h4 class="services__name">DTP</h4>
            </li>
            <li class="services__list__item">
              <figure class="services__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon07.png" alt="">
              </figure>
              <h4 class="services__name">広報支援</h4>
            </li>
            <li class="services__list__item">
              <figure class="services__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon08.png" alt="">
              </figure>
              <h4 class="services__name">UI / UX デザイン</h4>
            </li>
          </ul>
          <div class="btn">
            <a href="services.html">サービス紹介を見る</a>
          </div>
        </section><!-- //services -->

        <section class="blog wrap">
          <h2 data-h2subttl="blog">ブログ</h2>
          <div class="blog__container">

            <!-- 1番目のやり方。 -->
            <?php
            if (have_posts()):
              while (have_posts()):the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('blog__article'); ?>>
              <a class="blog__linkbox" href="<?php the_permalink(); ?>">
                <div class="blog__info">
                  <?php the_category(); ?>
                  <time class="blog__info__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <h2 class="blog__title"><?php the_title(); ?></h2>
                <p class="blog__exerpt"><?php the_excerpt(); ?></p>
              </a>
            </article>
            <?php
              endwhile;
            endif;
            ?>

          <!-- ↓2番めのやり方 -->
          <?php
            $args = array('posts_per_page' => 3);
            $postslist = get_posts($args);
            foreach ($postslist as $post) :  /* ループ開始 */
              setup_postdata($post); ?> <!-- 記事データの取得 -->
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog__article'); ?>>
                  <a class="blog__linkbox" href="<?php the_permalink(); ?>">
                    <div class="blog__info">
                      <span class="blog__info__tag tag--<?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->slug; ?>">
                        <?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?><!-- テンプレートタグ the_category();を使うと、ul>li>aが出力されるので、カテゴリータイトルのみを取得。 -->
                      </span>
                      <time class="blog__info__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                    <h2 class="blog__title"><?php the_title(); ?></h2>
                    <p class="blog__exerpt"><?php echo get_the_excerpt(); ?></p>
                  </a>
                </article>
          <?php
          endforeach;
          wp_reset_postdata(); /* 直前のクエリ復元（どういう意味？） */
          ?>

          <!-- あざみさんに教わった方法 -->
          <?php
          $args = array(/* 変数部分は変更も可能だが$argsを使うのが一般的。1ページに記事を複数させる場所が複数ある時は、全く同じ変数を使わないこと（ページが違うなら良い） */
              'post_type' => 'post', /* ''内に投稿の種類を入れる。postは普通の投稿、カスタム投稿だと違う値になる */
              'posts_per_page' => 3, /*表示したい記事数を入れる。-1にすると全ての投稿が表示される */
              'meta_query' => array(
                      array(
                              'key' => '', //カスタムフィールドのキー
                              'value' => '', //カスタムフィールドの値
                              'compare' => '!=', //'meta_value'のテスト演算子
                  ),
              ),
          );
          $wp_query = new WP_Query($args);
          //ループ開始
          if ($wp_query->have_posts()) :/* if文を入れないと、投稿がない場合の対応ができない */
          while ($wp_query->have_posts()) : $wp_query->the_post();
          //変数定義

          ?>
          ここにループさせたいもの

          <?php endwhile; endif; wp_reset_postdata(); ?>

          </div><!-- //blog__container -->
          <div class="btn">
            <a href="#">ブログを見る</a>
          </div>
        </section><!-- //blog -->

        <section class="contact">
          <h2 class="contact__title" data-h2subttl="contact">お問い合わせ</h2>
          <p class="lh-l lh-l--white">お仕事のご依頼・ご相談、その他<br class="contact__br__sp">お問い合わせを受け付けております。<br>まずはお気軽にご連絡ください。</p>
          <div class="btn btn--white">
            <a href="contact.html">お問い合わせフォームへ</a>
          </div>
        </section><!-- //contact -->
      </div>
      <!-- //contents -->

    <!-- InstanceEndEditable -->
    </main>
    <!-- //main -->

<?php get_footer(); ?>