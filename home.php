<?php get_header(); ?>

<!-- main -->
<main id="main" class="main">
  <!-- InstanceBeginEditable name="main" -->
  <div class="pagettl">
    <h1 class="pagettl__ttl">ブログ</h1>
    <p class="pagettl__description">フリーランスとして働くWebデザイナーの備忘録・メモ</p>
  </div>

  <div class="breadcrumbs wrap">
    <ol>
      <li><a href="#">HOME</a></li>
      <li>ブログ</li>
    </ol>
  </div>

  <!-- contents -->
  <div id="contents" class="blog-contents wrap">
    <section class="blog-main">
      <h2 class="heading">全ての記事一覧</h2>
      <div class="articles">
        <article class="article">
          <a href="#" class="article__linkbox">
            <div class="article__info">
              <span class="article__info__tag tag--illustrator">Illustrator</span>
              <time class="article__info__date">2000.00.00</p>
            </div>
            <div href="#" class="article__contents">
              <h2 class="article__title">タイトル入ります テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</h2>
              <p class="article__exerpt">本文が入ります　テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </a>
        </article>
        <article class="article">
          <a href="#" class="article__linkbox">
            <div class="article__info">
              <span class="article__info__tag tag--wp">WordPress</span>
              <time class="article__info__date">2000.00.00</p>
            </div>
            <div class="article__contents">
              <h2 class="article__title">タイトル入ります</h2>
              <p class="article__exerpt">本文が入ります　テキストテキストテキストテキストテキストテキスト</p>
            </div>
          </a>
        </article>
        <article class="article">
          <a href="#" class="article__linkbox">
            <div class="article__info">
              <span class="article__info__tag tag--coding">サイト構築</span>
              <time class="article__info__date">2000.00.00</p>
            </div>
            <div class="article__contents">
              <h2 class="article__title">タイトル入ります</h2>
              <p class="article__exerpt">本文が入ります　テキストテキストテキストテキストテキストテキスト</p>
            </div>
          </a>
        </article>
        <article class="article">
          <a href="#" class="article__linkbox">
            <div class="article__info">
              <span class="article__info__tag tag--others">Others</span>
              <time class="article__info__date">2000.00.00</p>
            </div>
            <div class="article__contents">
              <h2 class="article__title">タイトル入ります</h2>
              <p class="article__exerpt">本文が入ります　テキストテキストテキストテキストテキストテキスト</p>
            </div>
          </a>
        </article>
        <article class="article">
          <a href="#" class="article__linkbox">
            <div class="article__info">
              <span class="article__info__tag tag--freelance">フリーランス</span>
              <time class="article__info__date">2000.00.00</p>
            </div>
            <div class="article__contents">
              <h2 class="article__title">タイトル入ります</h2>
              <p class="article__exerpt">本文が入ります　テキストテキストテキストテキストテキストテキスト</p>
            </div>
          </a>
        </article>
        <article class="article">
          <a href="#"  class="article__linkbox">
            <div class="article__info">
              <span class="article__info__tag tag--days">Days</span>
              <time class="article__info__date">2000.00.00</p>
            </div>
            <div class="article__contents">
              <h2 class="article__title">タイトル入ります</h2>
              <p class="article__exerpt">本文が入ります　テキストテキストテキストテキストテキストテキスト</p>
            </div>
          </a>
        </article>
        <article class="article">
          <a href="#" class="article__linkbox">
            <div class="article__info">
              <span class="article__info__tag tag--css">CSS</span>
              <time class="article__info__date">2000.00.00</p>
            </div>
            <div class="article__contents">
              <h2 class="article__title">タイトル入ります</h2>
              <p class="article__exerpt">本文が入ります　テキストテキストテキストテキストテキストテキスト</p>
            </div>
          </a>
        </article>
      </div><!-- /articles -->

      <div class="pagenation">
        <a href="#" class="first">
          <i class="fas fa-angle-double-left"></i>
        </a>
        <a href="#" class="prev">
          <i class="fas fa-angle-left"></i>
        </a>
        <span class="current">1</span>
        <a href="#" class="inactive">2</a>
        <a href="#" class="inactive">3</a>
        <a href="#" class="inactive">4</a>
        <a href="#" class="inactive">5</a>
        <span class="abbreviation-dots">…</span>
        <a href="#" class="next">
          <i class="fas fa-angle-right"></i>
        </a>
        <a href="#" class="last">
          <i class="fas fa-angle-double-right"></i>
        </a>
      </div><!-- //pagenation -->
    </section><!-- //blog-main -->

    <!-- blog-sidebar -->
    <?php get_sidebar(); ?>
    <!-- //blog-sidebar -->
  </div>
  <!-- //contents -->

  <!-- InstanceEndEditable -->
</main>
<!-- //main -->

<?php get_footer(); ?>
