<?php get_header(); ?>

<!-- main -->
<main id="main" class="main">
	<?php
	if(have_posts()):
		while(have_posts()) : the_post();
	?>

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

</main>
<!-- //main -->



<?php get_footer(); ?>