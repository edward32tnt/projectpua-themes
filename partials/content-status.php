<?php
/** content-status.php
 *
 * The template for displaying posts in the Status Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */


tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>">
	<?php tha_entry_top(); ?>
	
	<div class="entry-content">
		<li>
		<?php
		the_title( '<a href="' . get_permalink() .'" title="' . sprintf( esc_attr__( 'Permalink to %s', 'the-bootstrap' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark">', '</a>' );
		the_bootstrap_link_pages(); 
		?>
		</li>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //the_bootstrap_posted_on(); ?>
	</footer><!-- .entry-footer -->
	
	<?php tha_entry_bottom(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php //tha_entry_after();


/* End of file content-status.php */
/* Location: ./wp-content/themes/the-bootstrap/partials/content-status.php */