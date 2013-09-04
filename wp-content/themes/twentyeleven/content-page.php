<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->

<!-- SPHERE START -->
<!-- show products only on particular product pages -->
<?php if (get_the_id() == 6) { ?>
    <?php
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
	?>

	<div id="products" style="margin-bottom: 20cm;">
		<?php
			foreach($products->results as $product) {
		?>
				<div style="height:190px; width:136px; margin:20px 10px 0 0; float:left; font-size:13px; color:#6d778e; font-family:'Source Sans Pro',Helvetica,sans-serif; font-weight:400;">
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
<?php } ?>
<!-- SPHERE END -->
