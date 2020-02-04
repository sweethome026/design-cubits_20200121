<?php get_header(); ?>

<!-- main -->
<main id="main" class="main">
	<div class="pagettl">
        <p class="pagettl__ttl">ブログ</p>
        <p class="pagettl__description">フリーランスとして働くWebデザイナーの備忘録・メモ</p>
	</div>

	<div class="breadcrumbs wrap">
		<ol>
			<li><a href="#">HOME</a></li>
			<li><span>ページタイトル</span></li>
		</ol>
	</div>

	<!-- contents -->
	<div id="contents" class="blog-contents wrap">
        <section class="blog-main">
		<?php
        if (have_posts()):
            while (have_posts()):the_post();
        ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>

          <!-- <article class="single-article"> -->
            <header class="single-article__header">
              <div class="article__header__info article__info">
                <a class="article__info__tag tag--illustrator">Illustrator</a>
                <time class="article__info__date">2000.00.00</p>
			  </div>
			  <h1 class="single-article__header__heading"><?php the_title(); ?></h1>
			  
            </header>
            <div class="single-article__contents">
				<?php the_content(); ?>
              <h2>H2 見出し 26PX MT100PX テキストテキストテキストテキストテキストテキストテキスト</h2>
              <p>16PX MT60PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <h3>H3 見出し 20PX MT 80PX テキストテキストテキストテキストテキストテキストテキスト</h3>
              <p>16PX MT50PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <h4>H4 見出し 18PX MT70PX</h4>
              <p>15PX MT30PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <h5>H5 見出し 16PX MT50PX</h5>
              <p>14PX MT26PX 本文が入ります　テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <p>テキストテキストテキストテキストテキストテキストテトテキストテキストテキストテキストテキストテキストテキストテキストテトテキストテキスト。</p>
              <ul></ul><!-- ulのHTML -->
              <table></table><!-- tableのHTML -->
            </div>
            <footer class="single-article__footer">
              <ul class="pager noicon">
                <li class="pager__item prev"><?php previous_post_link(); ?>前へ</li>
                <li class="pager__item next"><a href="#">次へ</a></li>
              </ul>
            </footer>
		  </article>
        <?php
        endwhile;
        endif;
        ?>
		
        </section><!-- //blog-main -->

        <!-- blog-sidebar -->
        <?php get_sidebar(); ?>
        <!-- //blog-sidebar -->
	</div>
	<!-- //contents -->
</main>
<!-- //main -->



<?php get_footer(); ?>