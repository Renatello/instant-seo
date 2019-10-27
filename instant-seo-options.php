<?php
### Variables Variables Variables
$base_name = plugin_basename( 'instant-seo/instant-seo-options.php' );
$base_page = 'admin.php?page='.$base_name;
?>

<?php if( !empty( $text ) ) { echo '<div id="message" class="updated fade"><p>' . $text . '</p></div>'; } ?>
<form method="post" action="<?php echo admin_url( 'admin.php?page=' . plugin_basename( __FILE__ ) ); ?>">
<?php wp_nonce_field( 'instant-seo_options' ); ?>
<div class="wrap">
	<h2><?php _e( 'Instant Performance & SEO Options', 'instant-seo' ); ?></h2>
	<p><?php _e( 'Coming soon.', 'instant-seo' ); ?></p>
	<?php /*
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="<?php _e( 'Save Changes', 'instant-seo' ); ?>" />
	</p>
	*/ ?>
</div>
</form>
