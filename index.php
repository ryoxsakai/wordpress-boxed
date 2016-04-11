<?php get_header(); ?>

<header class="container the_header">
  <div class="wrap mobile-gutter">
    <h1><a href="http://sakainote.com/">sakainote</a></h1>
  </div>
</header>

<div class="container the_body">
  <div class="wrap">
    <div class="the_content gutter">
      <?php while(have_posts()): the_post(); ?>
        <article><div class="article">
          <div class="article_header">
            <p class="post-meta center">
              <span class="post-date"><i class="fa fa-calendar"></i> <?php the_date('Y/m/d'); ?></span>
            </p>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-meta center">
              <span class="post-category"><i class="fa fa-pencil"></i> <?php the_category(' / '); ?></span>
            </p>
          </div>
          <div class="article_inner">
            <div class="thumbnail"><?php the_post_thumbnail('full'); ?></div>
            <?php the_content(''); ?>
            <div class="right"><a href="<?php the_permalink(); ?>" class="more-link"><i class="fa fa-share"></i> 続きを読む</a></div>
          </div>
        </div></article>
      <?php endwhile; ?>
      <div class="the_pagenation">
        <span class="float_left"><?php next_posts_link('<i class="fa fa-toggle-left"></i> PREV'); ?></span>
        <span class="float_right"><?php previous_posts_link('NEXT <i class="fa fa-toggle-right"></i>'); ?></span>
      </div>
    </div>
    <div class="the_sidebar gutter">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>