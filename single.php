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
            <div class="the_socialcount"><span><?php echo getsocialcount(); ?></span> shares<br />
             <div class="likes"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook-square"></i> likes</a></div>
              <div class="tweets"><a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a></div>
              <div class="hatena"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-hatena"></i> hatena</a></div>
              <div class="gplus"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><i class="fa fa-google-plus"></i> google+</a></div>
            </div>
            <?php the_content(''); ?>
            <div class="the_socialcount">Share this if you like it :-)<br />
             <div class="likes"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook-square"></i> likes</a></div>
              <div class="tweets"><a href="http://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=チェック&nbsp;☞&nbsp;<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a></div>
              <div class="hatena"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-hatena"></i> hatena</a></div>
              <div class="gplus"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><i class="fa fa-google-plus"></i> google+</a></div>
            </div>
          </div>
          <div class="article_footer post">
            <h3>そこのあなた、この記事もCheck it out!</h3>
            <?php query_posts('showposts=3&orderby=rand'); ?>
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <p><a href="<?php the_permalink();?>"><div class="the_thumbnail"><?php the_post_thumbnail(array('125','125')); ?></div><div class="the_title"><?php the_title(); ?></div></a></p>
            <?php endwhile;endif; wp_reset_query(); ?>
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