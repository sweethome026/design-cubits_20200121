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
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/services_icon01.png" alt="">
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
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_time('Y/n/j'); ?>　<?php the_title(); ?></a></li>
          <?php
              endwhile;
            else:
          ?>
            <li>お探しの記事はありませんでした</li>
          <?php endif; ?>

          <article class="blog__article">
            <a class="blog__linkbox" href="#">
              <div class="blog__info">
                <span class="blog__info__tag tag--css">CSS</span>
                <time class="blog__info__date">2000.00.00</p>
              </div>
              <h2 class="blog__title">タイトル入ります</h2>
              <p class="blog__exerpt"><a href="#">本文が入ります　テキストテキストテキストテキストテキストテキスト</a></p>
            </a>
          </article>
          <article class="blog__article">
            <a class="blog__linkbox" href="#">
              <div class="blog__info">
                <span class="blog__info__tag tag--css">CSS</span>
                <time class="blog__info__date">2000.00.00</p>
              </div>
              <h2 class="blog__title">タイトル入ります</h2>
              <p class="blog__exerpt"><a href="#">本文が入ります　テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</a></p>
            </a>
          </article>
          <article class="blog__article">
            <a class="blog__linkbox" href="#">
              <div class="blog__info">
                <span class="blog__info__tag tag--css">CSS</span>
                <time class="blog__info__date">2000.00.00</p>
              </div>
              <h2 class="blog__title">タイトル入ります</h2>
              <p class="blog__exerpt"><a href="#">本文が入ります　テキストテキストテキストテキストテキストテキスト</a></p>
            </a>
          </article>
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
        </section><!-- //scontact -->
      <!-- //contents -->

		<!-- InstanceEndEditable -->
    </main>
    <!-- //main -->

<?php get_footer(); ?>