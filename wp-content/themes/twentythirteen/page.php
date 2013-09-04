<?php
	/**
	* The template for displaying all pages.
	*
	* This is the template that displays all pages by default.
	* Please note that this is the WordPress construct of pages and that other
	* 'pages' on your WordPress site will use a different template.
	*
	* @package WordPress
	* @subpackage Twenty_Thirteen
	* @since Twenty Thirteen 1.0
	*/

    // SPHERE
	include('./config.php');
	include('./app.php');

	$encoded_products = json_encode($result); // to json string
	$products = json_decode($encoded_products); // to object

	function imgUrl($url, $size){
		$parts = explode(".", $url);
		$idx = count($parts) - 2;
		$name = $parts[$idx]."-".$size;
		$parts[$idx] = $name;
		return implode(".", $parts);
	}
	// SPHERE - END
?>

<?php
get_header(); ?>

<div id="primary" class="content-area">
<div id="content" class="site-content" role="main">

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta"></footer><!-- .entry-meta -->
</article><!-- #post -->

<!-- SPHERE - Products -->
<div id="products" style="overflow:hidden; max-width: 604px; margin: 0 auto; width: 100%;">
	<?php
		foreach($products->results as $product) {
	?>
			<div style="height:190px; width:125px; margin:10px 25px 0 0; float:left; font-size:14px; color:#6d778e; font-family:'Source Sans Pro',Helvetica,sans-serif; font-weight:400;">
				<a href="#" style="color: #00b5de;">
					<img src="<?= count($product->masterVariant->images) > 0 ? imgUrl($product->masterVariant->images[0]->url, "small") : "http://placehold.it/165.png" ?>" style="width: 120px;height: 140p">
					<span style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;display: block;"><?= $product->name->en ?></span>
				</a>
				<span style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;display: block;"><?= count($product->variants) ?> Variants</span>
			</div>
	<?php
		}
	?>
</div>
<!-- SPHERE - Products - END -->


<?php comments_template(); ?>
<?php endwhile; ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
