<?php /* Template Name: Article */ ?>

<html>
<head>
<title>Ping!<?php echo wp_title(); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">
<div id="content">

<?php the_post(); ?>
<h1 class="post_title"><?php the_title(); ?></h1>

<h4 class="post_time">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?> </h4>
<ul class="tags_area">

		<?php
		$tags = get_the_tags();

		foreach ( $tags as $tag ) {
			$tag_link = get_tag_link( $tag->term_id );
			
	echo "<li class='tag anim'><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
	echo "{$tag->name}</a></li>";
}
?>
</ul>
<hr />

<p><?php the_content(__('(more...)')); ?></p>
<hr /> 
<div class="social_plugins">
<div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>&nbsp; <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>&nbsp; <div class="g-plusone" data-size="medium"></div>

</div>
<hr />
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
</div>
</body>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</html>