<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="keywords" content="sakainote, 酒井 リョウ" />
<!-- OGP --><?php $excerption = '酒井リョウの備忘録からスタートしたブログメディア。Webからライフハックまで幅広く書いています。'; ?>
<meta property="article:publisher" content="https://www.facebook.com/ryoxsakai" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo str_replace( home_url(), '', get_permalink() ); ?>" />
<meta property="og:title" content="<?php if(is_home()){ bloginfo('name'); }elseif(is_single()){  wp_title('', true, 'right'); } ?>" />
<meta property="og:image" content="<?php if(is_single()){ echo wp_get_attachment_image_src(get_post_thumbnail_id(), true); } ?>" />
<meta property="og:site_name" content="sakainote" />
<meta property="og:description" content="<?php if(is_home()){ echo $exerption; }elseif(is_single()){ the_excerpt(); } ?>" />
<meta property="fb:app_id" content="1590239771197201" />
<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@x93mg" />
<meta name="twitter:creator" content="@x93mg" />
<meta name="twitter:domain" content="sakainote.com" />
<?php if(is_single()): ?><meta name="twitter:image" content="<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), true); echo $img[0]; ?>" /><?php endif; ?>
<link rel="shortcut icon" href="http://sakainote.com/favicon.ico" />
<link title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/feed/" rel="alternate" type="application/rss+xml" />
<?=$viewport; ?>
<title>
<?php
  if(is_single()){
    wp_title(' # ', true, 'right');
  }
  bloginfo('name');
?>
</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42073412-1', 'sakainote.com');
  ga('send', 'pageview');

</script>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/highlight.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/socialcount.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  hljs.initHighlightingOnLoad();
  $('a[href^=#]').click(function() {
    var speed = 400;// ミリ秒
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('html,body').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  var a = 10;
  $(".article_inner img").css('maxWidth','100%');
  $('.article_inner img, .thumbnail img').removeAttr('height');
  $('.article_inner ul').addClass('fa-ul');
  $('.article_inner ul li').prepend('<i class="fa fa-check-circle fa-li"></i> ');
  $(".the_body").css('margin-top',parseInt($(".the_header").css('height'))+20+'px');
  $(".the_sidebar").css('height',$("the_content").css('height'));
  get_social_count_facebook("<?php echo the_permalink(); ?>", "socialarea_facebook");
  get_social_count_twitter("<?php echo the_permalink(); ?>", "socialarea_twitter");
  get_social_count_hatebu("<?php echo the_permalink(); ?>", "socialarea_hatebu");
});
var d = window.document;
if(navigator.userAgent.indexOf('iPhone') > -1)
	d.write('<meta name="viewport" content="width=320px; user-scalable=no" />');
else if(navigator.userAgent.indexOf('iPad') > -1)
	d.write('<meta name="viewport" content="width=device-width; initial-scale=1.0;" />');
</script>
<link rel="author" href="https://plus.google.com/112695717769946796221" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/base.css" media="screen" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>